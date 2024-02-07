<?php

class Product
{
    public $floor;
    public $room;
    public $volume;
    public $price;
}

$huis1 = new product();
$huis1->$floor = "2";
$huis1->$room = "4";
$huis1->$volume = "100";
$huis1->$price = "150000";

$huis2 = new product();
$huis2->$floor = "3";
$huis2->$room = "6";
$huis2->$volume = "150";
$huis2->$price = "225000";

$huis3 = new product();
$huis1->$floor = "2";
$huis1->$room = "3";
$huis1->$volume = "75";
$huis1->$price = "112500";


var_dump ($huis1);
var_dump ($huis2);
var_dump ($huis3);

?>

