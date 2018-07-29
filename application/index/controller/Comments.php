<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26 0026
 * Time: 下午 7:49
 */
namespace app\index\controller;
use app\index\model\Comments as CommentsModel;
use think\Controller;

class Comments extends Controller
{
    /*
     * index方法用来作为API返回查询数据
     */
    public function index()
    {
        /*
         * 设置返回结果为json格式
         */
       header("Access-Control-Allow-Origin:*");
       config('default_return_type','json');
       $model= new CommentsModel();
       $res = $model->order('id desc')->limit(5)->select();
      // var_dump(collection($res)->toArray());
       $data = collection($res)->toArray();
       return $data;
    }
}