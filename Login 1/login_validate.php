<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Databaseverbinding maken
    $dsn = "mysql:host=localhost;dbname=login";
    $username_db = "test";
    $password_db = "test";

    try {
        $db = new PDO($dsn, $username_db, $password_db);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Gebruiker controleren in de database
        $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            echo "Inloggen succesvol. Welkom, " . $user['username'] . "!<br>";
            echo "Gebruikersnaam: " . $user['username'] . "<br>";
            echo "Wachtwoord: " . $user['password'] . "<br>";
            echo "<a href='logout.php'>Uitloggen</a>";
        } else {
            echo "Ongeldige inloggegevens. Probeer opnieuw.";
        }
    } catch(PDOException $e) {
        echo "Fout bij inloggen: " . $e->getMessage();
    }
}
?>
