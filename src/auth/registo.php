<?php include '../include/config.inc.php';
echo isset($_SESSION['erro']) ? $_SESSION['erro'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <form method="post" action="trata_registo.auth.php">
        <input required type="text" name="nome" id="nome" placeholder="Nome">
        <input required type="text" name="user" id="user" placeholder="Username">
        <input required type="text" name="email" id="email" placeholder="Email">
        <input required type="password" name="pass" id="password" placeholder="Password">
        <input required type="password" name="confirmar_pass" id="confirmar_pass" placeholder="Confirmar Password">
        <input type="submit">
    </form>
    
</body>
</html>