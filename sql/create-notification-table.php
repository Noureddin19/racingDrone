<?php
// connect
    require('connect.php');
    
   
    #step5 : create the table
    $sql = "CREATE TABLE IF NOT EXISTS notification(
    username VARCHAR(30),
    notification VARCHAR(12)
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
    
