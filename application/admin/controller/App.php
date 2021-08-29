<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use app\common\model\App as AppModel;

class App extends Base
{    
    public function _initialize(){	
        parent::_initialize(); 
	} 
    /**
    ** @name='1'
    */
    public function index(){
        return view();
    }
	/**
    ** @name='2'
    */
    public function data()
    {
        $data=$_GET; 
		$data['page'] = isset($data['page']) ? $data['page'] : 1;
		$pagenum = isset($data['limit']) ? intval($data['limit']) : config('page_num');  
		$current_begin = (intval($data['page']) -1) * $pagenum;  
        $db = AppModel::field('id,name,version,update_zip,update_json,create_time,update_time');      
        $data = $db->order('id desc')->limit($current_begin,$pagenum)->select();
		//统计数据总条数		
        $count = AppModel::count('id'); 
        return to_table_data($data,$count);
    }
	/**
    ** @name='3'
    */
    public function add()
    {      
		if(request()->isPost()){
			$data=input('post.');
			!isset($data['name']) && $this->error('程序名称不能为空');
			empty(trim($data['name'])) && $this->error('程序名称不能为空');
			AppModel::get(['name' => trim($data['name'])]) && $this->error('程序名称已存在，请更换其他名称');
			//中文转拼音
			$pinyin=new \PinYin();
			$dir = $pinyin->getPinYin_string(trim($data['name']));
			//创建目录
			$path = ROOT_PATH.'/source/'.$dir;
			if(!is_dir($path)) {
				mkdir($path, 0777, true);
			}
			$data=[
				'name'   => input('name/s', ''),
				'pinyin' => $dir,
				'version'=> input('version/s', '1.0.0'),
				'path'   => '/source/'.$dir,
				'desc'   => input('desc/s', ''),
			];
			AppModel::create($data);
			$this->success('添加程序成功',url('@Admin/App/index'));
		}else{
			return view();
	   }
    }
	/**
    ** @name='4'
    */
	public function modify(){
		$data=input('');
		!isset($data['id']) && $this->error('参数非法');
        !is_numeric($data['id']) && $this->error('参数非法');
		if(request()->isPost()){		
			!isset($data['name']) && $this->error('程序名称不能为空');
			empty(trim($data['name'])) && $this->error('程序名称不能为空');
			try{
				AppModel::update([
					'name'   => input('name/s', ''),
					'version'=> input('version/s', '1.0.0'),
					'desc'   => input('desc/s', ''),
				],['id'=>intval($data['id'])]);
			} catch (\Exception $e) {
				$this->error('修改失败');
			}
			$this->success('修改成功',url('@Admin/App/index'));
		}else{
            $app = AppModel::where('id',intval($data['id']))->find();
            empty($app) && $this->error('程序不存在');			
			$this->assign('app',$app);
			return view();
	    }
	}
	/**
    ** @name='5'
    */
	public function del(){
		if(request()->isPost()){
			$data=input('post.'); 
			!isset($data['id']) && $this->error('参数非法');
			!is_numeric($data['id']) && $this->error('参数非法');
			try{
				AppModel::where('id',intval($data['id']))->delete();
			} catch (\Exception $e) {
					$this->error('删除失败');
			}
			$this->success('删除成功');	
		}
	}
	/**
    ** @name='6'
    */
	public function zip(){
		if(request()->isPost()){
			$data=input('post.');
			$this->checkToken();
			!isset($data['id']) && $this->error('参数非法');
			!is_numeric(trim($data['id'])) && $this->error('参数非法');
			$app = AppModel::field('name,pinyin,version,desc,path')->where('id',intval($data['id']))->find();
			empty($app) && $this->error('程序不存在');
			try{
				//程序更新源目录
				$dirPath=ROOT_PATH.$app['path'];
				//zip压缩包保存路径
				$savedir=ROOT_PATH."/public/update/".$app['pinyin']."/";
				if(!is_dir($savedir)) {
					mkdir($savedir, 0777, true);
				}
				$zipfile="/update/".$app['pinyin']."/version".$app['version'].".zip";			
				$zipPath= ROOT_PATH."/public".$zipfile;
				//创建zip实例
				$zip=new \ZipArchive();
				if($zip->open($zipPath, \ZipArchive::CREATE|\ZipArchive::OVERWRITE)=== TRUE){
					//调用方法，对要打包的根目录进行操作，并将ZipArchive的对象传递给方法
					addFileToZip($zip,$dirPath,$dirPath);
					//关闭处理的zip文件					
					$zip->close();
				}
				//生成配置文件
				$jsonfile="/update/".$app['pinyin']."/version.json";
				$jsonpath=ROOT_PATH."/public".$jsonfile;
				$json=[
					'version'  => $app['version'],
					'desc'     => $app['desc'],
					'download' => request()->domain().$zipfile
				];			
				file_put_contents($jsonpath,json_encode($json));
				//修改数据表
				AppModel::update([
					'update_zip'  => $zipfile,
					'update_json' => $jsonfile
				],['id'=>intval($data['id'])]);
			} catch (\Exception $e) {
				$this->error('压缩失败，Error：'.$e);
				printLog('压缩失败，Error：'.$e);
			}
			$this->success('压缩成功');	
		}
	}
}
?>