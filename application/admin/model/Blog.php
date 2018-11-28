<?php
namespace app\admin\model;
use think\Db;
use think\Model;
class Blog extends Model{
    private $pageSize = 10;//每页最多显示十条
    private $countRow = 0;
    public function insertBlog($params){
       $res = $this::save($params);
        return $res;
    }
    public function updateBlog($id,$params){

        $model = $this::get($id);
        $res = $model::save($params);
        return $res;
    }
    public function getList($params){
        $page = isset($params['page'])&&($params['page']>0) ? $params['page'] : 1;

    }
    public function getCountRow(){
        $count = $this->count();
        $this->countRow = $count;
        return $count;
    }
}
