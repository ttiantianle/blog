# bootstrap项目中的使用
### bootstrap
```
#下载生产环境的版本
https://v3.bootcss.com/getting-started/#download
```
### jquery
```
#生产版本
http://jquery.com/
```
### 项目中使用
```
#将解压后的bootstrap中js、css、fonts拷贝到tp下的public/static目录下
#将jquery拷贝到js目录下
接下来即可使用bootstrap
```
### 注意
- 这里是直接引入的bootstrap与jquery,所以将这些文件上传到了bootstrap
- 其实这类文件是没有必要上传的
- 更好的方式是使用composer 安装bootstrap，只需上传composer.json文件即可无需上传整个bootstrap，节省云空间，加快项目clone