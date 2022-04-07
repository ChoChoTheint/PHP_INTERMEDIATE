<?php
$ary = ["1"=>"one", "2"=>"two", "3"=>"three"];

function fonky($value, $key){
    echo "key is " . $key . " values is " . $value . "<hr/>";
}

array_walk($ary, "fonky");