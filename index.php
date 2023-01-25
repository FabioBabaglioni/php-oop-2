<?php

class product{

    public $name;
    public $brand;

    public function __construct($name, $brand)
    {
        $this -> name = $name;
        $this -> brand = $brand;
    }

    public function getHtml(){
        return

            "<div>" .

            "<h2> prodotto </h2>" .

            "Nome prodotto: " . $this->name . "<br>" . "Marca: " . $this->brand

            . "</div>";
    }
}

class category extends product{
    public $title;

    public function __construct($name, $brand, $title)
     
     {
        parent ::  __construct($name, $brand);
        $this -> title = $title;
     }

    public function getHtml()
    {
        return parent :: getHtml() . "categoria: " . $this-> title;
    }

}



// $giocattolo =  new product ("Crocchette", "Wiskas",);
$giocattoloCaratteristiche = new category ("Crocchette", "Wiskas","mangime");

echo $giocattoloCaratteristiche->getHtml();