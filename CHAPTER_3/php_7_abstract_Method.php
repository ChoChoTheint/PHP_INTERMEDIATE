<?php

abstract class papa{
    const DB_HOST = "localhost";
    public $name = "mg mg";

    public abstract function doIt();
}
class Index extends papa{
    public function doIt(){
        echo "I am doing it now<hr/>";
    }
}
// echo Index::DB_HOST;
$ind = new Index();
$ind->doIt();