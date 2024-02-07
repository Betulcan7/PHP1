<?php

try{
  $db = new PDO("mysql:host=localhost;dbname=php", "root", "");
  if(isset($_POST['verzenden'])) {
    $browser = filter_input(INPUT_POST, "browser", FILTER_SANITIZE_STRING);
    $query = $db->prepare("INSERT INTO opdracht10.3(browser) VALUES(:browser)");

    $query->bindParam("browser", $browser);
  }

} catch(PDOException $e) {
  die("ERROR!: " . $e->getMessage());
}

?>

<form method="post" action="opdracht2.php">
  <input type="submit" name="verzenden" value="opslaan">
</form>