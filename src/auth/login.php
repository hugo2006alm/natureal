<?php
include '../include/config.inc.php';
include $arrConfig['dir_components'] . 'header.php';
?>

<form method="post" action="trata_login.auth.php">
    
    <input type="text" name="login" id="login" placeholder="Email or Username" required>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <input type="submit">
</form>

<?php include $arrConfig['dir_components'] . 'footer.php';?>