<?php
//connect to database
 require('../sql/connect.php');
    
$status = ""; # for user that message is successfully recorded in database
#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    // Fetch user data from registration form
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_REQUEST['uname'];
    $phoneNumber = $_REQUEST['pn'];
    $email = $_REQUEST['email'];
    $aff = $_REQUEST['aff'];
    $city = $_REQUEST['city'];
    $country = $_REQUEST['country'];
    $student = $_REQUEST['student'];
    $exp = $_REQUEST['exp'];
    
    //insert info into database
    $ins_query="insert into workshop_form(fullname, email, phonenumber, city, country,student, affiliation, experience)values('$uname','$email', '$phoneNumber','$city', '$country', '$student','$aff', '$exp' )";
    
   
    
        //notify administration about registration
        try{
            $pdo->exec($ins_query);
            $notification = "1";
            $date = date("Y-m-d h:i");
            $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
            $pdo->exec($nof_qury);
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}

//Go back to the club page
header("Location: ../club-index.php");
exit();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container bg-warning">
    <p>User Name  = <?php echo $_POST['uname']; ?></p>
    <p>Password  = <?php echo $_POST['email']; ?></p>
    <p class="bg-success"> <?php echo $status ?></p>
   </div>
</body>
</html>