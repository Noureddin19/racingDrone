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
// update rules table by getting the info from rules-table.php

$rule = $_POST["rule"];
$id = $_GET["id"];
// get id from link

$stmt = $pdo->prepare("UPDATE rules SET rule='$rule' WHERE id='$id';");
        $stmt->execute();
        // go to same page again
		header('Location: ../rules-table.php');

?>