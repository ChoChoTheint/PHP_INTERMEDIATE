<?php
class Test{

}
class Best{

}
class Index{
    public function showResult(int $num) : string{
        return 10.1;
    }
}

$ind = new Index();
// $ind->showResult(10);
echo $ind->showResult(11);
var_dump($ind);