<?php
    //step1 : create connection variables
    $servername = "mysql.racing.riotu-lab.org";
    $username = "noureddine";
    $password = "ccisAdmin2020";
    $database ="psuracingdb";
    //step2: create connection to variables
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    try{
    //step3: chech if connection is successful
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    
    ?>