<?php 
session_start();

require('../../../sql/connect.php');
if(!$_SESSION['logged']){
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
		header('Location: ../safty-table.php');

?>