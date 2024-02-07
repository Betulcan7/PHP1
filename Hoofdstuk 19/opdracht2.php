<?php

class Product
{
    Public $name;
}

$game1 = new Product();
$game1->name = "Fifa 2023";

$game2 = new Product();
$game2->name = "Call of Duty";

$game3 = new Product();
$game3->name = "GTA V";

$game4 = new Product();
$game4->name = "Fifa 2022";

var_dump($game1);
echo "<br>";
var_dump($game2);
echo "<br>";
var_dump($game3);
echo "<br>";
var_dump($game4);

echo "<br><br>";
echo $game1->name. "<br>";
echo $game2->name. "<br>";
echo $game3->name. "<br>";
echo $game4->name. "<br>";

?>