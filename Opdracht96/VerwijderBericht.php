<?php

include "connectpdo.php";

if(isset($_GET['code']))
{
    $code = $_GET['code'];
    echo "$code";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM berichten WHERE code='$code'";

        $conn->exec($sql);
        echo "Record deleted successfully";
        header('Location: index.php');
    }
    catch(PDOException $e)
    {
        //echo $sql . "</br>" . $e->getMessage();
    }
}
$conn = null;

?>