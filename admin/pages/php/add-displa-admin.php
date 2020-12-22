<?php
include("../includes/logincheck.php");

try{
    require('../../../sql/connect.php');
}catch(PDOException $e) {
    echo "database failed: " . $e->getMessage();

}
//require('sql/createDB.php');
//require('sql/league-table.php'); # allow you to add a php file
#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $username = $_POST['user'];
    $pass = $_POST['password'];
    $category = $_POST['category'];
  
    $ins_query="INSERT into adminTable(username,password, category)values('$username','$pass', '$category')";
    
    
   
        try{
            $pdo->exec($ins_query);
            $notification = " new-racer";
            $date = date("Y-m-d h:i");
            $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
            $pdo->exec($nof_qury);
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}

header('location: ../admin-table.php');



?>
