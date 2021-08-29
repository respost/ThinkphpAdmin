<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use app\common\model\User as UserModel;

class Base extends Common
{
    protected $user = null;   
    public function _initialize(){	
        parent::_initialize(); 
		//判断用户有没有登录
        if(!Session::has('userid')){
            $this->error("请先登录",url('@index/login'));exit;
        }else{
            $userid = session('userid');
			$this->user = UserModel::where('id',intval($userid))->find();
            empty($this->user) && $this->redirect(url('@index/login')); 
            $this->user['status'] == 0 && $this->redirect(url('@index/login')); 
            unset($this->user['password']); 
            $this->assign(['user'=>$this->user]); 
        }   
	}  
}
