<?php
namespace app\common\model;
use think\Model;
use think\Db;

class ProductType extends Model{
	//设置主键
	protected $pk = 'id';
	//开启自动完成时间戳功能
    protected $autoWriteTimestamp = true;
}
?>