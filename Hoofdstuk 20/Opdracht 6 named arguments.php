<?php

class Product
{
    Public $name;
    public $price;
    public $currency;

    public function __construct($price, $name = "Een fruit", $currency = "&euro")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }
   
    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}

$fruit1 = new Product(price: 2, currency: "$");


//$fruit2 = new Product( name: "banaan", price: 3);
//$fruit2->name = "banaan";
//$fruit2->price = 3;

//echo $fruit1->formatPrice()."<br>";
echo $fruit1->name."<br>";
echo $fruit1->currency;
echo $fruit1->price;

var_dump($fruit1);
//var_dump($fruit2);

?>