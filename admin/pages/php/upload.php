<?php
//start the session to store upload status
session_start();
// Include the database configuration file
require("../../../sql/connect.php");
$statusMsg = '';

// File upload path
$target_dir = "../../../images/sponsors/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $_SESSION['exists'] = true;
  header("location: ../sponsors-table.php");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  $_SESSION['large'] = true;
  header("location: ../sponsors-table.php");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $_SESSION['format'] = true;
  header("location: ../sponsors-table.php");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    header("location: ../sponsors-table.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>