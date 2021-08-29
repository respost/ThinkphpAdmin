<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Cache;
use app\common\model\Article as ArticleModel;
/**
* @name='文章' 
*/
class Article extends Base
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
        $name = isset($data['name']) ? trim($data['name']) : ''; 
		$typeid= isset($data['typeid']) ? trim($data['typeid']) : ''; 
		$data['page'] = isset($data['page']) ? $data['page'] : 1; 
		$pagenum = isset($data['limit']) ? intval($data['limit']) : config('page_num'); 
		$current_begin = (intval($data['page']) -1) * $pagenum;  
        $db = ArticleModel::field('id,title,content,athuor,create_time,person,typeid');
		!empty($name) && $db = $db->where('title','like','%'.$name.'%');
		!empty($typeid) && $db = $db->where('typeid',$typeid);
        $data = $db->order('id desc')->limit($current_begin,$pagenum)->select();
		//统计数据总条数
		$db = ArticleModel::field('id,title,content,athuor,create_time,person,typeid');
        !empty($name) && $db = $db->where('title','like','%'.$name.'%');
		!empty($typeid) && $db = $db->where('typeid',$typeid);
        $data_count = $db->count('id'); 
        return to_table_data($data,$data_count); 
    }
		/**
    * @name='3'    
    */
    public function add(){		
         if(request()->isPost()){
            $data=input('post.');
			empty(trim($data['title'])) && $this->error('标题不能为空');
            try{
				ArticleModel::create([
					'title'   => trim($data['title']),
					'typeid'  => trim($data['typeid']),
					'person'  => empty(trim($data['person']))? 0 : trim($data['person']),
					'content' => trim($data['content']),
					'athuor'  => empty($this->member['nickname'])? '管理员' : $this->member['nickname']
				]);
			} catch (\Exception $e) {
				$this->error('添加文章失败');
			}
			Cache::clear();
			$this->success('添加文章成功');
       }else{ 
            return view();
       }
    } 
    /**
    * @name='4'    
    */
    public function del(){
        if(request()->isPost()){
			$data=input('post.'); 
			!isset($data['id']) && $this->error('参数非法');
			!is_numeric($data['id']) && $this->error('参数非法');
            try{
				ArticleModel::where('id',intval($data['id']))->delete();
			} catch (\Exception $e) {
				$this->error('删除文章失败');
			}
			Cache::clear();
			$this->success('删除文章成功');
        }      
    } 
    /**
    * @name='5'    
    */
    public function alldel(){
        if(request()->isPost()){
			$data=input('post.'); 
            empty(trim($data['ids'])) && $this->error('没有选中需要删除的数据');
            try{
				ArticleModel::where('id','in',$data['ids'])->delete();
			} catch (\Exception $e) {
				$this->error('删除文章失败');
			}
			Cache::clear();
			$this->success('删除文章成功');
        }      
    } 
	/**
    * @name='上传图片'    
    */
    public function uploadPic()
    {
		/*
		$path = ROOT_PATH . 'public/uploads/article/';
		if(!file_exists($path)){
			mkdir($path,0777,true);
		}
        $file = request()->file('file');   
        if($file){
			//限制只能上传2MB图片
            $info = $file->validate(['size'=>1024*1024*2,'ext'=>$this->config['uploadtype']])->move($path);
            $data= array();
            if($info){ 
                $data['code'] = 0;
                $data['msg'] ='上传成功';
                $data['data']['src'] ='/uploads/article/'.$info->getSaveName();  
            }else{                
                $data['code'] = 1;
                $data['msg'] ='上传失败,请检查文件类型是否允许上传';
            }
            echo json_encode($data);
        }
		*/
		//注明：ckeditor是使用ajax上传图片，而不是用表单提交，因此不能使用request()->file()接收图片，只能用$_FILES
		$name = $_FILES['upload']['name']; 
		$size = $_FILES['upload']['size'];
		if($size  > 1024*2*1000){
			$arr= array(
				"uploaded" => 0,
				"error"    => "上传的图片大小不能超过2M"
			);
			exit(json_encode($arr));
		}
		$extension = pathInfo($name,PATHINFO_EXTENSION);
		$types = array("jpg","bmp","gif","png"); 		
		if(in_array($extension,$types)){ 
			//以日期为文件夹名，如public/uploads/20210327/
			$dateFolder = date("Ymd",time());
			$path = ROOT_PATH . 'public/uploads/article/'.$dateFolder.DS;
			if(!file_exists($path)){
				mkdir($path,0777,true);
			}		
			$img_name  = str_replace('.','',uniqid("",TRUE)).".".$extension; //图片名称
			$save_path = $path.$img_name; //保存路径 
			$img_path  = '/uploads/article/'.$dateFolder.DS.$img_name; //图片路径 
			move_uploaded_file($_FILES['upload']['tmp_name'],$save_path);   
			$arr= array(
				"uploaded" => 1,
				"fileName" => $img_name,
				"url"      => $img_path
			 );
		}else{ 
			$arr= array(
				"uploaded" => 0,
				"error"    => "图片格式不正确（只能上传.jpg/.gif/.bmp/.png类型的文件）"
			 );		 
		} 
		return json_encode($arr);
    }
    /**
    * @name='7' 
    */
    public function modify(){
       $data=input('');
       !isset($data['id']) && $this->error('参数非法');
       !is_numeric($data['id']) && $this->error('参数非法');
       $data['id'] = intval($data['id']);  
       if(request()->isPost()){
            $updata= array();
            $updata['title'] = trim($data['title']);
            $updata['typeid'] = trim($data['typeid']);
            $updata['content'] = trim($data['content']);
            $updata['person'] = isset($data['person']) ? trim($data['person']) : 0; 
			$updata['athuor'] = empty($this->member['nickname'])? '管理员' : $this->member['nickname'];
            try{
				ArticleModel::update($updata,['id'=>intval($data['id'])]);
			} catch (\Exception $e) {
				$this->error('修改文章失败');
			}
			Cache::clear();
			$this->success('修改文章成功');	 
       }else{
            $article = ArticleModel::where('id',intval($data['id']))->find();
            empty($article) && $this->error('文章不存在');
            $this->assign(['article'=>$article]);
            return view();
       }       
    } 
} 