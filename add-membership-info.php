<?php
session_start();

$_SESSION['register'] = false;

require('sql/connect.php');
//require('sql/createDB.php');
//require('sql/league-table.php'); # allow you to add a php file


#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_SESSION['uname'];
    echo $uname;
    $phoneNumber = $_SESSION['pn'];
    $email = $_SESSION['email'];
    $age = $_SESSION['age'];
    $fcn = $_SESSION['fcn'];
    $org = $_SESSION['org'];
    $ea = $_SESSION['ea'];
    $nationality =$_SESSION['nationality'];
    $ms = $_SESSION['ms'];
    $bcn = $_SESSION['bcn'];
    $bcc = $_SESSION['bcc'];
    $dow = $_SESSION['dow'];
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
