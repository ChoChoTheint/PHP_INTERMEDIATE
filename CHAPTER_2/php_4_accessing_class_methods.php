<?php

class php_4_accessing_class_methods{
    var $name = 'Mg Mg';
    public function fonky($name){
        echo "I am Fonky Method! " . $name;
    }
}

$obj = new php_4_accessing_class_methods;
$obj->fonky("Brighter Myanmar");
echo "<br/>" .$obj->name;

?>