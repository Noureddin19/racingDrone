<?php

try{
    require('../../sql/connect.php');
}catch(PDOException $e) {
    echo "database failed: " . $e->getMessage();

}
//require('sql/createDB.php');
//require('sql/league-table.php'); # allow you to add a php file
#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_POST['fullname'];
    $phoneNumber = $_POST['pn'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $fcn = $_POST['fcn'];
    $org = $_POST['org'];
    $ea = $_POST['ea'];
    $nationality =$_POST['nationality'];
    $ms = $_POST['ms'];
    $bcn = $_POST['bcn'];
    $bcc = $_POST['bcc'];
    $dow = $_POST['dow'];
    $ins_query="INSERT into membership_form(fullname,age, email, phonenumber, flightcontrollername, organization, nationality, escamps, motorssizeandkv,batterycellsnumber, batterycellscapacity, overallweight)values('$uname','$age', '$email','$phoneNumber', '$fcn','$org', '$nationality','$ea', '$ms' ,'$bcn', '$bcc','$dow' )";
    
    
   
        try{
            $pdo->exec($ins_query);
            $notification = " new-racer";
            $date = date("Y-m-d");
            $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
            $pdo->exec($nof_qury);
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}

header('location: data-tables.php');



?>
