<?php
    require('connect.php');
    
    require('createDB.php');
   
    #step5 : create the table
    $sql = "CREATE TABLE IF NOT EXISTS membership_form(
    membershipid int(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30),
    phonenumber VARCHAR(12),
    nationality VARCHAR(30),
    age VARCHAR(2),
    flightcontrollername VARCHAR(30),
    framesize VARCHAR(20),
    escamps VARCHAR(30),
    motorssizeandkv VARCHAR(30),
    vtxantennapolarity VARCHAR(30),
    batterycellsnumber VARCHAR(2),
    batterycellscapacity VARCHAR(10),
    overallweight FLOAT(20)
)";
    
    //step6 : run the query
   try{
    $pdo->exec($sql);
    echo "<br>";
    echo "<h3>Table Info created successfuly</h3>";
   }catch(PDOException $e) {
    echo "table failed: " . $e->getMessage();

}
   
       
    
    
    
    ?>
    
