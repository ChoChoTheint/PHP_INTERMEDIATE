<?php

class One{
    public function className(){
        return __CLASS__;
    }
    public function getClassName(){
        echo static::className();
    }
}

class Two extends One{
    public function className(){
        return __CLASS__;
    } 
}

$one = new One();
$one->getClassName();
echo "<hr/>";
$two = new Two();
$two->getClassName();