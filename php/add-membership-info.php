<?php
session_start();
//Determine whether competitior is registered or not
$_SESSION['register'] = false;
//Connect to database
require('../sql/connect.php');
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
            //Notify administration about registration
            $pdo->exec($ins_query);
            $status = $uname. " your Record is added Successfully ";
            $notification = "0";
            // notification will add to notification table
            $date = date("Y-m-d h:i"); 
            // today date and time
            $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
            $pdo->exec($nof_qury);

            //Send confirmation email
            $to = $email;
            $subject = "registered successfully";
            $message = "<center>"."<h1>"." You have been registered successfully in PSU Racing Drone league"."</h1>"."<br>";
            $message .= "<h3>"." This is your registeraion information ";
            $message .= "<h3>"." your full name is ". $uname."</h3>";
            $message .= "<h3>"." your phone number is ". $phoneNumber."</h3>";
            $message .= "<h3>"." your email is ". $email."</h3>";
            $message .= "<h3>"." your age is ". $age."</h3>";
            $message .= "<h3>"." your organization is ". $org."</h3>";
            $message .= "<h3>"." your nationality is ". $nationality."</h3>";
            
            //Add optional info in confirmation email
            if(strlen($fcn)>3){
                $message .= "<h3>"." your drone flight controller name is ". $fcn."</h3>";
            }
            if(strlen($ea)>3){
                $message .= "<h3>"." your drone escamps is "."</h3>". $ea;
            }
            if(strlen($ms)>3){
                $message .= "<h3>"." your drone motors size and kv is "."</h3>". $ms;
            }
            if(strlen($bcn)>3){
                $message .= "<h3>"." your drone battery cells number is "."</h3>". $bcn;
            }
            if(strlen($bcc)>3){
                $message .= "<h3>"." your drone battery cells capacity is "."</h3>". $bcc;
            }
            if(strlen($dow)>3){
                $message .= "<h3>"." your drone overall weight is "."</h3>". $dow;
            }
        
        
        
        $message .= "<h2>"."If there is any incorrect information contact us for editing"."</h3>"."</center>";

// make sure each line doesn't exceed 70 characters
       

        $headers = "From: racing@psu.edu.sa" . "\r\n" .
        "CC: racing@psu.edu.sa";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        mail($to,$subject,$message,$headers);
        mail('aldhbge@gmail.com', 'Subject Line Here', 'Body of Message Here', 'From: racing@psu.edu.sa');

        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}else{
    echo "Please refill the form";
}
//Indicate that the user is successfully registered
$_SESSION['register'] = true;
header("Location: ../index.php");
exit();

?>