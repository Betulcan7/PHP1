<?php
function ConnectDb(){
    echo "connect<br>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="bieren"; 

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

return $conn;
}

function GetData($table){
    // Connect database
    $conn = ConnectDb();

    // Select data uit de opgegeven table
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
 }


function CrudBieren(){

    //haal alle bier record uit de tabel
    $result = GetData("bier");
//var_dump($result);
    //print tabel 
    PrintCrudBier($result);
}

function PrintCrudBier($result){
//zet de hele tabel in en variabele en print hem 1 keer
$table = "<table border = 1px>";

//Print header table

//haal de kolommen uit de eerste [0] van het array
$headers = array_keys($result[0]);
$table .= "<tr>";
foreach($headers as $header){
    $table .="<th bgcolor=gray>" .$header . "</th>";
} 
$table .= "</tr>";


//print elke rij
foreach($result as $row) {

    $table .="<tr>";
    //print elke kolom
    foreach ($row as $cell){
        $table .= "<td>" .$cell . "</td>";
    }

    $table .= "</tr>";
}
$table.="</table>";

echo $table;
}
?>