<?php
include("../includes/logincheck.php");// checks if user is loged in

require '../../../sql/connect.php';
$id = $_GET['id']; // get is super global


// delete the commitee member will be come from compition-commitee.php
try{
 
$stmt = $pdo->prepare("DELETE FROM compition_commitee where id='$id';");
$stmt->execute();
try{
  

$notification = "7";
// specific number for notification
$date = date("Y-m-d h:i");
// now date with time
$nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('d', '$notification', '$date')";
$pdo->exec($nof_qury);
header("location: ../compition-commitee.php");
}catch(PDOException $e) {
  echo "database failed: " . $e->getMessage();

}
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }



?>