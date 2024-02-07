<?php
// auteur: Betul Can
// functie: verwijder een film op basis van de filmid
include 'functions.php';

// Haal film uit de database
if(isset($_GET['filmid'])){
    DeleteFilm($_GET['filmid']);

    echo '<script>alert("Filmid: ' . $_GET['filmid'] . ' is verwijderd")</script>';
    echo "<script> location.replace('crud_filmen.php'); </script>";
}
?>

