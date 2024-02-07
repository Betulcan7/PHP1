<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login_form.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welkom</title>
</head>
<body>
    <h2>Welkom, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Inloggegevens:</p>
    <p>Gebruikersnaam: <?php echo $_SESSION['username']; ?></p>
    <p>Wachtwoord: <?php echo $_SESSION['password']; ?></p>
    <a href="logout.php">Uitloggen</a>
</body>
</html>
