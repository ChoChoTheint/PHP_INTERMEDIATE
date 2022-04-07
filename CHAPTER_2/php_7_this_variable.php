<?php

class php_7_this_variable{
    public $name ="Mg Mg";

    public function changeName(){
        $this->name = "Aung Aung";
    }
}

$obj = new php_7_this_variable();
$obj->changeName();
echo $obj->name . "<br/>";

$bb = new php_7_this_variable();
echo $bb->name;