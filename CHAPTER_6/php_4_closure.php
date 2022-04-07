<?php
$num = 20;

$var = function() use($num){
    echo "i am closure {$num}";
};
$var();

//eg 2
echo "<hr/>";
function doIt($var){
    $var();
}
doIt(function() use($num){
    echo $num;
});