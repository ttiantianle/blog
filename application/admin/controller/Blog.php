<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\common\utils\CFunc;
use think\Controller;
use app\common\utils\CExport;
use think\Log;
use app\admin\model\Blog as BlogModel;
use think\facade\Request;

class Blog extends Controller
{
    public function test(){
//       echo config('default_return_type');
        return $this->fetch();
    }
    public function index(){
      return $this->fetch();
    }

    /**
     * markdown编辑器
     */
    public function markdown(){
        if(Request::instance()->isPost()){
            $params = CFunc::params();
            $model = new BlogModel;
            $res = $model->insertBlog($params);
            if($res){
                //保存成功
                $this->redirect('listBlog');
            }
        }else{
            return $this->fetch();
        }
    }

    /**
     * 富文本编辑器
     */
    public function rich(){
        if(Request::instance()->isPost()){
            $params = CFunc::params();
            $model = new BlogModel;
            $res = $model->insertBlog($params);
            if($res){
                //保存成功
                $this->redirect('listBlog');
            }
        }else{
            return $this->fetch();
        }
    }

    /**
     * 删除博客，软删除
     */
    public function del(){
        $params = CFunc::params();
        $id = $params['id'];
        $model = new BlogModel;
        $res = $model->delete($id);
        if($res){
            //删除成功
            $this->success('删除成功','listBlog');
        }else{
            //删除失败
            $this->error('删除失败','listBlog');
        }
    }

    /**
     * 更新
     */
    public function upd(){
        $params = CFunc::params();
        $id = $params['id'];
        $arr = [];
        foreach ($params as $k => $v){
            if($k != 'id'){
                $arr[$k] = $v;
            }
        }
        $model = new BlogModel;
        $res = $model->updateBlog($id,$arr);
        if($res){
            $this->success('更新成功','listBlog');
//            $this->success('更新成功','list',3);
        }else{
            $this->error('更新失败','listBlog');
        }
    }
    /**
     *模糊查找博客
     * 按分类查找
     * 关键字查找
     */
    public function search(){
        $params = CFunc::params();
//        $key = $params['key'];
        $model = new BlogModel;
        $model->getList($params);
        $this->assign("Model",$model);
        $this->fetch('listBlog');
    }
    public function listBlog(){
        $params = CFunc::params();
//        $key = $params['key'];
        $model = new BlogModel;
        $model->getList($params);
        $this->assign("Model",$model);
        $this->fetch('listBlog');
    }
    /**
     * pdf
     */
    public function pdf(){
//        $str = "这是一个测试的pdf\n真的只是测试";
//        CExport::exportToPdf($str,false);
    }
}