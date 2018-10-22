<?php
namespace app\admin\controller;
use app\admin\controller\Base;
class Blog //extends Base
{
    public function test(){
       echo config('default_return_type');
    }
    public function index(){
        echo '这是首页';
        die();
    }

    /**
     * 添加博客
     * markdown编辑器
     * 富文本编辑器
     */
    public function add(){
    }

    /**
     * 删除博客，软删除
     */
    public function del(){

    }

    /**
     * 更新
     */
    public function upd(){

    }
    /**
     *模糊查找博客
     * 按分类查找
     * 关键字查找
     */
    public function search(){

    }
}