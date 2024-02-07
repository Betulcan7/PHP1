<?php

function wachtwoord($len, $set = "") {
    $gen = "";

    for($i=0;$i<$len;$i++) {
        $set = str_shuffle($set);
        $gen .= $set[0];
    }

    return $gen;
}
echo "Willekeurige wachtwoord van 10 tekens:";
$passcode=wachtwoord(10, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYZ0123456789');
echo $passcode;

?>