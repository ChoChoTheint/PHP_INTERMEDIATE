<?php

class Driver{
    public $name, $age, $family, $hourlyRate, $materialStatus;

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setAge(string $age){
        $this->age = $age;
    }

    public function getAge() : int{
        return $this->age;
    }

    public function setFamily(array $family){
        $this->family = $family;
    }

    public function getFamily() : array{
        return $this->family;
    }

    public function setHourlyRate(float $hourlyRate){
        $this->hourlyRate = $hourlyRate;
    }

    public function getHourlyRate() : float{
        return $this->hourlyRate;
    }

    public function setMaterialStatus(bool $materialStatus){
        $this->materialStatus = $materialStatus;
    }

    public function getMaterialStatus() : bool{
        return $this->materialStatus;
    }
    
}

class Car{
    public $brand, $modal, $price, $spares, $available;

    public function __construct(string $brand, int $modal, float $price, array $spares, bool $available){
        $this->brand = $brand;
        $this->modal = $modal;
        $this->price = $price;
        $this->spares = $spares;
        $this->availabel = $available;
    }

    public function getBrand() : string{
        return $this->brand;
    }

    public function getModal() : int{
        return $this->modal;
    }

    public function getPrice() : float{
        return $this->price;
    }

    public function getSpares() : array{
        return $this->spares;
    }

    public function getAvailabel() : bool{
        return $this->availabel;
    }
}

class Rent{
    public $car, $driver;

    public function __construct(Car $car, Driver $driver){
        $this->car = $car;
        $this->driver = $driver;
    }

    public function getCar() : Car{
        return $this->car;
    }

    public function getDriver() : Driver{
        return $this->driver;
    }
}



$dMgMg = new Driver();
$dMgMg->setName("Mg Mg");
$dMgMg->setAge(24);
$dMgMg->setFamily(['father'=>'U Hla','mother'=>'Daw su']);
$dMgMg->setHourlyRate(9.0);
$dMgMg->setMaterialStatus(false);

$dAungAung = new Driver();
$dAungAung->setName("Aung Aung");
$dAungAung->setAge(26);
$dAungAung->setFamily(['father'=>'U Aung','mother'=>'Daw Aye']);
$dAungAung->setHourlyRate(9.9);
$dAungAung->setMaterialStatus(true);

$toyota = new Car("Alaphert", 2017, 30.5, ["tissues", "water" ,"cupon"], TRUE);
$maredee = new Car("marecdee", 2019, 45.5, ["tissues", "water"], FALSE);

$rent1 = new Rent($toyota, $dMgMg);
$rent2 = new Rent($maredee, $dAungAung);

$list = [$rent1, $rent2];

$serialize = serialize($list);
echo $serialize;
echo "<hr/>";
$ary = unserialize($serialize);
echo "<pre>" . print_r($ary, true) . "</pre>";
echo "<hr/>";
echo $list[1]->getDriver()->name;
