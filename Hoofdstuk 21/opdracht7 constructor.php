<?php

class Product
{

    public function __construct(public $price, public $name = "Muziek", public $currency = "&euro")
    {
        $this->name = ucfirst($name);
        
    }
   
    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}

$muziek1 = new Product(currency: "$", price: 2);


//$muziek2 = new Product( name: "banaan", price: 3);
//$muziek2->name = "banaan";
//$muziek2->price = 3;

//echo $muziek1->formatPrice()."<br>";
echo $muziek1->name."<br>";
echo $muziek1->currency;
echo $muziek1->price;

var_dump($muziek1);
//var_dump($muziek2);

?>