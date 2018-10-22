<?php
namespace app\common\utils;
/**
 * Class CFunc 存放公共方法的类
 * @package app\common\utils
 */
class CFunc{
    /**
     * @return array
     */
    public function params(){
        $params = [];
        if($_REQUEST){
            $params = $_REQUEST;
        }
        return $params;
    }
    public function returnjson($errCode = 0,$message = '',$arr = []){
        $res = [];
        $res['errCode'] = $errCode;
        $res['message'] = $message;
        $res['data'] = $arr;
        $call = isset($_REQUEST['callback']) ? $_REQUEST['callback'] : '';
        // echo json_encode($res);
        echo $call."(".json_encode($res).")";
    }

    /**
     * @param $str
     * @return string
     */
    public function _encrypt($str){
        // 定义变量
        $key_base = "contentWindowHig";
        $iv_base = "contentDocuments";

        // 加密前处理
        $key = md5($key_base);
        $iv = $iv_base;
        // 加密
        $cryptText = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_CBC, $iv);
        $res = base64_encode($cryptText);

        return $res;
    }

    /**
     * @param $str
     * @return string
     */
   public function _decrypt($str){
        // 定义变量
        $key_base = "contentWindowHig";
        $iv_base = "contentDocuments";

        // 加密前处理
        $key = md5($key_base);
        $iv = $iv_base;

        // 解密
        $cryptText = base64_decode($str);
        $decode = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $cryptText, MCRYPT_MODE_CBC, $iv);
        return rtrim($decode);
    }

    /**
     * @param $arr
     * @return array
     */
    public function decode_params($arr){
        if(!is_array($arr)){
            echo '参数不合法';
            exit();
        }
        foreach ($arr as $k => $val){
            $arr[$k] =self::_decrypt($val);
        }
        return $arr;
    }


}