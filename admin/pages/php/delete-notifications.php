<?php
include("../includes/logincheck.php");

require('../../../sql/connect.php');

    
    $sql = "TRUNCATE TABLE `notification`";

    //Prepare the SQL query.
    $statement = $pdo->prepare($sql);
    
    //Execute the statement.
    $statement->execute();


header("location: ../notification.php")

?>