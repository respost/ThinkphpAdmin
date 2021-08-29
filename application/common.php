<?php
use think\Cache;
use app\common\model\Config;
/**
 * 获取或配置系统参数
 * @param string $name  参数名称
 * @return string
 */
function sysconfig($name) {
	$config = Cache::get('config');
    if (empty($config)) {
        $config = Config::column('key,val');
		Cache::set('config',$config,1800);//缓存30分钟 
    }
    return isset($config[$name]) ? $config[$name] : '';
}
/** 
 * 打印日志
 * $msg 日志内容
 */
function printLog($msg) {
	$path=LOG_PATH .date('Y-m-d').".txt";
	file_put_contents($path, date('Y-m-d H:i:s') . "\r\n" . $msg . "\r\n\r\n", FILE_APPEND);
}
/**
 * 超级Md5加密
 * @param $pass
 */
function superMd5($pass) {
	//读取Config配置里的盐
	$salt=Config('pass_salt');
	return md5(md5($pass).$salt);
}
/**
 * 通过搜狐接口获取当前IP所在城市
 * @return string
 */
function getArea(){
	$res = file_get_contents("http://pv.sohu.com/cityjson?ie=utf-8");
	$json= explode(', "cname": "',$res);
	$arr= explode('"',$json[1]);
	return $arr[0];
}
/**
 * 生成订单号
 */
function generateOrderNumber($length=4) {
	$date=trim(date('Ymdhis ',time()));
	$number=trim($this->getRandNumber($length));
	return $date.$number;
}
/**
 *生成不重复的随机数字
 *@paramint$start需要生成的数字开始范围
 *@paramint$end结束范围
 *@paramint$length需要生成的随机数个数
 *@returnnumber生成的随机数
 */
function getRandNumber($length=4) {
	//初始化变量为0
	$connt = 0;
	//建一个新数组
	$temp = array();
	while($connt < $length) {
		//在一定范围内随机生成一个数放入数组中
		$temp[] = mt_rand(0, 9);
		//$data = array_unique($temp);
		//去除数组中的重复值用了“翻翻法”，就是用array_flip()把数组的key和value交换两次。这种做法比用 array_unique() 快得多。	
		$data = array_flip(array_flip($temp));
		//将数组的数量存入变量count中	
		$connt = count($data);
	}
	//为数组赋予新的键名
	shuffle($data);
	//数组转字符串
	$str=implode(",", $data);
	//替换掉逗号
	$number=str_replace(',', '', $str);
	return $number;
}
/**
 * 生成8位数的Des算法密钥
 */
function createDesKey() {
	$hash = '';
	$chars='QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789!@#$%';
	$max = strlen($chars) - 1;
	for ($i = 0; $i < 8; $i++) {
		$hash .= $chars[mt_rand(0, $max)];
	}
	return $hash;
}
/**
 * 生成永远唯一的密钥码
 * sha512(返回128位) sha384(返回96位) sha256(返回64位) md5(返回32位)
 * 还有很多Hash函数......
 * @author xiaochaun
 * @param int $type 返回格式：0大小写混合  1全大写  2全小写
 * @param string $func 启用算法：                
 * @return string
 */
function createSecret($type=0, $func='md5') {
	$uid = md5(uniqid(rand(),true).microtime());
	$hash = hash($func, $uid);
	$arr = str_split($hash);
	foreach($arr as $v) {
		if($type==0) {
			$newArr[]= empty(rand(0,1)) ? strtoupper($v) : $v;
		}
		if($type==1) {
			$newArr[]= strtoupper($v);
		}
		if($type==2) {
			$newArr[]= $v;
		}
	}
	return implode('', $newArr);
}
/**
 * 转换成表格数据
 * @param  data  数组数据
 * @param  count 数组大小               
 * @return array
 */
function to_table_data($data, $count = null) {
    $arr['code'] = 0;
    $arr['msg'] = '';
    $arr['count'] = ($count == null ? count($data) : $count);
    $arr['data'] = $data;
    return $arr;
}

/**
 * 添加文件夹里的文件到zip
 * @param  zip   ZipArchive对象
 * @param  path  源文件夹路径
 * @param  root  源文件夹根目录
 * 补充说明：第三个参数建议和第二个参数一样，因为递归会修改第二个参数的值，因此必须传第三个参数
 */
function addFileToZip($zip,$path,$root){
    $handler=opendir($path); //打开当前文件夹
    while(($filename=readdir($handler))!==false){	
        if($filename != "." && $filename != ".."){//不操作名字为'.'和'..'的文件夹或文件
            if(is_dir($path."/".$filename)){// 如果读取的某个对象是文件夹，则递归
                addFileToZip($zip,$path."/".$filename,$root);
            }else{ 
				//将文件加入zip对象，第二个参数是zip里文件的路径
				$pathFilename=$path . "/" . $filename;
                $zip->addFile($pathFilename, str_replace($root.'/','',$pathFilename));
            }
        }
    }
    @closedir($path);
}
