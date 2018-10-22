<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Controller;
use think\facade\Request;
class Site extends Controller
{
    public function login(){
       if(Request::instance()->isPost()) {

       }else{

       }
        return $this->fetch();
    }
}