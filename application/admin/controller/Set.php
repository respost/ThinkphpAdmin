<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Cache;
use think\Request;
use app\common\model\Config;

class Set extends Base
{
    public function _initialize(){	
        parent::_initialize(); 
	} 
    
    /**
    * 设置首页
    */
    public function index(){ 
		if(request()->isPost()){
			$data=input('post.');            
				$open_item = Config::where('type',4)->where('pid','neq',0)->where('ishide',0)->select();
				foreach($open_item as $item){
					if(array_key_exists($item['key'],$data)){
						$data[$item['key']] = 1;
					}else{
						 $data[$item['key']] = 0;
					}
				} 
				Db::startTrans();            	  
				try{
					foreach($data as $k=>$d){ 
						$data[$k] = trim($d);
						Config::where('key',$k)->setField('val',trim($d));
					}
					Db::commit();    
				} catch (\Exception $e) { 
					Db::rollback();
					$this->error('设置失败');
				}
				//清理缓存
				Cache::clear();                    
				$this->success('设置成功');
		}else{
			$data = Config::where('ishide',0)->select()->toArray();
			$new_data= array();
			foreach($data as $k => $d){
				if($d['pid']==0){
					$new_data[] = $d;
					unset($data[$k]);
				}
			}  
			foreach($new_data as $k => $d){ 
				$new_data[$k]['child'] = array();
				foreach($data as $kk => $dd){
					if($d['id'] == $dd['pid']){
						$new_data[$k]['child'][]=$dd;
						unset($data[$kk]);
					}
				} 
			}
			$this->assign('data',$new_data);
			return view();
		}
	}
	
    protected $data = array();    
	protected function get_args($pid,$menus){
		$arr = array();
		foreach($menus as $k => $m){
			if($m['pid']==$pid){
				$m['title'] = '├╌ '.$m['title'];
				$arr[] = $m;
				unset($this->data[$k]);
			}
		}
		return $arr;
	} 

    /**
    * @name='3'
    */
    public function args(){
        $this->data =  Config::order('sort asc')->select();
        $new_data= array();
		foreach($this->data as $k => $d){
			if($d['pid'] == 0 && $d['ishead'] == 1){
				$new_data[]=$d;
				$new_data = array_merge($new_data,$this->get_args($d['id'],$this->data));  
				unset($this->data[$k]);
			}
		}
        $new_data = array_merge($new_data,$this->data);  
        $this->assign('data',$new_data);
        return view();	
    } 
} 