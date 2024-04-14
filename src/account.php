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
 $posts = my_query('SELECT posts.* FROM posts INNER JOIN user ON user.id = posts.iduser WHERE iduser = ' . $_SESSION['user_id']);   
 //var_dump($posts);
?>
<div class="ml-4 mr-4">
<div class="flex items-center justify-center flex-col bg-base-100 p-8 rounded-lg border border-primary">
    <!-- Imagem do perfil -->
    <div class="avatar mb-4">
        <div class="w-24 rounded-full">
            <img src="<?php echo $arrConfig['url_site'] .'/uploads/'. $user[0]['foto']?>" alt="<?php echo $user[0]['nome']; ?>" class="rounded-full mb-4 w-20 h-20">
        </div>
    </div>

    <!-- Informações do perfil -->
    <h2 class="text-xl mb-2 text-primary"><span class="font-bold">Nome:</span> <?php echo $user[0]['nome']; ?></h2>
    <h2 class="text-xl mb-2 text-primary"><span class="font-bold">Utilizador:</span> <?php echo $user[0]['username']; ?></h2>
</div>
</div>
<div class="w-screen flex flex-col justify-center items-center">
    <h1 class="text-primary text-4xl font-black mt-6 mb-6">Publicações</h1>
<?php
$flag = '';
echo '<div '.$flag.'>';
    foreach($posts as $post){
        $flag = 'class="stats stats-vertical border border-primary"';
        switch($post['niveltarefa']){
            case '1':
                $raridade = 'Comum';
                $cor = "bg-zinc-400";
                break;
            case '2':
                $raridade = 'Raro';
                $cor = "bg-emerald-400";
                break;
            case '3':
                $raridade = 'Lendário';
                $cor = "bg-yellow-400";
                break;
        }
        if (strpos($post['foto'],'objetivo1')){
            $objetivo = 'Objetivo #1';
        } else if (strpos($post['foto'],'objetivo2')){
            $objetivo = 'Objetivo #2';
        } else {
            $objetivo = 'Objetivo #3';
        }
        echo '
        <div class="stat border border-primary">
            <div class="stat-figure text-primary">
                <div class="avatar">
                    <div class="w-16 rounded-sm">
                        <img src="'.$arrConfig['url_site'].'/uploads/'. $post['foto'].'" />
                    </div>
                </div>
            </div>
            <div class="stat-title">'.$objetivo.' <div class="badge rounded-full '.$cor.' font-semibold">'.$raridade.'</div></div>
            <div class="stat-value text-primary">'.$post['titulo'].'</div>
            <div class="stat-desc">'.$post['legenda'] .'</div>
        </div>
    ';
    }
    if($flag == ''){
        echo '
        <div class="text-primary mt-6 mb-2 flex justify-center w-screen"><svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-notification"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M17 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg></div>
        <h3 class="text-primary text-xl mb-6 text-center">Sem publicações</h3>';
    }
    echo '</div>';
    ?>
</div>
<?php include 'components/footer.php';?>