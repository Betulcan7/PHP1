<?php

class Product
{
    public $name;
    public $price;
    public $currency;

    public function __construct($price = 2, $name = "Product", $currency = "&euro")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
        
    }
   
    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }

    public function getProduct()
    {
        return "Het product ".$this->name." kost ".$this->currency." ".$this->price;
    }
}

$product1 = new Product(name: "Techo beats", currency: "&euro", price: 2);
echo $product1->getProduct();

echo "<br>";

$product2 = new Product(name: "Techo beats", currency: "&euro", price: 5);
echo $product2->getProduct();

echo "<br>";

$product3 = new Product(name: "TB", currency: "&euro", price: 7);
echo $product3->getProduct();





//$muziek2 = new Product( name: "banaan", price: 3);
//$muziek2->name = "banaan";
//$muziek2->price = 3;

//echo $muziek1->formatPrice()."<br>";
//echo $muziek1->name."<br>";
//echo $muziek1->currency;
//echo $muziek1->price;



?>