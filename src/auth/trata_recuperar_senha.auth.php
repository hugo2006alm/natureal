<?php

include '../include/config.inc.php';

if($_POST['tipo'] == "1") {
    // primeira parte do recuperar senha, isto é, aqui vou ter o email da conta que deseja recuperar
    $email = $_POST['email'];
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $res = my_query($sql);
    if($res == 0) {
        echo "Email não encontrado";
        exit;
    } else {
        // gerar token 
        $token = md5(uniqid(rand(), true));
        $_SESSION['token_password'] = $token;
        $_SESSION['email_user_recuperar_pass'] = $email;
        $url = $arrConfig['url_auth'] . "recuperar_senha.php?token=$token";
        recuperar_senha($email, $res[0]['username'], $url);
        echo 'Email enviado com sucesso';
        exit;
    }
    
    

} else {
    // segunda parte do recuperar senha, isto é, aqui vou ter o código que foi enviado para o email
    if(isset($_POST['token']) && $_POST['token'] == $_SESSION['token_password']){        
        $password = $_POST['password'];
        $confirmar_password = $_POST['password2'];
        $email = $_SESSION['email_user_recuperar_pass'];
        if($password != $confirmar_password) {
            echo "As passwords não coincidem";
            exit;
        }
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `user` SET `password` = '$pass' WHERE email = '$email'";
             
        my_query($sql);
        header('Location: ' . $arrConfig['url_auth'] . 'login.php');

    } else {
        
        echo "Token inválido";
    }


}