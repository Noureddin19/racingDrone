<?php // this page is to add work shop registers
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
    $id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$phoneNumber = $_POST['pn'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $exp = $_POST['exp'];
   
    $aff = $_POST['aff'];
    $student =$_POST['student'];
    $ins_query="INSERT into workshop_form(fullname,phonenumber, email, city, country, experience, affiliation, student)values('$fullname','$phoneNumber', '$email','$city','$country', '$exp','$aff', '$student')";
    
    
   
        try{
            $pdo->exec($ins_query);
            $notification = "0";
            $date = date("Y-m-d h:i");
            $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
            $pdo->exec($nof_qury);
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}

header('location: ../workshop-table.php');



?>
