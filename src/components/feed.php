

<div class="w-screen flex flex-col justify-center items-center [&>*]:mb-3 last:mb-0 snap-mandatory snap-y overflow-auto">

    <?php
    $query = my_query("SELECT * FROM posts ORDER BY id DESC LIMIT 20");
    foreach ($query as $k => $v) {
        $query2 = my_query("SELECT * FROM tarefas WHERE id = " . $v['idtarefa']);
        if ($query2[0]['nivel'] == 1) {
            $raridade = "Comum";
        } else if ($query2[0]['nivel'] == 2) {
            $raridade = "Raro";
        } else if ($query2[0]['nivel'] == 3) {
            $raridade = "Épico";
        }

        $query3 = my_query("SELECT * FROM user WHERE id = " . $v['iduser']);
        $likes_user = my_query("SELECT * FROM likes WHERE iduser = " . $_SESSION['user_id'] . " AND idpost = " . $v['id'] . " ORDER BY idpost DESC");
        $likes = my_query("SELECT COUNT(*) AS total FROM likes WHERE idpost = " . $v['id'] . " AND tipo = 1");
        $deslikes = my_query("SELECT COUNT(*) AS total FROM likes WHERE idpost = " . $v['id'] . " AND tipo = 0");
        $img = $arrConfig['url_site'] . '/uploads/' . $v['foto'];
        if (count($likes_user) > 0) {

            if ($likes_user[0]['idpost'] == $v['id']) {
                echo '
        <div class="card w-80 bg-base-100 shadow-xl snap-center" id="p' . $v['id'] . '">
            <figure><img class="w-full" src="' . $img . '" alt="" /></figure>
            <div class="card-body flex justify-center items-center">
                <h2 class="card-title">
                ' . $v['titulo'] . '
                    <div class="badge badge-secondary">' . $raridade . '</div>
                </h2>
                <p>' . $v['legenda'] . '</p>
                <div class="card-actions justify-between items-center w-full">
                    <button class="btn btn-circle btn-outline text-primary like ' . ($likes_user[0]['tipo'] == 1 ? 'text-white bg-green-500' : '') . '" onclick="likee(' . $_SESSION['user_id'] . ', ' . $v['id'] . ')">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    </button>
                    <span class="badge badge-outline border-primary w-16 mb-3 like-number">' . $likes[0]['total'] - $deslikes[0]['total'] . '</span>
                    <button class="btn btn-circle btn-outline text-primary deslike ' . ($likes_user[0]['tipo'] == 0 ? 'text-white bg-red-500' : '') . '" onclick="deslikee(' . $_SESSION['user_id'] . ', ' . $v['id'] . ')">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                    </button> 
                </div>
                <div class="divider mb-0">
                </div>
                <p>Autor: </p><span class="badge badge-outline border-primary w-16">' . $query3[0]['username'] . '</span>
            </div>
        </div>';
            } else {
                echo '
        <div class="card w-80 bg-base-100 shadow-xl snap-center" id="p' . $v['id'] . '">
            <figure><img class="w-full" src="' . $img . '" alt="" /></figure>
            <div class="card-body flex justify-center items-center">
                <h2 class="card-title">
                ' . $v['titulo'] . '
                    <div class="badge badge-secondary">' . $raridade . '</div>
                </h2>
                <p>' . $v['legenda'] . '</p>
                <div class="card-actions justify-between items-center w-full">
                    <button class="btn btn-circle btn-outline text-primary like" onclick="likee(' . $_SESSION['user_id'] . ', ' . $v['id'] . ')">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    </button>
                    <span class="badge badge-outline border-primary w-16 mb-3 like-number">' . $likes[0]['total'] - $deslikes[0]['total'] . '</span>
                    <button class="btn btn-circle btn-outline text-primary deslike" onclick="deslikee(' . $_SESSION['user_id'] . ', ' . $v['id'] . ')">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                    </button> 
                </div>
                <div class="divider mb-0">
                </div>
                <p>Autor: </p><span class="badge badge-outline border-primary w-16">' . $query3[0]['username'] . '</span>
            </div>
        </div>';
            }
        } else {
            echo '
        <div class="card w-80 bg-base-100 shadow-xl snap-center" id="p' . $v['id'] . '">
            <figure><img class="w-full" src="' . $img . '" alt="" /></figure>
            <div class="card-body flex justify-center items-center">
                <h2 class="card-title">
                ' . $v['titulo'] . '
                    <div class="badge badge-secondary">' . $raridade . '</div>
                </h2>
                <p>' . $v['legenda'] . '</p>
                <div class="card-actions justify-between items-center w-full">
                    <button class="btn btn-circle btn-outline text-primary like" onclick="likee(' . $_SESSION['user_id'] . ', ' . $v['id'] . ')">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    </button>
                    <span class="badge badge-outline border-primary w-16 mb-3 like-number">' . $likes[0]['total'] - $deslikes[0]['total'] . '</span>
                    <button class="btn btn-circle btn-outline text-primary deslike" onclick="deslikee(' . $_SESSION['user_id'] . ', ' . $v['id'] . ')">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                    </button> 
                </div>
                <div class="divider mb-0">
                </div>
                <p>Autor: </p><span class="badge badge-outline border-primary w-16">' . $query3[0]['username'] . '</span>
            </div>
        </div>';
        }
    }

    ?>
    <script>
        function likee(iduserr, idpostt) {
            console.log(iduserr, idpostt);
            clearDeslikes(iduserr, idpostt);
            if (document.querySelector('#p' + idpostt + ' .like').classList.contains('text-white')) {
                document.querySelector('#p' + idpostt + ' .like').classList.remove('text-white');
                document.querySelector('#p' + idpostt + ' .like').classList.remove('bg-green-500');
                document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) - 1;
            } else {
                document.querySelector('#p' + idpostt + ' .like').classList.add('text-white');
                document.querySelector('#p' + idpostt + ' .like').classList.add('bg-green-500');
                document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) + 1;
            }
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
                        if (document.querySelector('#p' + idpostt + ' .like').classList.contains('text-white')) {
                            document.querySelector('#p' + idpostt + ' .like').classList.remove('text-white');
                            document.querySelector('#p' + idpostt + ' .like').classList.remove('bg-green-500');
                            document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) - 1;
                        } else {
                            document.querySelector('#p' + idpostt + ' .like').classList.add('text-white');
                            document.querySelector('#p' + idpostt + ' .like').classList.add('bg-green-500');
                            document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) + 1;
                        }
                    }
                })
            }, 800)
        }

        function deslikee(iduserr, idpostt) {
            console.log(iduserr, idpostt);
            clearLikes(iduserr, idpostt);
            if (document.querySelector('#p' + idpostt + ' .deslike').classList.contains('text-white')) {
                document.querySelector('#p' + idpostt + ' .deslike').classList.remove('text-white');
                document.querySelector('#p' + idpostt + ' .deslike').classList.remove('bg-red-500');
                document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) + 1;
            } else {
                document.querySelector('#p' + idpostt + ' .deslike').classList.add('text-white');
                document.querySelector('#p' + idpostt + ' .deslike').classList.add('bg-red-500');
                document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) - 1;
            }
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
                        if (document.querySelector('#p' + idpostt + ' .deslike').classList.contains('text-white')) {
                            document.querySelector('#p' + idpostt + ' .deslike').classList.remove('text-white');
                            document.querySelector('#p' + idpostt + ' .deslike').classList.remove('bg-red-500');
                            document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) + 1;
                        } else {
                            document.querySelector('#p' + idpostt + ' .deslike').classList.add('text-white');
                            document.querySelector('#p' + idpostt + ' .deslike').classList.add('bg-red-500');
                            document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) - 1;
                        }
                    }
                })
            }, 800)
        }

        function clearLikes(iduserr, idpostt) {
            if (document.querySelector('#p' + idpostt + ' .like').classList.contains('text-white')) {
                document.querySelector('#p' + idpostt + ' .like').classList.remove('text-white');
                document.querySelector('#p' + idpostt + ' .like').classList.remove('bg-green-500');
                document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) - 1;
            }
        }

        function clearDeslikes(iduserr, idpostt) {
            if (document.querySelector('#p' + idpostt + ' .deslike').classList.contains('text-white')) {
                document.querySelector('#p' + idpostt + ' .deslike').classList.remove('text-white');
                document.querySelector('#p' + idpostt + ' .deslike').classList.remove('bg-red-500');
                document.querySelector('#p' + idpostt + ' .like-number').innerHTML = parseInt(document.querySelector('#p' + idpostt + ' .like-number').innerHTML) + 1;
            }
        }
    </script>
</div>