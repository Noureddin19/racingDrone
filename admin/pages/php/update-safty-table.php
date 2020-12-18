<?php 
session_start();

require('../../../sql/connect.php');
if(!$_SESSION['logged']){
header("location:../ ../../login.php");
}
?>
<?php 
$safty = $_POST["safty"];
$id = $_GET["id"];
$detail = $_POST["detail"];
$stmt = $pdo->prepare("UPDATE safty SET safty='$safty',detail='$detail' WHERE id='$id';");
        $stmt->execute();
		header('Location: ../safty-table.php');

?>