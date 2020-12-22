<?php

//check if admin is logged in
include("../includes/logincheck.php");

//delete file
unlink("../".$_GET['name']);

header("location: ../sponsors-table.php");

?>