<?php

function doIt(...$var){
    echo $var[0] ?? "hello";
}
doIt("one");