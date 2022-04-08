<?php

class Home extends Controller {
    public function __construct(){
        echo "I am constructor of " . __CLASS__ . "class<br/>";
    }
    public function index(){
        $this->view("home/index");
    }
}