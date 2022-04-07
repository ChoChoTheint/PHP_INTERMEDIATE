<?php

trait Member{
    var $name = "mg mg";
    public function doIt(){
        echo "I am  doing it <br/>";
    }
}

trait Hacker{
    var $age = 30;
    public function hackIt(){
        echo "we are hacking it <br/>";
    }
}

trait Third{
    var $bb = "Just Testing <br/>";
}

trait Mama{
    use Member,Hacker,Third;
}

class php_15_trait {
    use Mama;
}

$obj = new php_15_trait();
echo $obj->name ."<br/>";
$obj->hackIt();
$obj->doIt();
echo $obj->bb;