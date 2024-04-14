<?php
    include 'include/config.inc.php';
    session_destroy();
    //echo 'SESSAO TERMINADA';
    header('Location: auth/login.php');