<?php


class Index{
    public function __isset($name){
        echo "You are trying check the set or not of  $name  property";
    }

    public function __unset($name){
        echo "You are trying check the set or not of  $name  property";
    }
}

$obj = new Index();
// var_dump(isset($obj->name));
// echo isset($obj->name) ? "true" : "false";
isset($obj->hello);
echo "<br/>";
unset($obj->name);