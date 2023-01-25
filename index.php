<?php

class product{

    private $name;
    private $brand;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name){

        $this->name = $name;


    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setbrand($brand){

        $this->brand = $brand;
    }

    public function gethtml(){
        return "Nome prodotto:" . $this->name . "<br>" . "Marca" . $this->brand;
    }
}

echo "ok";