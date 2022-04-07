<?php

class php_9_setter_getter{
    private $name = "Mg Mg";

    public function setter($data){
        $this->name = $data;
    }

    public function getter(){
        return $this->name;
    }
}

$obj = new php_9_setter_getter();
$obj->setter("Aung Aung");
echo $obj->getter();