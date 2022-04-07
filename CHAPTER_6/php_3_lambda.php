<?php

function doIt($var1,$var2,$var){
    $total = $var1+$var2;
    $var($total);
}
doIt(3,4,function($var){
    echo "i am lambdo total is {$var}";
});