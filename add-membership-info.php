<?php
session_start();

$_SESSION['register'] = false;

require('sql/connect.php');
//require('sql/createDB.php');
//require('sql/league-table.php'); # allow you to add a php file


#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_POST['uname'];
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
    $ins_query="insert into membership_form(fullname,age, email, phonenumber, flightcontrollername, organization, nationality, escamps, motorssizeandkv,batterycellsnumber, batterycellscapacity, overallweight)values('$uname','$age', '$email','$phoneNumber', '$fcn','$org', '$nationality','$ea', '$ms' ,'$bcn', '$bcc','$dow' )";
    
    
   
        try{
            $pdo->exec($ins_query);
    $status = $uname. " your Record is added Successfully ";
   
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}else{
    echo "reFills the form";
}
$_SESSION['register'] = true;
header("Location: index.php");
exit();

?>
