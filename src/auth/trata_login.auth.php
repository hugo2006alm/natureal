<?php include '../include/config.inc.php'; 

$user_or_email = $_POST['login']; //Recebe email ou username
$pass = $_POST['password'];

$sql = 'SELECT password FROM user WHERE username = "'.$_POST['login'].'" OR email = "'.$_POST['login'] .'"'; //Vai buscar a pwd
$res = my_query($sql);

if(count($res) == 0) { //Significa que o user nao existe
    echo json_encode(['status' => 'error', 'msg' => 'Utilizador não encontrado']);
    exit;
} else if(password_verify($pass, $res[0]['password'])) {
    $_SESSION['user_name'] = $email != '' ? $res[0]['email'] : $res[0]['username'];  
    $_SESSION['user_id'] = $res[0]['id'];                
    $_SESSION['user_foto'] = $res[0]['foto'];
    echo json_encode(['status' => 'success', 'msg' => 'Login efetuado com sucesso']);
    
} else {
    echo json_encode(['status' => 'error', 'msg' => 'Credenciais incorretas']); //significa que a pwd esta mal
    exit;
} 

header('Location: ..');


