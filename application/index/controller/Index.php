<?php
namespace app\index\controller;
use think\Db;
use think\Session;
use think\Request;
use think\Cookie;
use app\common\model\User as UserModel;
use app\common\model\UserLog;

class Index extends Common
{
	public function _initialize(){	
        parent::_initialize();		
	} 
	
    public function index()
    {
		$this->redirect(url('@index/login'));
	}
	
	/* 用户登录 */
    public function login()
    {    
		if(request()->isPost()){	
			$data=input('post.');
			(!isset($data['username']) || !isset($data['password'])) && $this->error('参数非法');
			$username=trim($data['username']);
			$password=trim($data['password']);
			empty($username) && $this->error('用户名不能为空');
			empty($password) && $this->error('密码不能为空');
			$user = UserModel::where('username',$username)->find();
			empty($user) && $this->error('用户不存在');
			superMd5($password) != $user['password'] && $this->error('密码错误'); 	
			$user['status'] == 0 && $this->error('账号已被冻结');
			$ip=Request::instance()->ip();
			$resultid = UserLog::create(['uid'=>$user['id'],'ip'=>$ip])->id;
            if($resultid){
				UserModel::update([
						'lastdate' => date('Y-m-d H:i:s'),
						"address"  => getArea()
				],['id'=>$user['id']]);  
                session('userid',$user['id']);
				//记住账号密码
				if(trim($data['referer'])=="1"){
					//设置cookie
					Cookie::set("userCookie",$username."-".$password,time()+3600);
				}else{
					//删除cookie
					Cookie::delete("userCookie");   
				}
				$this->success('登录成功',url('@Index/Main/index'));
            }
        }else{	
			return view();
	   }
    }
	
	/* 用户注册 */
	public function reg(){
		if(request()->isPost()){
            $data=input('post.');		
            (!isset($data['username']) || !isset($data['password'])) && $this->error('参数非法');
            $username=trim($data['username']);
			$password=trim($data['password']);		
			//用户名（手机号码）
			!preg_match('/^1[0-9]{10}$/i', $username)&& $this->error('请输入11位的手机号码');
			//密码
			!preg_match('/^[\S]{6,12}$/i', $password)&& $this->error('密码必须6到12位，且不能出现空格');		
            trim($data['password']) != trim($data['repassword']) && $this->error('两次输入的密码不匹配');
			UserModel::get(['username' => $username]) && $this->error('用户名已经存在,请更换手机号码注册');	
			$uid = null;
            Db::startTrans();
            try{
				//生成商户编号
				$appid=date("Y").getRandNumber();
				//查询数据库中是否有这个商户编号，如果存在，则在商户编号后再添加2位随机数
				while(UserModel::get(['appid' => $appid])){
					$appid.=getRandNumber(2);
				}
				//添加数据，并返回添加的主键
				$uid=UserModel::create([
					'username' => $username,
					'password' => superMd5($password),
					'appid' => $appid,
					'appkey' => createSecret()
				 ])->id;			
                Db::commit();
			} catch (\Exception $e) {
                Db::rollback();
				$this->error('注册失败，Error：'.$e);
			}
            if(!empty($uid)){
                session('userid',$uid);
                $this->success('注册成功',url('@main/index'));	
            }           
        }else{		
			return view();
		}
    }
	
    /* 退出登录 */
    public function logout(){
		try{
			session('userid', null);
		} catch (\Exception $e) {
		}
		$this->redirect(url('@index/login'));
    }
}
