<?php
include("../includes/logincheck.php");// checks if user is loged in


include '../../../sql/connect.php';// connect
$id = $_GET['id']; // get is super global



try{
  // delete spicfic club member by id
$stmt = $pdo->prepare("DELETE FROM club_members where id='$id';");
$stmt->execute();
try{
  

$notification = "7";
$date = date("Y-m-d h:i");

$nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('d', '$notification', '$date')";
$pdo->exec($nof_qury);
header("location: ../club-members.php");
}catch(PDOException $e) {
  echo "database failed: " . $e->getMessage();

}
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }



?>