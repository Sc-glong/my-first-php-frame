<?php
namespace frame\lib;
use frame\lib\config;
use Medoo\Medoo;
class model extends Medoo
{
    public function __construct()
    {
        $option = config::all('database');
        parent::__construct($option);
    }
}