<?php
namespace app\controller;
use frame;
class IndexController extends \frame\frame
{
    public function index(Type $var = null)
    {
        $model = new \frame\lib\model();
        $sql = "select * from gl_users";
        $result = $model->query($sql);
        get_dump($result->fetchAll());
    }
    public function getview()
    {
        $data = 'hello world';
        $this->assign('data',$data);
        $this->display('index.html');
    }
}