<?php
namespace app\controller;
use frame;
use frame\lib\model;
class IndexController extends \frame\frame
{
    public function index()
    {
        // $model = new \frame\lib\model();
        // $sql = "select * from gl_users";
        // $result = $model->query($sql);
        // get_dump($result->fetchAll());

        $model = new \app\model\usersModel();

        //$result = $model->lists();
        
        $reuslt = $model->getOne(4);
        dump($reuslt);die;
        //查询
        //$data = $model->select('users','*');
        //插入
        $data  =[
            [
                'username'       => 'glong',
                "created_at" => date('Y-m-d H:i:s',time())
            ],
            [
                'username'   => 'glong11',
            "created_at" => date('Y-m-d H:i:s',time())
            ],
            [
                'username'   => 'glong22',
            "created_at" => date('Y-m-d H:i:s',time())
            ]
            ];
        $result = $model->insert('users',$data);
        dump($result);
    }
    public function getview()
    {
        // $temp = \frame\lib\config::get('CONTROLLER','route');
        // $temp2 = \frame\lib\config::get('ACTION','route');
        // print_r($temp);
        // print_r($temp2);
        $data = 'hello world';
        //dump($data);die;
        $this->assign('data',$data);
        $this->display('index.html');
    }
}