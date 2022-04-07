<?php


class Index{
    public $name = "mg mg";

    public function __toString(){
        return "This is toString";
    }

    public function __invoke(){
        echo "this is invoke";
    }

    public function __clone(){
        echo "this is clone";
    }
}

$obj = new Index();
echo $obj . "<br/>";
echo $obj() . "<br/>";
$aa = clone $obj;