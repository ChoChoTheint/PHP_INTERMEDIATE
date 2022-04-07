<?php

class php_11_destructor{
    var $t = 0;
    public function __construct(){
        echo "I am constructor and start working .<br/>";
    }

    public function loopIt(){
        for($i = 0; $i < 10000; $i++){
            $this->t += $i;
        }
        echo "T value is " . $this->t . "<br/>";
    }

    public function __destruct(){
        echo "I am destuctor, class work is done!";
    }
}

$obj = new php_11_destructor();
$obj->loopIt();