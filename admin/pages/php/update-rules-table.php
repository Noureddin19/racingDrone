<?php 
session_start();

require('../../../sql/connect.php');
if(!$_SESSION['logged']){
header("location:../ ../../login.php");
}
?>
<?php 
$rule = $_POST["rule"];
$id = $_GET["id"];
$stmt = $pdo->prepare("UPDATE rules SET rule='$rule' WHERE id='$id';");
        $stmt->execute();
		header('Location: ../rules-table.php');

?>