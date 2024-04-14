<?php
include '../include/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php 
if (isset($_GET['erro'])){
    if ($_GET['erro']==1){
        echo '<div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Erro! Utilizador não encontrado.</span>
      </div>';
    } else if($_GET['erro']==2){
        echo '<div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Erro! Credenciais incorretas.</span>
      </div>';  
    } 
   
}
?>
    <form method="post" action="trata_login.auth.php">
        
        <input type="text" name="login" id="login" placeholder="Email ou Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit">
    </form>
    <a href="registo.php">Registar</a>
    
</body>
</html>