<?php
$exec = exec('git pull;');
print_r($exec);
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
const APP_DEBUG = true;//开启调试模式
const DIR_SECURE_FILENAME = false;//不生成安全文件
const APP_PATH = './App/';//定义应用目录
require './ThinkPHP/ThinkPHP.php';//引入ThinkPHP文件