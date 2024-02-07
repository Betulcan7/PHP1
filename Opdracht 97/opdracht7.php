<?php


try {
    // host, databasenaam, gebruikersnaam, wachtwoord
    $db = new PDO("mysql:host=localhost;dbname=poll","root","");


    // query selecteer alle fietsen
    $query = $db->prepare("SELECT DISTINCT * FROM pol, optie");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);


    foreach ($result as $data) {
        echo $data['vraag'];
        
    }

    foreach ($result as $data) {
    echo "<br><br>";
    echo "<form action="a.php">";
    echo "<input type="radio" $data['optie']>" ;
    echo "</form>";
    }


}catch(PDOException $e) {
    die("ERROR!: " . $e->message());
}

?>
