<?php
include '../include/config.inc.php';
$target_dir = $arrConfig['dir_site']."/src/uploads/";
$target_file = $target_dir . $_SESSION['user_id'].date('Y-m-d').'.png';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$nomeoriginal = $_SESSION['user_id'].date('Y-m-d').'.png';
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
  confidence(string);

  function confidence(stringg){
    setTimeout(function() {
        $.ajax({
            url: "<?php echo $arrConfig['url_site'] ?>/src/posts/sessionconfidence.php",
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
}
 </script>

 <?php
    
  if (floatval($_SESSION['confidence']) < 0.8){
    echo "not a bird.";
    die();
  }
   

    include $arrConfig['dir_site'].'/src/posts/inserirpost.php';

    echo "The file ". htmlspecialchars( $_SESSION['user_id'].date('Y-m-d').'.png'). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>