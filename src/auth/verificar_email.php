<?php include '../include/config.inc.php'; 
include $arrConfig['dir_components'] . 'header.php';
?>

    <form action="trata_verificar_conta.auth.php" method="post">
        <label for="codigo">Código que recebeu no email</label>
        <input type="number" name="codigo" id="codigo">
        <input type="submit" value="Verificar">
    </form>
    
<?php include $arrConfig['dir_components'] . 'footer.php';?>

