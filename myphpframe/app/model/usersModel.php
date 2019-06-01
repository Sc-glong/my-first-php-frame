<?php
namespace app\model;
use frame\lib\model;
class usersModel extends model{
    protected $table ='users';
    public function lists()
    {
        $result = $this->select($this->table,'*');
        return $result;
    }
    public function getOne($id)
    {
        $result = $this->get($this->table,'*',array("id"=>$id));
        return $result;
    }
}