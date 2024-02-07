<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=cijfers","root","");

    
    $query = $db->prepare("SELECT * FROM cijfers");
    
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    


    echo '<table border="1" wcodeth="200">';
    foreach ($result as $data) {
        
        echo "<tr><td>";
        echo $data['leerling'] . " " . $data['cijfer'];
        echo "</td></tr>";
        echo "</a>";
        echo "<br>";
        
    }
    echo "</table>";
   
    
}catch(PDOException $e) {
    die("ERROR!: " . $e->message());
}


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