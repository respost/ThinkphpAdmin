<?php
namespace app\common\model;
use think\Model;
use think\Db;

class Config extends Model{
	//设置主键
	protected $pk = 'id';
	//设置返回数据结果类型
	protected $resultSetType = 'collection';
}
?>