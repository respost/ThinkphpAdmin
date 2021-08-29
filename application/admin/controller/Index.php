<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use think\Request;
use app\common\model\Member;
use app\common\model\MemberLog;

class Index extends Common
{
	public function _initialize(){
        parent::_initialize();
	}
	
    public function index()
    {
		return $this->login();
	}
	
	/* 管理员登录 */
    public function login()
    {   
		if(request()->isPost()){	
			$data=input('post.');
			(!isset($data['username']) || !isset($data['password'])) && $this->error('参数非法');
			$username=trim($data['username']);
			$password=trim($data['password']);
			empty($username) && $this->error('用户名不能为空');
			empty($password) && $this->error('密码不能为空');
			$member = Member::where('username',$username)->find();
			empty($member) && $this->error('登录名不存在');
			superMd5($password) != $member['password'] && $this->error('密码错误'); 	
			$member['status'] == 0 && $this->error('账号已被冻结'); 					
			$resultid = MemberLog::create(['uid'=>$member['id'],'ip'=>Request::instance()->ip()])->id;
            if($resultid){
                Member::where('id',$member['id'])->setField('lastdate',date('Y-m-d H:i:s')); 
                session('memberid',$member['id']);
                $this->success('登录成功',url('@Admin/Main/index'));
            }
         }else{	
			return view();
	   }
    }
	
    /* 退出登录 */
    public function logout(){
		session('memberid', null);
		$this->redirect(url('@Admin/Index/login'));
    }
	
}
