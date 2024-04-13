<?php include '../include/config.inc.php';
include $arrConfig['dir_components'] . 'header.php';
?>

<form action="<?php echo $arrConfig['url_auth'] . 'trata_recuperar_senha.auth.php'; ?>" method="post">    
    <input type="password" name="password" id="password" placeholder="password">    
    <input type="password" name="password2" id="password2" placeholder="confirme sua password">
    <input type="hidden" name="tipo" id="tipo" value="2">
    <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
    <input type="submit" value="Verificar">
</form>

<?php include $arrConfig['dir_components'] . 'footer.php';?>