<?php
namespace app\index\controller;
use think\Request;
use think\Controller;
use think\View;
use think\Db;
use app\index\model\Comments;
class Index extends Controller
{
//    public function __construct() {
//        //动态配置，针对当前类起作用
//        config('before', 'beforeAction');
//    }
    public function index()
    {
        return $this->fetch('');
    }
    public function about() {
         return $this->fetch();
    }
    public function gbook(Request $request)
    {

        if(!is_null($request->post('comment'))) {
            //$comment=htmlspecialchars();
            $model = new Comments();
            $model->uid=2;
            $model->comment=$request->post('comment');
            $model->save();
        }
        return $this->fetch();
    }
    public function info()
    {
        return $this->fetch();
    }
    public function life()
    {
        return $this->fetch();
    }
    public function lists()
    {
        return $this->fetch();
    }
    public function share()
    {
        return $this->fetch();
    }
     public function time()
    {
        return $this->fetch();
    }
//    public function comment()
//    {
//        $res = Comments::create([
//            'uid' => 1,
//            'comment'=> 'that is fuck'
//        ],true);
//        var_dump($res);
//    }
}
