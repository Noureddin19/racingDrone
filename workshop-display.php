<?php
 require('sql/connect.php');
    
require('sql/createDB.php');
require('sql/createWorkshopTable.php'); # allow you to add a php file
$status = ""; # for user that message is successfully recorded in database
#isset : allows you to check that #it is decleard # it is not null
if(isset($_POST['submit'])){
    #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form
    $uname = $_REQUEST['uname'];
    $phoneNumber = $_REQUEST['pn'];
    $email = $_REQUEST['email'];
    $aff = $_REQUEST['aff'];
    $city = $_REQUEST['city'];
    $country = $_REQUEST['country'];
    $student = $_REQUEST['student'];
    $exp = $_REQUEST['exp'];
    
    $ins_query="insert into workshop_form(fullname, email, phonenumber, city, country,student, affiliation, experience)values('$uname','$email', '$phoneNumber','$city', '$country', '$student','$aff', '$exp' )";
    echo $ins_query;
   
   
        try{
            $pdo->exec($ins_query);
            header("Location: index.html");
            exit(); 
    $status = $uname. " your Record is added Successfully ";
        }catch(PDOException $e) {
            echo "database failed: " . $e->getMessage();
    
        }
}




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