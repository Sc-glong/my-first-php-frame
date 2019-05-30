<?php
namespace frame\lib;
use frame\lib\config;
class model extends \PDO
{
    public function __construct()
    {
        $database = config::all('database');
        try{
            parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWD']);
        }catch(\PDOException $e){
            get_dump($e->getMessage());
        }
    }
}