<?php

class Index{
    public static $count = 0;

    public static function showMe(){
        echo self::doit();
    }

    public  function doit(){
        echo "har har";
    }
}
$ind = new Index();
echo $ind->showMe();