<?php

include '../../../sql/connect.php';
$id = $_GET['id']; // get is super global

echo $id;


try{
$stmt = $pdo->prepare("DELETE FROM compition_commitee where id='$id';");
$stmt->execute();
try{
  

$notification = "7";
$date = date("Y-m-d h:i");

$nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('d', '$notification', '$date')";
$pdo->exec($nof_qury);
}catch(PDOException $e) {
  echo "database failed: " . $e->getMessage();

}
header('Location: ../data-tables.php');
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }



?>