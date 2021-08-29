<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use app\common\model\Member;
use app\common\model\ActionRole;
use app\common\model\MenuRole;

class Base extends Common
{
    protected $user = null;   
    public function _initialize(){	
        parent::_initialize(); 
		//判断用户有没有登录
        if(!Session::has('memberid')){
            $this->redirect(url('@Admin/Index/login'));exit;
        }else{
            $memberid = session('memberid');
			$this->member = Member::find(intval($memberid));
            empty($this->member) && $this->redirect(url('@Admin/Index/login')); 
            $this->member['status'] == 0 && $this->redirect(url('@Admin/Index/login')); 
            unset($this->member['password']); 
			//检查权限
			/*
			$role = MenuRole::where('id',$this->member['roleid'])->find();
            $this->member['roleval'] = $role['roleval']; 
            $this->member['roleid'] = $role['id']; 
            $this->check_role();
			*/
            $this->assign(['member'=>$this->member]); 
        }   
	}
	
	protected function check_role(){
        $request = Request::instance();
        $action = $request->module().'|'.$request->controller().'|'.$request->action();  
		$roleresult = ActionRole::where(['roleid'=>$this->member['roleid'],'action'=>strtolower($action)])->find();
        empty($roleresult) && $this->error('没有权限'); 
    } 
}
