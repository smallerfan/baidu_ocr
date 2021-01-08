# laravel+baiduocr 百度文字识别

## 描述

基于百度sdk的图片文字识别，当前baidu sdk : aip-php-sdk-4.15.1

目前暂支持laravel 5.6+

## Install
1.安装插件
```
composer require smaller_fan/b_ocr ^1.0.2
```


2.在config/app.php文件内添加
```php
'providers' => [
        SmallerFan\BaiduOcr\BaiduOcrServiceProvider::class,
    ],
    
'aliases' => [
        'BaiduOcr' => SmallerFan\BaiduOcr\BaiduOcrFacade::class,
    ],
```
3.生成配置文件
```php
php artisan vendor:publish

生成之后会在项目 config 文件夹中出现 baiduocr.php 配置文件

将百度OCR里的配置信息填入【APP_ID，API_KEY，SECRET_KEY】

接下来就可以使用它啦~
```

使用范例：
```php
// new 个对象 ~ 
$ocr = new BaiduOcr();
//这个方法基于百度提供的方法，网络图片文字识别接口
//【具体根据自己所需要的业务范围使用，参考路径:b_ocr/api-php-sdk/AipOcr.php】
$res = $ocr->webImageUrl('http://*****.jpg');
```
第一次封装包，欢迎ISSUES ,给个STAR吧~

你真好看！