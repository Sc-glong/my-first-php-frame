<?php
namespace frame;
class frame{
    public static $classMap = array();
    protected $assign;
    static public function run()
    {
        $route = new \frame\lib\route();
        //加载控制器
        $controllerClass = $route->contro;
        $action          = $route->action;
        $controfile = APP.'/controller/'.$controllerClass.'Controller.php';
        $controClass = '\\' .MODULE. '\controller\\' . $controllerClass.'Controller';
        if(is_file($controfile))
        {
            include $controfile;
            $contro = new $controClass();
            $contro->$action();
        }else{
            throw new \Exception("找不到控制器".$controllerClass);
        }
    }
    static public function load($class)
    {
        //自动加载类库
        //new \frame\route();
        //$class = '\frame\route';
        //IMOOC.'frame/route.php';
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);
        if(is_file(MYFRAME.'/'.$class.'.php')){
            include MYFRAME.'/'.$class.'.php';
            self::$classMap[$class] = $class;
        }else{
            return false;
        }
        }
    }
    public function assign($name,$value){
        $this->assign[$name] = $value;
    }
    public function display($file){
        $file = APP.'/views/'.$file;
        if(is_file($file)){
            extract($this->assign);
            include $file;
        }
    }
}