<?php include '../include/config.inc.php'; 

$user_or_email = $_POST['user_or_email'];
$pass = $_POST['pass'];

if($user_or_email == '' || $pass == ''){
    echo json_encode(['status' => 'error', 'msg' => 'Preencha todos os campos']);
    exit;
}

if(filter_var($_POST['user_or_mail'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['user_or_mail'];    
    $sql = "SELECT * FROM users WHERE email = '$email'";
} else {
    $user = $_POST['user_or_mail'];
    $sql = "SELECT * FROM users WHERE username = '$user'";
}

$res = my_query($sql);

if(count($res) == 0) {
    echo json_encode(['status' => 'error', 'msg' => 'Utilizador não encontrado']);
    exit;
} else if(password_verify($pass, $res[0]['password'])) {
    if($res[0]['ativo'] == 0) {
        echo json_encode(['status' => 'error', 'msg' => 'Conta não verificada']);
        exit;
    }
    $_SESSION['user_name'] = $email != '' ? $res[0]['email'] : $res[0]['username'];  
    $_SESSION['user_id'] = $res[0]['id'];                
    $_SESSION['user_pfp'] = $res[0]['pfp'];
    echo json_encode(['status' => 'success', 'msg' => 'Login efetuado com sucesso']);
    exit;
} else {
    echo json_encode(['status' => 'error', 'msg' => 'Credenciais incorretas']);
    exit;
} 


