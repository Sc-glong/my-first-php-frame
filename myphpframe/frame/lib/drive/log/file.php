<?php
namespace frame\lib\drive\log;
use frame\lib\config;
//文件系统
class file{
    public $path;  #日志位置
    public function __construct()
    {
        $this->path = config::get('OPTION','log')['PATH'];
    }
    public function log($message,$file = 'log')
    {
       /**
        * 判断文件存储位置是否存在
        * 新建目录
        * 写日志
        */
        if(!is_dir($this->path.date('YmdH'))){
            mkdir($this->path.date('YmdH'),0777,true);
        }
         return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
    }
}