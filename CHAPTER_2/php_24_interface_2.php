<?php

interface SheInter(){
    public function setWeapon($weapon);
}

class Index implements SheInter(){
    private $weapon;

    public function setWeapon($weapon){
        $this->weapon = $weapon;
    }

    public function killnow(){
        echo "killing enemy with " . $this->weapon;
    }
}
$obj = new Index();
$obj->setWeapon("knife");
$obj->killnow();