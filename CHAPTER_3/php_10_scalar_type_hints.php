<?php

class Index{
    public function showResult(int $num){
        var_dump($num);
    }
}

$ind = new Index();
$ind->showResult("10");