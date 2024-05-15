<?php

class Car{

    private $brand = "Volvo";
    private $name;
    private $color = "Green";
    public $vehicleType = "car";

    public function __construct($name){
        $this->name = $name;
    }

    public function getCarInfo(){
        return "Brand" . $this->brand . "Color" . $this->color;
    }

    public function getBrand(){
        return this->brand;
    }
    public function setBrand(){
        $this->brand = $brand;
    }
    public function getColor(){
        return this->color;
    }
    public function setBrand(){
        $this->color = $color;
    }
}

$Car01 = new Car("CRETA");
$Car02 = new Car("BMW");

echo $Car01->vehicleType;

echo $Car01->getCarInfo();