<?php
include '../../sql/connect.php';
$id = $_GET['membershipid']; // get is super global




try{
$stmt = $pdo->prepare("DELETE FROM membership_form where membershipid='$id';");
$stmt->execute();
header('Location: data-tables.php');
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }



?>