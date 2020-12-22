<?php 
session_start();
// connect data base

require('../../../sql/connect.php');
if(!$_SESSION['logged']){
// check if the user is logged in

header("location:../ ../../login.php");
}
?>
<?php 
// update club-commitee table by getting the info from compition-commitee-table.php

$catagory = $_POST["catagory"];
$name = $_POST["name"];
$role = $_POST["role"];
$twitter = $_POST["twitter"];
$instagram = $_POST["instagram"];
$linkedin = $_POST["linkedin"];
$facebook = $_POST["facebook"];
$id = $_GET["id"];
$stmt = $pdo->prepare("UPDATE compition_commitee SET catagory='$catagory',name='$name',role='$role',
twitter='$twitter',instagram='$instagram',linkedin='$linkedin',facebook='$facebook' WHERE id='$id';");
        $stmt->execute();
		header('Location: ../compition-commitee.php');

?>