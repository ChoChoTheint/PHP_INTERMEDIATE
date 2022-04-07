<?php


class php_8_getter_and_encapsulation{
    private $name = "Mg Mg";

    public function getter(){
        return $this->name;
    }

}

$obj = new php_8_getter_and_encapsulation();
echo $obj->getter();