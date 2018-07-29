tp单入口文件
public\index.php
必须引入起始文件

隐藏入口文件
修改http.conf文件
loadmodule rewrite_module ...

项目目录配置项中
#目录配置到public
例如
<directory "forwork/think_web/public">

<directory "public">
Allowoverride all

并且需要在public文件下添加一个.htaccess文件
<IfModule mod_rewrite.c>
  Options +FollowSymlinks
  RewriteEngine On

  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  
  #RewriteRule ^goods-(\d+).html$ index.php/Home/Index/goods/id/$1 [QSA,PT,L]
  
  RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
</IfModule>
此时在访问时不需要写index.php
域名/index.php/模块/控制器/方法
域名/模块/控制器/方法

入口文件的绑定
两种方法
1、在入口文件中定义
define('BIND_MODULE','api');
这种方式定义的如果没有api模块会报错
2 在conf/config.php 中添加配置项
'auto_bind_module' => true
此时会默认访问和入口文件同名的模块 在url中只需添加控制器名称和方法名称
这种方式定义的如果没有同名模块可以访问其他模块
