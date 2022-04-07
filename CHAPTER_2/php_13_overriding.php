<?php

class Member{
    var $name = "Mg Mg";
    var $age = 30;
    var $subject = "HTML";
    public function friendCount(){
        echo "I am friend Count method!";
    }
}

class php_13_overriding extends Member{
    
    public function friendCount(){
        $this->name = "Aung Aung";
        echo "This is my class, I will be output what i want";
    }
}



$obj = new php_13_overriding();
echo $obj->name . "<br/>";
$obj->friendCount();