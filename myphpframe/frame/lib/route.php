<?php
namespace frame\lib;
use frame\lib\config;
class route{
    public $contro;
    public $action;
    public function __construct(){
        /**
         * 1,隐藏index.php
         * 2,获取URL参数部分
         * 3，返回对应的控制器和方法
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            //  /index/index
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path,'/'));
            if(isset($patharr[0])){
                $this->contro = $patharr[0];
            }
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            }else{
                $this->action = config::get('ACTION','route');
            }
            // url 多余部分转换为参数
            // id/1/name/glong/sex/1
            $count = count($patharr)+2;
            $i = 2;
            while($i < $count){
                if(isset($patharr[$i+1])){
                    $_GET[$patharr[$i]] =$patharr[$i +1];
                }
                $i = $i+2;
            }
        }else{
            $this->contro = config::get('CONTROLLER','route');
            $this->action = config::get('ACTION','route');
        }
    }
}