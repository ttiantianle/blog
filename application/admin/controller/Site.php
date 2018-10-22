<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Controller;

class Site extends Controller
{
    public function login(){
//        echo __CSS__;

        return $this->fetch();
    }
}