<?php
//mysql
namespace frame\lib\drive\log;
//文件系统
class mysql
{
    public function log($name)
    {
        get_dump($name);
    }
}