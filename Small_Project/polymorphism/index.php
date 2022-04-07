<?php
require_once "vendor/autoload.php";

use app\Circle;
use app\Square;
use app\gem\Shape;

class Index{
    public function __construct(){
        $square = new Square(123, 23);
        // echo "Square Area is " . $square->getArea() . "<hr/>";
        $this->getPrice($square);

        $circle = new Circle(123);
        // echo "Circle Area is " . $circle->getArea() . "<hr/>";
        $this->getPrice($circle);
    }

    public function getPrice(Shape $shape){
        $area = $shape->getArea();
        echo "Your total price is " . ($area * 15) . "<hr/>";
    }
}

new Index();