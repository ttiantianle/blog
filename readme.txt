.env 文件是环境变量配置文件
举例：
email=tianshaoteng@163.com

[databese]
hostname=localhost
username=root
password=root

直接输出$_ENV为空时，需要配置php.ini 
//更改的是apache/bin/php.ini 
//百度：variables_order = "EGPCS
//默认是variables_order = "GPCS

[database]是分组，下面配置项都会默认加上'DATABASE_'前缀

.env配合场景配置实现不同场景的开发（开发模式，测试模式，线上模式...） 
通过修改.env中status的值，即可使用conf目录下的不同场景配置（dev.php or test.php or prod.php）
此时我们将测试的程序发布到线上时只需修改.env下的status=prod即可