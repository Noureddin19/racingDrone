<?php 
session_start();
// session will start here to check if user logeed in he can continue otherwise he will go to login php
if(!$_SESSION['logged']){
header("location: ../../../login.php");
}
?>