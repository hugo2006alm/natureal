<?php
include '../include/config.inc.php';
$target_dir = $arrConfig['dir_site']."/uploads/";
$target_file = $target_dir . $_SESSION['user_id'].date('Y-m-d').$_POST['objetivo'].'.png';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$nomeoriginal = $_SESSION['user_id'].date('Y-m-d').$_POST['objetivo'].'.png';
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



// Check file size
if ($_FILES["foto"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
?>

<span id="response" value=""><?php
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    
    if (function_exists('curl_file_create')) { // php 5.5+
      $cFile = curl_file_create($target_file);
    } else { // 
      $cFile = '@' . realpath($target_file);
    }
    $post = array('extra_info' => '123456','file_contents'=> $cFile);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://www.nyckel.com/v1/functions/vpj20lceipbwcjjb/invoke");
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
   
    $result=curl_exec ($ch);
    curl_close ($ch);

 ?></span>



 <script>
  let string = document.getElementById('response').innerHTML;
  console.log(string);
 /*  confidence(string);

  function confidence(stringg){
    setTimeout(function() {
        $.ajax({
            url: "<?php echo $arrConfig['url_site'] ?>/posts/sessionconfidence.php",
            method: 'POST',
            data: { 
                    string: JSON.parse(stringg).confidence
                
                },
            dataType: 'json',
            error: err => {
                console.log(err)
            },
            success: function(resp) {
              console.log('sucess')
            }
           
        })
    }, 800)
} */

//console.log("<?php echo $arrConfig['url_site'] ?>/posts/inserirpost?nomeoriginal=<?php echo $nomeoriginal ?>&descricao=<?php echo $_POST['descricao'] ?>&objetivo=<?php echo $_POST['objetivo'] ?>&Posicao=<?php echo $_POST['Posicao'] ?>&idobjetivo1=<?php echo $_POST['idobjetivo1'] ?>&idobjetivo2=<?php echo $_POST['idobjetivo2'] ?>&idobjetivo3=<?php echo $_POST['idobjetivo3'] ?>&string="+JSON.parse(string).confidence);

window.location.replace("<?php echo $arrConfig['url_site'] ?>/posts/inserirpost.php?nomeoriginal=<?php echo $nomeoriginal ?>&descricao=<?php echo $_POST['descricao'] ?>&objetivo=<?php echo $_POST['objetivo'] ?>&Posicao=<?php echo $_POST['Posicao'] ?>&idobjetivo1=<?php echo $_POST['idobjetivo1'] ?>&idobjetivo2=<?php echo $_POST['idobjetivo2'] ?>&idobjetivo3=<?php echo $_POST['idobjetivo3'] ?>&string="+JSON.parse(string).confidence);

 </script>

 <?php



  
   

    

   // echo "The file ". htmlspecialchars( $_SESSION['user_id'].date('Y-m-d').$_POST['objetivo'].'.png'). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>