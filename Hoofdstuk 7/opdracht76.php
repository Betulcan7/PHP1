<?php
    session_start();

    if(empty($_SESSION["cijfer"])) {
       $_SESSION["cijfer"] = array();
    }

    if(isset($_POST["cijfer"])) {
        array_push($_SESSION["cijfer"], $_POST["cijfer"]);
    }

    ?>

    <form action="#" method="post">
        Cijfer <input type="text" name="cijfer" min="0" max="10" value="0" required> <br>
        <input type="submit" value="Toevoegen">
    </form>
    <br><br>

    <?php
        $aantal = sizeof($_SESSION["cijfer"]);
        echo "Aantal ingevoerde cijfers: $aantal";

        $gemcodedelde = 0;

        if($aantal > 0) {
            for($i=0;$i<$aantal;$i++) {
                $gemcodedelde+= $_SESSION["cijfer"] [$i];

            }
            $gemcodedelde = $gemcodedelde / $aantal;

        }
        echo "</br>Gemcodedelde: ";
        echo round ($gemcodedelde,1);

        ?>


