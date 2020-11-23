<?php
    //step1 : create connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    //step2: create connection to variables
    $conn = new mysqli($servername, $username, $password);
    
    //step3: chech if connection is successful
    if($conn->connect_error){
        die("connection failed ".$conn->connect_error);
    } else {
        echo "<h1>Welcome ".$username." to out php website</h1>";
    }
    ?>