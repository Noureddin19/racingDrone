<?php // this page is to add commitee members
include("../includes/logincheck.php"); // checks if user is loged in
try{
    require('../../../sql/connect.php'); // connect
}catch(PDOException $e) {
    echo "database failed: " . $e->getMessage();

}
//require('sql/createDB.php');
//require('sql/league-table.php'); # allow you to add a php file
#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    $catagory = $_POST['catagory'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $ins_query="INSERT into compition_commitee(catagory,name, role, twitter, instagram, linkedin, facebook) 
    values('$catagory','$name', '$role','$twitter', '$instagram','$linkedin', '$facebook')";
    
    
   
        try{
            $pdo->exec($ins_query);
            $notification = "6";
            $date = date("Y-m-d h:i");
            $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
            $pdo->exec($nof_qury);
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}

header('location: ../compition-commitee.php');



?>
