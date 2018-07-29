<?php
define('APP_DUBUG', true);

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
//定义配置文件目录
define('CONF_PATH',__DIR__.'/../conf/');
//通过此入口文件只能访问API模块
//需要注意的是BIND_MODULE定义的层数加上url中的参数为3（模块/控制器/方法）
//define('BIND_MODULE', 'api');

require __DIR__ . '/../thinkphp/start.php';


