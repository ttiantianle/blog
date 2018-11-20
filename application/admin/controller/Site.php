<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Controller;
use think\facade\Request;
use app\common\utils\CFunc;
use app\admin\model\User;
use app\common\utils\AesSecurity;
use app\common\utils\RsaSecurity;

class Site extends Controller
{
    public function login(){
        header('Access-Control-Allow-Origin:*');
       if(Request::instance()->isPost()) {
            $params = CFunc::params();
            $user = trim($params['username']);
            $passwd = trim($params['passwd']);
//            echo $user; die();
//            $res = User::where(['user_name'=>['=',$user],'password'=>['eq',$passwd]])->select()->toArray();
            $res = User::where(['user_name'=>['=',$user],'password'=>['eq',$passwd]])->count();
           if ($res){
                session('username',$user);
                CFunc::returnjson("0",'登陆成功');
                die();
//               $this->redirect('blog/index');
           }
           else{
               CFunc::returnjson("1",'账户不存在或密码错误');
               die();
           }
       }
        return $this->fetch();
    }
    public function test(){
//        file_exists(dirname(__DIR__.'/id_rsa')) or die('不存在');
//        $private_key = 'id_rsa'; // 私钥路径
//        $public_key = 'id_rsa.pub'; // 公钥路径
//
//        $rsa = new RsaSecurity($private_key, $public_key);
//
//        $origin_data = '这是一条测试数据';
//
//        $ecryption_data = $rsa->privEncrypt($origin_data);
//
//        $decryption_data = $rsa->publicDecrypt($ecryption_data);
//
//        echo '私钥加密后的数据为：' . $ecryption_data;
//        echo PHP_EOL;
//        echo '公钥解密后的数据为: ' . $decryption_data;
//        echo PHP_EOL;

//        echo 'abc<br>';
//        $c = AesSecurity::_encrypt('abc','123456');
//        echo $c;
//        echo '<br>';
//        echo AesSecurity::_decrypt($c,'123456');
//            var_dump(AesSecurity::getAllMethod());
//        $a = '/uMmBzM2Me1f7aGT0+Tq3Q==';
//        $a = 'msg';
//        echo AesSecurity::_encrypt($a);
//        echo '<hr>';
//        echo AesSecurity::_decrypt(AesSecurity::_encrypt($a));
//        echo AesSecurity::_decrypt('/uMmBzM2Me1f7aGT0+Tq3Q==');
//        $key = md5('contentWindowHig');
//        AesSecurity::setKey($key);
//        $this->assign('a',AesSecurity::getKey());
//        echo AesSecurity::_encrypt('msg');
//        echo AesSecurity::_decrypt('evD5EE8QGSWpuqzhDFaamw==');
//        die();
//        return $this->fetch();

    }


}