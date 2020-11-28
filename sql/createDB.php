<?php
    //step4: create the database
    $sql = "create DATABASE if not exists myDbase";
    try{
        $pdo->exec($sql);
        echo "<i>Database created successfully!</i>";
   
        

    
    }catch(PDOException $e) {
        echo "database failed: " . $e->getMessage();

    }
    // Select the database
   

    ?>