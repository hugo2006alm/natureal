<?php
    @session_start();
    include 'config.inc.php';$_SESSION['theme'] = $_POST['theme'];
    echo '<script>console.log('.$_SESSION['theme'].')</script>';
?>