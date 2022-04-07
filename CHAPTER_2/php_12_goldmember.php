<?php

class Member{
    var $name = "Mg Mg";
    var $age = 30;
    var $subject = "HTML";
    public function friendCount(){
        echo "I am friend Count method!";
    }
}

class php_12_goldmember extends Member{

}

class MyTest extends Member{

}

$obj = new php_12_goldmember();
echo $obj->name . "<br/>";
$obj->friendCount();