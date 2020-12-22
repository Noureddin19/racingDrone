<?php
include '../../../sql/connect.php';
$id = $_GET['workshopid']; // get is super global
include("../includes/logincheck.php");





try{
$stmt = $pdo->prepare("DELETE FROM workshop_form where workshopid='$id';");
$stmt->execute();
header('Location: ../workshop-table.php');
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }



?>