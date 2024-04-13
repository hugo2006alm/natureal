<?php include '../include/config.inc.php';
include $arrConfig['dir_components'] . 'header.php';
?>

<form method="post" action="<?php echo $arrConfig['url_auth'] . 'trata_recuperar_senha.auth.php'; ?>">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="hidden" name="tipo" value="1">
    <input type="submit">
</form>

<?php include $arrConfig['dir_components'] . 'footer.php';?>