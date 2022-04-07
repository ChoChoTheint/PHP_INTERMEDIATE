<?php
class Test{

}
class Best{

}
class Index{
    public function showResult(Test $num){
        var_dump($num);
    }
}
$t = new Test();
$b = new Best();
$ind = new Index();
$ind->showResult($t);