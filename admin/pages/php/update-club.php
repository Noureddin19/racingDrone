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
// update club-Content table by getting the info from club-Content-table.php

$new_contents = $_POST["contents"];
$type = $_GET["type"];
$stmt = $pdo->prepare("UPDATE club_content_table SET content='$new_contents' WHERE type='$type';");
        $stmt->execute();
		header('Location: ../club-content.php');

?>