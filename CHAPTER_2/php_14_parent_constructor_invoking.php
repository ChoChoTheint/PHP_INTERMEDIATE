<?php

class Member{
    var $name = "Mg Mg";
    var $age = 30;
    var $subject = "HTML";
    public function __construct(){
        echo "Papa is start working . <br/>";
    }
}

class php_14_parent_constructor_invoking extends Member{
    
    public function __construct(){
        parent::__construct();
        echo "Child is start working . <br/>";
    }
}



$obj = new php_14_parent_constructor_invoking();
echo $obj->name . "<br/>";
