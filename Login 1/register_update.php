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
        
        // Gebruiker toevoegen aan de database
        $stmt = $db->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
        $stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);
        
        echo "Registratie succesvol. Ga naar <a href='login_form.php'>inloggen</a>.";
    } catch(PDOException $e) {
        echo "Fout bij registratie: " . $e->getMessage();
    }
}
?>
