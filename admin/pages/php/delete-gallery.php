<?php

session_start();

unlink("../".$_GET['name']);

header("location: ../gallery-table.php");

?>