<?php
// coneect
       require('connect.php');

   //step4: create the database
    $sql = "create DATABASE if not exists psuracingdb";
    try{
        $pdo->exec($sql);
       // echo "<i>Database created successfully!</i>";
        $pdo->query("use psuracingdb");

        

    
    }catch(PDOException $e) {
        echo "database failed: " . $e->getMessage();
    }
    // Select the database
   

    ?>