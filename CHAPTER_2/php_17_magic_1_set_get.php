<?php

class Index{

    public function __get($var){
        echo "You r trying to get none exits property {$var} <hr/>";
    }

    public function __set($var,$value){
        echo "You r trying to get none exits property {$var} with value of {$value} <hr/>";
    }
}

$obj = new Index();
$obj->name = "Mg Mg";