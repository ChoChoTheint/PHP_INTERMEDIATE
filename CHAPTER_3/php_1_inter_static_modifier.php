<?php

class Index{
    private static $count = 0;

    public function getCount(){
        self::$count++;
        echo self::$count . "<br/>";
    }
}

$obj = new Index();
$obj->getCount();
$obj->getCount();
echo "<hr/>";
$aa = new Index();
$aa->getCount();
$aa->getCount();