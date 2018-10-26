<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Controller;

class Blog extends Controller
{
    public function test(){
       echo config('default_return_type');
    }
    public function index(){
      return $this->fetch();
    }

    /**
     * markdown编辑器
     */
    public function markdown(){
        return $this->fetch();
    }

    /**
     * 富文本编辑器
     */
    public function rich(){
        return $this->fetch();
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