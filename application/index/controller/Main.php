<?php
namespace app\index\controller;
use think\Request;

class Main extends Base
{
	public function _initialize(){	
        parent::_initialize();		
	} 
	
    public function index()
    {
		return view();
	}
	
}
