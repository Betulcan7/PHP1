<?php

class Product
{
    Public $name;
    public $price;

    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}

$game1 = new Product();
$game1->name = "Fifa 2023";
$game1->price = 50;

$game2 = new Product();
$game2->name = "Call of Duty";
$game2->price = 50;

$game3 = new Product();
$game3->name = "GTA V";
$game3->price = 60;

$game4 = new Product();
$game4->name = "Fifa 2022";
$game4->price = 30;

echo $game1->formatPrice()."<br>";
echo $game1->name."<br>";
echo $game1->price;

var_dump($game1);

?>