<?php
require('sql/connect.php');
//require('sql/createDB.php');
//require('sql/league-table.php'); # allow you to add a php file


#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_REQUEST['uname'];
    $phoneNumber = $_REQUEST['pn'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['age'];
    $fcn = $_REQUEST['fcn'];
    $org = $_REQUEST['org'];
    $fs = $_REQUEST['fs'];
    $ea = $_REQUEST['ea'];
    $nationality =$_REQUEST['nationality'];
    $ms = $_REQUEST['ms'];
    $vtp = $_REQUEST['vtp'];
    $bcn = $_REQUEST['bcn'];
    $bcc = $_REQUEST['bcc'];
    $dow = $_REQUEST['dow'];
    $ins_query="insert into membership_form(fullname,age, email, phonenumber, flightcontrollername, organization, nationality, framesize, escamps, motorssizeandkv, vtxantennapolarity,batterycellsnumber, batterycellscapacity, overallweight)values('$uname','$age', '$email','$phoneNumber', '$fcn','$org', '$nationality', '$fs','$ea', '$ms' , '$vtp','$bcn', '$bcc','$dow' )";
    
    
   
        try{
            $pdo->exec($ins_query);
    $status = $uname. " your Record is added Successfully ";
   
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}else{
    echo "reFills the form";
}
header("Location: index.php");
exit();



?>
