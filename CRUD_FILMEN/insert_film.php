<?php
    echo "<h1>Insert Film</h1>";

    require_once('functions.php');
	 
	 

    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){
		 
        InsertFilm($_POST);
        echo '<script>alert("Filmnaam: ' . $_POST['filmnaam'] . ' is toegevoegd")</script>';
        //echo "<script> location.replace('crud_filmen.php'); </script>";
    }
?>

<html>
    <body>
        <form method="post">
        <br>
        Filmaam:<input type="" name="filmnaam"><br> 
        Genreid: <input type="text" name="genreis"><br>
        Releasejaar: <input type="text" name="releasejaar"><br>
        Regisseur: <input type="text" name="regisseur"><br>
        Landherkomst: <input type="text" name="landherkomst"><br>
        Duur: <input type="text" name="duur"><br>
        <?php
            dropDownBrouwer('filmid', -1 );
        ?>
        <br>
        <input type="submit" name="btn_ins" value="Insert"><br>
        </form>
        <br><br>
        <a href='crud_filmen.php'>Home</a>
    </body>
</html>
