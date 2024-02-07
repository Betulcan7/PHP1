<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
</head>
<body>
    <h2>Inloggen</h2>
    <form method="POST" action="login_validate.php">
        <label>Gebruikersnaam:</label>
        <input type="text" name="username" required><br><br>
        
        <label>Wachtwoord:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Inloggen">
    </form>
</body>
</html>
