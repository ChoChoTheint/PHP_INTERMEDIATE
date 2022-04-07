<?php

interface RuleGame(){
    public function createGameScene();
    public function createVegetables();
    public function createHousing();
    public function createActor();
}

class Index implements RuleGame(){
    public function createGameScene(){
        echo "I am create Game Scene";
    };
    public function createVegetables(){
        echo "I am create vegetable";
    };
    public function createHousing(){
        echo "I am create housing";
    };
    public function createActor(){
        echo "I am create actor";
    };

}
$obj = new Index();
$obj->createGameScene();
$obj->createVegetables();
$obj->createHousing();
$obj->createActor();