<?php
// connect
    require('connect.php');
    
    require('createDB.php');
   
    #step5 : create the table
    $sql = "CREATE TABLE IF NOT EXISTS workshop_form(
    workshopid int(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(40),
    phonenumber VARCHAR(12),
    city VARCHAR(30),
    country VARCHAR(30),
    email VARCHAR(50),
    experience VARCHAR(400),
    affiliation VARCHAR(100),
    student VARCHAR(4)

    
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
    
