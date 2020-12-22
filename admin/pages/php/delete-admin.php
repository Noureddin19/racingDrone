<?php
include("../includes/logincheck.php");

include '../../../sql/connect.php';

$id = $_GET['id']; // get is super global




try{
$stmt = $pdo->prepare("DELETE FROM adminTable where id='$id';");
$stmt->execute();
header('Location: ../admin-table.php');
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }



?>