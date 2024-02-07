<?php

$conn=mysqli_connect('localhost','root','','cijfers');
if(!$conn){
    echo "Database Error!";
}

$query="select MAX(cijfer) as `maxcijfer` from `cijfers`";
$res= mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "Het hoogste cijfer is een: ".$data['maxcijfer'];

echo "<br>";

$conn=mysqli_connect('localhost','root','','cijfers');
if(!$conn){
    echo "Database Error!";
}

$query="select Min(cijfer) as `mincijfer` from `cijfers`";
$res= mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "Het laagste cijfer is een: ".$data['mincijfer'];

echo "<br>";

$conn=mysqli_connect('localhost','root','','cijfers');
if(!$conn){
    echo "Database Error!";
}

$query="select Avg(cijfer) as `avgcijfer` from `cijfers`";
$res= mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "Het gemcodedelde cijfer is een: ".$data['avgcijfer'];

?>