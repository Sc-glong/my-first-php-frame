<?php
function get_dump($var){
    if(is_bool($var)){
        var_dump($var);
    }elseif(is_null($var)){
        var_dump(NULL);
    }else{
          echo print_r($var,true);
    }
}