<?php
namespace frame;
use frame\lib\log;
class frame{
    public static $classMap = array();
    protected $assign;
    static public function run()
    {
        \frame\lib\log::init();
        \frame\lib\log::log($_SERVER,'server');
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
            \frame\lib\log::log('controller:'.$controClass.PHP_EOL.'action:'.$action,'log');
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
            
            $loader = new \Twig\Loader\FilesystemLoader(APP.'/views');
            $twig = new \Twig\Environment($loader, [
            'cache' => MYFRAME.'/log/twig',
            'debug' => DEBUG
            ]);
            $template = $twig->load('index.html');
            $template->display($this->assign ?? '');
        }
    }
}