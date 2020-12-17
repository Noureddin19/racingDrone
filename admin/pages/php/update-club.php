<?php 
session_start();

require('../../../sql/connect.php');
if(!$_SESSION['logged']){
header("location:../ ../../login.php");
}
?>
<?php 
$new_contents = $_POST["contents"];
$type = $_GET["type"];
$stmt = $pdo->prepare("UPDATE club_content_table SET content='$new_contents' WHERE type='$type';");
        $stmt->execute();
		header('Location: ../club-content.php');

?>