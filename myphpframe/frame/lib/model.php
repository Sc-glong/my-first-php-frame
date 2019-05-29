<?php
namespace frame\lib;
class model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=47.106.234.75;dbname=design_glong';
        $username = 'root';
        $passwd = 'GL-15703276938';
        try{
            parent::__construct($dsn,$username,$passwd);
        }catch(\PDOException $e){
            get_dump($e->getMessage());
        }
    }
}