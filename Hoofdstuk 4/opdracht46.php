<?php

$stijd = date("H:i;s");
$uur = date("H");
$temperatuur = 19;
$luchtvochtighecode = 95;

echo "$stijd<br>";

if ($uur > 17 || $temperatuur < 20 && $luchtvochtighecode < 85) {
    echo "De airco is uit.";
}
else {
    echo "De airco is aan.";
}

?>