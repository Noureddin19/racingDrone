<?php 
session_start();

require('../../../sql/connect.php');
if(!$_SESSION['logged']){
header("location:../ ../../login.php");
}
?>
<?php 
$name = $_POST["name"];
$role = $_POST["role"];
$twitter = $_POST["twitter"];
$instagram = $_POST["instagram"];
$linkedin = $_POST["linkedin"];
$facebook = $_POST["facebook"];
$id = $_GET["id"];
$stmt = $pdo->prepare("UPDATE club_members SET name='$name',role='$role',
twitter='$twitter',instagram='$instagram',linkedin='$linkedin',facebook='$facebook' WHERE id='$id';");
        $stmt->execute();
		header('Location: ../club-members.php');

?>