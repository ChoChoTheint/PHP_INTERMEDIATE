<?php

function doIt(...$var){
    // $var [["one","two","three"],"what's up",[1,2,3,4,5]]
    echo $var[2][4];
}
doIt(["one","two","three"],"what's up",[1,2,3,4,5]);