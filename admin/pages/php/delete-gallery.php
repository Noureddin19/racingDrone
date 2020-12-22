<?php

include("../includes/logincheck.php");

unlink("../".$_GET['name']);

header("location: ../gallery-table.php");

?>