<?php 
include 'components/header.php';
 

 if($_SERVER['REQUEST_METHOD'] == 'GET'){ //Para abrir o perfil de outras pessoas
    if(isset($_GET['user'])){
        $id_user = $_GET['user'];

    }
 }else{
     $id_user = $_SESSION['user_id']; //Abre o nosso
 }


//echo $_SESSION['user_id'];
 $user = my_query('SELECT * FROM user WHERE id = ' . $_SESSION['user_id']);

// var_dump($user);
 $posts = my_query('SELECT posts.* FROM posts INNER JOIN user ON user.id = posts.iduser');
// var_dump($posts);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil user</title>
</head>
<body>
<h2>Nome: <?php echo $user[0]['nome']; ?></h2>
    <h2>Utilizador: <?php echo $user[0]['username']; ?></h2>
    
    <h2>Email: <?php echo $user[0]['email']; ?></h2>
    <h2>FOTO:</h2>
    <img src="<?php echo $arrConfig['url_site'] .'/uploads/'. $user[0]['foto']?>" alt="" style="max-width:100px">
    
</body>
<?php include 'components/footer.php';?>