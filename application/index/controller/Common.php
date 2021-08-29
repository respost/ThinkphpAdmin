<?php
namespace app\index\controller;
use think\Controller;
use think\Cache;
use think\Request;
use think\Session;
use app\common\model\Config;

class Common extends Controller
{
    protected $config = array();
    protected function _initialize(){
		//获取系统配置
        if(!($this->config = Cache::get('config'))){
            foreach(Config::field('key,val')->where('ishead',0)->select() as $item){
                $this->config[$item['key']] = $item['val'];
            }
            Cache::set('config',$this->config,$this->config['cache_sys']); 
        }
         
        if($this->config['front_open'] != 1){
            header("Content-type: text/html; charset=utf-8");   
            echo $this->config['front_close_notice'];
            exit;
        }
		
		// 检查是否有token ，如果没有，设置请求token
        $token = session('token');
        if (!$token) {
            $token = md5(time() . md5(time()) . time()) . time();
            session('token', $token);
        }
		$this->assign('token', $token);	
		$request = Request::instance(); 
		$this->assign('_controller', $request->controller());
        $this->assign('_action', $request->action());
		$this->config['current_url'] = $request->url(true);
		$this->assign('config',$this->config);
    }
	/*
	 * POST请求进来，校验token
	 */
	protected function checkToken(){
		$request = Request::instance();		
		if($request->isPost()){
            $token = input('token/s', '');
            if (empty($token) || $token != session('token')) {
                $this->error('Token令牌验证失败');
            }
        }
	}
}
