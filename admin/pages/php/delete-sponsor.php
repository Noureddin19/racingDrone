<?php

session_start();

unlink("../".$_GET['name']);

header("location: ../sponsors-table.php");

?>