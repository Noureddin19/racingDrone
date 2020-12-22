<?php

//check if admin is logged in
include("../includes/logincheck.php");

//delete file
unlink("../".$_GET['name']);

//goback to admin table
header("location: ../gallery-table.php");

?>