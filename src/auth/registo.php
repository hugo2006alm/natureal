<?php include '../include/config.inc.php';
include $arrConfig['dir_components'] . 'header.php';
?>

<form method="post" action="<?php echo $arrConfig['url_site'] . '/src/auth/trata_registo.auth.php'; ?>">
    <input type="text" name="nome" id="nome" placeholder="Nome">
    <input type="text" name="user" id="user" placeholder="User">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="password" name="pass" id="password" placeholder="Password">
    <input type="password" name="confirmar_pass" id="confirmar_pass" placeholder="Confirmar Password">
    <input type="submit">
</form>

<?php include $arrConfig['dir_components'] . 'footer.php';?>