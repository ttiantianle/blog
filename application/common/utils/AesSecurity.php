<?php
namespace app\common\utils;
/**
 * Class AesSecurity 加密类
 * @package app\common\utils
 */
class AesSecurity
{
    /**
     * method 为AES-128-CBC时
     * @var string传入要加密的明文
     * 传入一个16字节的key
     * 传入一个16字节的初始偏移向量IV
     */
    private static $method = 'AES-128-CBC';
    private static $key = 'contentWindowHig';
    private static $options = OPENSSL_RAW_DATA;
    private static $iv = 'contentDocuments';

    public static function setMethod($method){
        self::$method = $method;
    }
    public static function setKey($key){
        self::$key = $key;
    }
    /**
     * @param $options 可取值 OPENSSL_ZERO_PADDING OPENSSL_RAW_DATA
     */
    public static function setOptions($options){
        self::$options = $options;
    }
    public static function getAllMethod(){
        $arr = openssl_get_cipher_methods();
        return $arr;
    }
    public static function _encrypt($input){
        $data = openssl_encrypt(base64_encode($input),self::$method,self::$key,self::$options,self::$iv);
        return $data;
    }

    /**
     * @param $input
     * @return bool|string
     * todo rtrim
     */
    public static function _decrypt($input){
        $data = openssl_decrypt($input,self::$method,self::$key,self::$options,self::$iv);
        $data = base64_decode($data);
        return $data;
    }
}