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
// update safty table by getting the info from safty-table.php
$safty = $_POST["safty"];
$id = $_GET["id"];
// get id from link
$detail = $_POST["detail"];
$stmt = $pdo->prepare("UPDATE safty SET safty='$safty',detail='$detail' WHERE id='$id';");
        $stmt->execute();
          // go to same page again
		header('Location: ../safty-table.php');

?>