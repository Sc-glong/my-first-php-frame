<?php
namespace app\controller;
use frame;
class IndexController extends \frame\frame
{
    public function index()
    {
        $model = new \frame\lib\model();
        $sql = "select * from gl_users";
        $result = $model->query($sql);
        get_dump($result->fetchAll());
    }
    public function getview()
    {
        $temp = \frame\lib\config::get('CONTROLLER','route');
        $temp2 = \frame\lib\config::get('ACTION','route');
        print_r($temp);
        print_r($temp2);
        // $data = 'hello world';
        // $this->assign('data',$data);
        // $this->display('index.html');
    }
}