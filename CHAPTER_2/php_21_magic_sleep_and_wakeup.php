<?php


class Index{
    public function __sleep(){
        echo "you are trying to serialize my object <hr/>";
        return [];
    }

    public function __wakeup(){
        echo "you are trying to deserialize object";
    }
}

$obj = new Index();
$aa = serialize($obj);
$aa = unserialize($aa);