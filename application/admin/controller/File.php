<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use think\Request;

class File extends Common
{
    public function _initialize(){	
        parent::_initialize(); 
	} 
    /**
    ** 上传图片
    */
    public function upload(){
        $file = request()->file('file');   
        if($file){
            $info = $file->validate(['ext'=>$this->config['uploadtype']])->move(ROOT_PATH . 'public' . DS . 'uploads');          
            $data= array();
            if($info){ 
                $data['code'] = 1;
                $data['msg'] ='上传成功!';
                $data['data']['src'] ='/uploads/'.$info->getSaveName();  
            }else{                
                $data['code'] = 0;
                $data['msg'] ='上传失败,请检查文件类型是否允许上传!';
            }
            return $data;
        }    
    }
	/**
    ** 获取.css文件里的全部图标代码
    */	
	public function getIcons(){
		$file_path = ROOT_PATH."public/static/css/nifty-icons.css";
		if(file_exists($file_path)){
			$str = file_get_contents($file_path);//将整个文件内容读入到一个字符串中
			$str = str_replace("\r\n","<br />",$str);
			preg_match_all('/\.(.*):before/', $str, $matches);		
			$icons=$matches[0];
			for ($i = 0; $i < count($icons); ++ $i) {
				//截取字符
				$icons[$i] = substr($icons[$i],1);
				//替换字符
				$icons[$i] = str_replace(":before","",$icons[$i]);
			}
			return $icons;	
		}
		return null;
	}
} 