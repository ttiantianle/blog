<?php
namespace app\index\model;
use think\Model;
class User extends Model
{
    protected $autoWriteTimestamp = true;//2、在模型中开启
    protected $createTime = 'create_at';
    protected $deleteTime = false;
    protected $auto = ['create_at'];
    public function setPasswordAttr($param) {
        return md5($param);
    }
    
    //返回原有数据  不自动进行时间转换
    public function getCreateAtAttr($time)
    {
        return $time;
    }
}

