<?php

class Index{
    public function showResult($num){
        if(is_int($num)){
            echo "Go to result";
        }else{
            die("we need number type");
        }
    }
}
$ind = new Index();
$ind->showResult(12);

// is_int()
// is_string()
// is_bool()
// is_float()
// is_null()