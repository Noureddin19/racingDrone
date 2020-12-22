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
// update compition-content table by getting the info from compition-content-table.php

$new_contents = $_POST["contents"];
$type = $_GET["type"];
// get type from link

$stmt = $pdo->prepare("UPDATE compition_content_table SET content='$new_contents' WHERE type='$type';");
        $stmt->execute();
		header('Location: ../compition-table.php');

?>