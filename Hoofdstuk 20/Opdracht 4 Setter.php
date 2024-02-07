<?php

class Product
{
    Public $name;
    public $price;

    public function setName($name) 
    {
       $this->name = ucfirst($name);
    }
   
    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}

$fruit1 = new Product();
$fruit1->setName("aardbei");
$fruit1->price = 4;

$fruit2 = new Product();
echo strtoupper("banaan");
$fruit2->price = 3;


echo $fruit1->formatPrice()."<br>";
echo $fruit1->name."<br>";
echo $fruit1->price;

var_dump($fruit1);


echo $fruit1->formatPrice()."<br>";
echo $fruit1->name."<br>";
echo $fruit1->price;

var_dump($fruit1);

?>