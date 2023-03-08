<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","");
    if(isset($_POST['inloggen'])) {
        $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $query = $db->prepare("SELECT * FROM gebruikers WHERE username = :user");

        $query->bindParam("user", $username);
        $query->execute();

        if($query->rowCount() == 1) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $result["password"])) {
                echo "Juiste gegevens!";
            } else {
                echo "Onjuiste gegevens!";
            }
        } else {
            echo "Onjuiste gegevens!";
        }
        echo "<br>";
    }
} catch(PDOException $e) {
    die("ERROR!: " . $e->getMessage());
}

?>

<form method="post" action="">
    <label>Username</label>
    <input type="text" name="username"><br>

    <label>Password</label>
    <input type="password" name="password"><br>

    <input type="submit" name="inloggen" value="Inloggen">
</form>