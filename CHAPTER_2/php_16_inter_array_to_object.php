<?php

$ary = ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>4];

// foreach($ary as $key=>$val){
//     echo $key . "=>" .$val ."<br/>";
// }

$obj = (object) $ary;
var_dump($obj);
echo "<hr/>" . $obj->One;