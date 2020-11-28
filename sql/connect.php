<?php
    //step1 : create connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="myDbase";
    //step2: create connection to variables
    $pdo = new PDO('mysql:host=localhost;dbname=myDbase', $username, $password);
    try{
    //step3: chech if connection is successful
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    
    ?>