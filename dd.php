<?php
require('sql/createCompetitionTable.php'); # allow you to add a php file
ob_start();
header("Location: index.php");
exit();
?>
