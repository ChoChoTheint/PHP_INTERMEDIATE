<?php

class php_5_method_overloading{
    public function doIt($default){
        echo "I am 20";
    }

    // public function doIt(){
    //     echo "I am 30";
    // }
}

$obj = new php_5_method_overloading();
$obj->doIt(29);

//error
?>