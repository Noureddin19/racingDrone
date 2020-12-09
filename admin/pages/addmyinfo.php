<html>
<head>
    <title>Add My Info Data</title>
</head>
 
<body>
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
<form action="display-member-info.php" method="post" class="was-validated ">
        <h3>Personal Information</h3>
            <div class="form-group text-left">
                <label for="uname" class="left">Full Name</label>
                <input type="text" class="form-control border" id="uname" placeholder="Enter Name" name="uname" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            
            <div class="form-group text-left">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control border" id="pwd" placeholder="eg. 966xxxxxxxxx" name="pn" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="email">Email</label>
                <input type="email" class="form-control border" id="pwd" placeholder="eg. email@example.com" name="email" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control border" id="pwd" placeholder="Enter Your Nationality" name="nationality" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="age">Age</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your Age" name="age" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="org">Organization</label>
                <input type="text" class="form-control border" id="pwd" placeholder="Enter Your Organization" name="org" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>

            <br>
            <h3>Drone Information</h3>
            <p>This section is optional. If your planning to participate using the similator you can skip it</p>
            <div class="form-group text-left">
                <label for="pwd">Flight Controller Name</label>
                <input type="text" class="form-control border" id="pwd" placeholder="Enter Your Flight Controller Name" name="fcn">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">ESC Amps (in ampere)</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your ESC Amps" name="ea">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">Motor Size and KV</label>
                <input type="text" class="form-control border" id="pwd" placeholder="Enter Your Motor Size and KV" name="ms">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">Battery Cells</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your Battery cells number" name="bcn">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">Battery Capacity (in milliampere)</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your Battery cells capacity" name="bcc">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            <div class="form-group text-left">
                <label for="pwd">Drone Overall Weight with Battery (in grams)</label>
                <input type="number" class="form-control border" id="pwd" placeholder="Enter Your Drone's Overall Weight" name="dow">
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">Required</div>
            </div>
            
            <center>
            <button type="submit" name="submit" value ="submit" class="site-button site-btn-effect justify-content-center mt-4">Confirm</button>
            </center>
        </form>
</body>
</html>