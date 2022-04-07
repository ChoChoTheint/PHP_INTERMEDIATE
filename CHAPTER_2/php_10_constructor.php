<?php

class php_10_constructor{
    public function __construct($para1,$para2,$para3){
        echo "The result is " . ($para1+$para2+$para3);
    }
}

new php_10_constructor(20,30,50);