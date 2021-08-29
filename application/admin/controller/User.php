<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use think\Request;

class User extends Base
{
    public function _initialize(){	
        parent::_initialize(); 
	} 
	
    public function index(){ 
        return view();	
    }
	
	public function password(){ 
        return view();	
    }
	
	public function log(){ 
        return view();	
    }
} 