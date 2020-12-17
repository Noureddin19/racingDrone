<?php
include '../../../sql/connect.php';
$id = $_GET['membershipid']; // get is super global




try{
$stmt = $pdo->prepare("DELETE FROM membership_form where membershipid='$id';");
$stmt->execute();
try{
  $pdo->exec($ins_query);
$status = $uname. " your Record is added Successfully ";
$notification = "3";
$date = date("Y-m-d h:i");
$nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
$pdo->exec($nof_qury);
}catch(PDOException $e) {
  echo "database failed: " . $e->getMessage();

}
header('Location: ../data-tables.php');
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }



?>