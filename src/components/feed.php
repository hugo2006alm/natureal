<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<div class="w-screen flex flex-col justify-center items-center [&>*]:mb-3 last:mb-0">

<?php 
$query = my_query("SELECT * FROM posts ORDER BY id DESC LIMIT 20");
foreach($query as $k => $v) {
    $query2 = my_query("SELECT * FROM tarefas WHERE id = ".$v['idtarefa']);
    if ($query2[0]['nivel']== 1) {
        $raridade = "Comum";
    } else if ($query2[0]['nivel']== 2) {
        $raridade = "Raro";
    } else if ($query2[0]['nivel']== 3) {
        $raridade = "Épico";
    } 

    $query3 = my_query("SELECT * FROM user WHERE id = ".$v['iduser']);
   $likes= my_query("SELECT COUNT(*) AS total FROM likes WHERE idpost = ".$v['id']." AND tipo = 1");
   $deslikes= my_query("SELECT COUNT(*) AS total FROM likes WHERE idpost = ".$v['id']." AND tipo = 0");
    $img =$arrConfig['url_site'].'/uploads/'.$v['foto'];
    echo ' <div class="card w-80 bg-base-100 shadow-xl">
    <figure><img src="'.$img.'" alt="" /></figure>
    <div class="card-body">
        <h2 class="card-title">
        '.$v['titulo'].'
            <div class="badge badge-secondary">'.$raridade.'</div>
        </h2>
        <p>'.$v['legenda'].'</p>
        <div class="card-actions justify-end">
        <button class="btn btn-primary" onclick="likee('.$_SESSION['user_id'].', '.$v['id'].')">Like</button>
        <p>'.$likes[0]['total'].'</p>
        <button class="btn btn-primary" onclick="deslikee('.$_SESSION['user_id'].', '.$v['id'].')">Deslike</button>
        <p>'.$deslikes[0]['total'].'</p>
            <div class="badge badge-outline">'.$query3[0]['username'].'</div>
        </div>
    </div>
</div>';
}

?>
<script>
function likee(iduserr, idpostt){
    console.log('ffffeff');
    setTimeout(function() {
        $.ajax({
            url: "<?php echo $arrConfig['url_site'] ?>/posts/like.php",
            method: 'POST',
            data: { 
                    iduser: iduserr,
                    idpost: idpostt
                },
            dataType: 'json',
            error: err => {
                console.log(err)
            },
            success: function(resp) {
                // alterar num likes e deslikes e icone do botao
            }
           
        })
    }, 800)
}

function deslikee(iduserr, idpostt){
    console.log('ffffeff');
    setTimeout(function() {
        $.ajax({
            url: "<?php echo $arrConfig['url_site'] ?>/posts/deslike.php",
            method: 'POST',
            data: { 
                    iduser: iduserr,
                    idpost: idpostt
                },
            dataType: 'json',
            error: err => {
                console.log(err)
            },
            success: function(resp) {
                // alterar num likes e deslikes e icone do botao
            }
           
        })
    }, 800)
}
    </script>


    
</div>