<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26 0026
 * Time: 下午 7:31
 */
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\User as userModel;
class User extends Controller
{
    public function login()
    {

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if (isset($_POST))
            {
               $res = $this->validate([
                  'username'=>$_POST['username'],
                   'password'=>$_POST['password'],
                  //'captcha'=>$_POST['captcha']
               ],[
                   'username'=>'require|[a-zA-Z_]+|max:20',
                   'password'=>'require|min:6',
                  // 'captcha'=>'require|captcha'
               ]);
                if ($res === true){ //  必须使用全等于
                    $ll=new userModel();
                    var_dump($ll->where('username','xiaoming')->find()['username']);
                }
            }
        }
        //session('username','李白');
       return $this->fetch();
    }
    public function register()
    {

    }
}