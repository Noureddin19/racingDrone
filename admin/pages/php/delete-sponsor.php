<?php

include("../includes/logincheck.php");

unlink("../".$_GET['name']);

header("location: ../sponsors-table.php");

?>