<?php
/**
 * 入口文件
 * 定义常量
 * 加载函数库
 * 启动框架
 */
define('MYFRAME',realpath('./'));
define('FRAME',MYFRAME.'/frame');
define('APP',MYFRAME.'/app');
define('MODULE','app');
define('DEBUG',true);

if(DEBUG){
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}
include FRAME.'/common/function.php';
include FRAME.'/frame.php';

spl_autoload_register('\frame\frame::load');
\frame\frame::run();