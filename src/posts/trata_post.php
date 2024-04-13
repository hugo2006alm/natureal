<?php
include '../include/config.inc.php';
$target_dir = $arrConfig['dir_site']."/src/uploads/";
$target_file = $target_dir . $_SESSION['user_id'].date('Y-m-d').'.png';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$nomeoriginal = $_SESSION['user_id'].date('Y-m-d').'.png';

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

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
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

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    
    
    include $arrConfig['dir_site'].'/src/posts/inserirpost.php';

    echo "The file ". htmlspecialchars( $_SESSION['user_id'].date('Y-m-d').'.png'). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>