<?php
include '../include/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="trata_login.auth.php">
        
        <input type="text" name="login" id="login" placeholder="Email ou Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit">
    </form>
    <a href="registo.php">Registar</a>
    
</body>
</html>