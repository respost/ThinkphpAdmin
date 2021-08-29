<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;

class Main extends Base
{    
    public function _initialize(){	
        parent::_initialize(); 
	} 
    
    public function index(){
        return view();
    }
	
	public function fonticon(){
		return view();
	}
}
?>