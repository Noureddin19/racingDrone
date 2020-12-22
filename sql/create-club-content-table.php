<?php
    require('connect.php');
    
   
    #step5 : create the table
    $sql = "CREATE TABLE IF NOT EXISTS club_content_table(
    id int(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(30),
    content TEXT
)";
    
    //step6 : run the query
   try{
    $pdo->exec($sql);
    //echo "<br>";
    //echo "<h3>Table Info created successfuly</h3>";
   }catch(PDOException $e) {
    echo "table failed: " . $e->getMessage();
}
    
    ?>
    
