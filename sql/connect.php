<?php
    //step1 : create connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="myDbase";
    //step2: create connection to variables
    $pdo = new PDO('mysql:host=localhost;dbname=myDbase', 'user', 'password');
    
    //step3: chech if connection is successful
    if($pdo->connect_error){
        die("connection failed ".$pdo->connect_error);
    } else {
        echo "<h1>Welcome ".$username." to out php website</h1>";
    }
    
    ?>