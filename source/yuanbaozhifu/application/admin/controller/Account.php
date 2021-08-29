<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use app\common\model\WayAccount as WayAccountModel;
use app\common\model\Way;
/**
* @name='通道账号' 
*/
class Account extends Base
{    
    public function _initialize(){	
        parent::_initialize(); 
	}
	/**
    * @name='1' 
    */
	public function index(){
		return view();
	}
	/**
    * @name='2' 
    */
    public function data(){
        $data=$_GET;	
        $data = WayAccountModel::order('id desc')->select();
		//统计数据总条数	
        $data_count = WayAccountModel::count('id'); 
        return to_table_data($data,$data_count);
    }
	/**
    * @name='3' 
    */
	public function add(){
		$data=input('');		
		!isset($data['id']) && $this->error('参数非法');
		!is_numeric(trim($data['id'])) && $this->error('参数非法');	
		$way = Way::where('id',intval($data['id']))->find();
		 empty($way) && $this->error('接口不存在');		
		//拼接接口所需字段信息
		$fields = array();
		if (!empty($way['account_fields'])){
			$temp_fields = explode('|', $way['account_fields']);		
			foreach ($temp_fields as $value) {
				$value = explode(':', $value);				
				if (isset($value[1])) {
					$fields[$value[1]] =  array('name' => $value[0]);
				}
			}
		}
		//post提交数据
		if(request()->isPost()){
			!isset($data['name']) && $this->error('账户名称不能为空');
			empty(trim($data['name'])) && $this->error('账户名称不能为空');					
            try{
				$insertData= array();
				$insertData['name'] = trim($data['name']);
				$insertData['max_money'] = isset($data['max_money']) ? trim($data['max_money']):'0';
				$insertData['cur_money'] = isset($data['cur_money']) ? trim($data['cur_money']):'0';
				$insertData['status'] = isset($data['status']) ? 1 : 0;
				//获取提交的支付接口参数
				$params  = input('params/a');			
				$temps = array();			
				foreach ($fields as $key=>$val) {
					if (isset($params[$key])) {
						$temps[$key] = trim($params[$key]);
					}
				}
				//转为json
				$insertData['params']	=json_encode($temps);
				//保存账户字段，方便修改
				if (!empty($way['account_fields'])){					
					$insertData['fields'] = $way['account_fields'];
				}				
			    WayAccountModel::create($insertData);
            } catch (\Exception $e) {
				$this->error('添加账户失败');
			}
			$this->success('添加账户成功',url('@Admin/Account/index')); 
       }
	   $this->assign('fields',$fields);
	   return view();     
	}
	/**
    * @name='4' 
    */
    public function modify(){
	   $data=input('');
	   !isset($data['id']) && $this->error('参数非法');
	   !is_numeric(trim($data['id'])) && $this->error('参数非法');	
 
        $account = WayAccountModel::where('id',intval($data['id']))->find();
        empty($account) && $this->error('账户不存在');
		//拼接接口所需字段信息
		$fields = array();
		if (!empty($account['fields'])){
			$temp_fields = explode('|', $account['fields']);		
			foreach ($temp_fields as $value) {
				$value = explode(':', $value);				
				if (isset($value[1])) {
					$fields[$value[1]] =  array('name' => $value[0]);
				}
			}
		}
		//json转成数组
		$params = json_decode($account['params'],true);
    	foreach ($fields as $key=>$val) {
    		if (isset($params[$key])) {
    			$fields[$key]['value'] = $params[$key];
    		}
    	}
		//post提交
		if(request()->isPost()){   
			!isset($data['name']) && $this->error('账户名称不能为空');
			empty(trim($data['name'])) && $this->error('账户名称不能为空');	  
			try{
				$updata= array();
				$updata['name'] = trim($data['name']);
				$updata['max_money'] = isset($data['max_money']) ? trim($data['max_money']):'0';
				$updata['cur_money'] = isset($data['cur_money']) ? trim($data['cur_money']):'0';
				$updata['status'] = isset($data['status']) ? 1 : 0;
				//获取提交的支付接口参数
				$params  = input('params/a');			
				$temps = array();			
				foreach ($fields as $key=>$val) {
					if (isset($params[$key])) {
						$temps[$key] = trim($params[$key]);
					}
				}
				if($temps&&count($temps)>0){
					//数组转为json
					$updata['params']	=json_encode($temps);
				}
				WayAccountModel::update($updata,['id'=>intval($data['id'])]);
			} catch (\Exception $e) {
				$this->error('修改账户失败');
			}
			$this->success('修改账户成功');	 
        }
        $this->assign('account',$account);
		$this->assign('fields',$fields);
        return view();
	}
	/**
    ** @name='5'
    */    
    public function modify_field(){
		if(request()->isPost()){
			$data=input('post.');          
            $data['field'] != 'status' && $this->error('参数非法'); 
			$data['value'] = trim($data['value']);	 
			try{
				WayAccountModel::where('id',intval($data['id']))->setField($data['field'],$data['value']);
			} catch (\Exception $e) {
				$this->error('修改失败');
			}
			$this->success('修改成功');	
		}
    }
	/**
    * @name='6' 
    */
    public function del(){
		if (request()->isPost()) { 
            $data=input('post.');
			!isset($data['id']) && $this->error('参数非法');
			!is_numeric(trim($data['id'])) && $this->error('参数非法');			
            $id = intval($data['id']);
			try{
                WayAccountModel::where('id',$id)->delete();   
			} catch (\Exception $e) { 
				$this->error('删除账户失败');
			} 
            $this->success('删除账户成功');
        }
	}
}
?>