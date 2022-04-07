<?php

class Index{

    public function __call($method,$values){
        echo "You are calling none exits static method {$method} with values of <hr/>";
        echo "<pre>" . print_r($values) . "</pre>"; 
    }

    public static function __callStatic($name,$arguments){
        echo "You are calling none exits static method {$name} with parameters of <hr/>";
        echo "<pre>" . print_r($arguments,true) . "</pre>";
    }
}

$obj = new Index();
$obj->hey("mg mg","aung aung");
// echo "<hr/>";

Index::hey("Mg Mg","Aung Aung");