<?php
include("../includes/logincheck.php");// checks if user is loged in

include '../../../sql/connect.php'; // connect

$id = $_GET['id']; // get is super global




try{
  // run delete query to delete a spicific admin by id
$stmt = $pdo->prepare("DELETE FROM adminTable where id='$id';");
$stmt->execute();
header('Location: ../admin-table.php');
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }



?>