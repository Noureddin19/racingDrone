<?php
session_start();

$_SESSION['register'] = false;

require('../sql/connect.php');
//require('sql/createDB.php');
//require('sql/league-table.php'); # allow you to add a php file
#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_SESSION['uname'];
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
    $notification = "0";
    $date = date("Y-m-d h:i");
    $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
    $pdo->exec($nof_qury);

    
        $to = $email;
        $subject = "registered successfully";
        $message = " You have been registered successfully in PSU Racing Drone league"."<br>";
        $message .= " This is your registeraion information "."<br>";
        $message .= " your full name is ". $uname."<br>";
        $message .= " your phone number is ". $phoneNumber."<br>";
        $message .= " your email is ". $email."<br>";
        $message .= " your age is ". $age."<br>";
        $message .= " your organization is ". $org."<br>";
        $message .= " your nationality is ". $nationality."<br>";
        $message .= " your drone flight controller name is ". $fcn."<br>";
        $message .= " your drone escamps is ". $ea;
        $message .= " your drone motors size and kv is ". $ms."<br>";
        $message .= " your drone battery cells number is ". $bcn."<br>";
        $message .= " your drone battery cells capacity is ". $bcc."<br>";
        $message .= " your drone overall weight is ". $dow."<br>";

// make sure each line doesn't exceed 70 characters
       

        $headers = "From: racing@psu.edu.sa" . "\r\n" .
        "CC: racing@psu.edu.sa";

        mail($to,$subject,$message,$headers);
        mail('aldhbge@gmail.com', 'Subject Line Here', 'Body of Message Here', 'From: racing@psu.edu.sa');

        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}else{
    echo "reFills the form";
}
$_SESSION['register'] = true;
header("Location: ../index.php");
exit();

?>
