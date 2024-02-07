<?php

    echo "<h1>Update Film</h1>";
    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){
        UpdateFilm($_POST);

        //header("location: crud_filmen.php");
    }

    if(isset($_GET['filmid'])){  
        // Haal alle info van de betreffende filmid $_GET['filmid']
        $filmid = $_GET['filmid'];
        $row = GetFilm($filmid);
    
?>

<html>
    <body>
        <form method="post">
        <br>
        <input type="hidden" name="filmid" value="<?php echo $row['filmid'];?>"><br>
        Filmnaam:<input type="" name="filmnaam" value="<?php echo $row['filmnaam'];?>"><br> 
        genreid: <input type="text" name="genreid" value="<?= $row['genreid']?>"><br>
        Releasejaar: <input type="text" name="releasejaar" value="<?= $row['releasejaar']?>"><br>
        Regisseur: <input type="text" name="regisseur" value="<?= $row['regisseur']?>"><br>
        Landherkomst: <input type="text" name="landherkomst" value="<?= $row['landherkomst']?>"><br>
        Duur: <input type="text" name="duur" value="<?= $row['duur']?>"><br>
        <?php
            dropDownBrouwer('filmid', $row['filmid'] );
        ?>

        <!---filmid: <input type="text" name="filmid" value="<?= $row['filmid']?>">-->
        <br><br>
         <input type="submit" name="btn_wzg" value="Wijzigen"><br>
        </form>
        <br><br>
        <a href='crud_filmen.php'>Home</a>
    </body>
</html>

<?php
    } else {
        "Geen filmid opgegeven<br>";
    }
?>