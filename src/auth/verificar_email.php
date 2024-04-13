<?php include '../include/config.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Email</title>
</head>
<body>
    
    
    <form action="trata_verificar_conta.auth.php" method="post">
        <label for="codigo">Código que recebeu no email</label>
        <input type="number" name="codigo" id="codigo">
        <input type="submit" value="Verificar">
    </form>
    
    
</body>
</html>