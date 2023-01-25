<?php

class product{

    private $name;
    private $brand;

    public function __construct($name, $brand)
    {
        $this -> name = $name;
        $this -> brand = $brand;
    }

    private function getName()
    {
        return $this->name;
    }

    public function setName($name){

        $this->name = $name;

        $this->getName();
    }

    private function getBrand()
    {
        return $this->brand;
    }

    public function setbrand($brand){

        $this->brand = $brand;

        $this->getBrand();
    }

    public function gethtml(){
        return "Nome prodotto:" . $this->name . "<br>" . "Marca" . $this->brand;
    }
}

