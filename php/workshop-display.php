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
    $background = $_REQUEST['background'];
    $exp = $_REQUEST['exp'];
    
    //insert info into database
    $ins_query="insert into workshop_form(fullname, email, phonenumber, city, country,student,background, affiliation, experience)values('$uname','$email', '$phoneNumber','$city', '$country', '$student','$background','$aff', '$exp' )";
    
   
    
        //notify administration about registration
        try{
            $pdo->exec($ins_query);
            $notification = "1";
            $date = date("Y-m-d h:i");
            $nof_qury = "INSERT INTO `notification` (`username`, `notification`, `creation`) VALUES ('$uname', '$notification', '$date')";
            $pdo->exec($nof_qury);


             //Send confirmation email
            $to = $email;
            $subject = "registered successfully in the workshop";
            $message = "<center>"."<h1>"." You have been registered successfully in  Racing Drone club workshop"."</h1>"."<br>";
            $message .= "<h3>"." This is your registeraion information ";
            $message .= "<h3>"." your full name is ". $uname."</h3>";
            $message .= "<h3>"." your phone number is ". $phoneNumber."</h3>";
            $message .= "<h3>"." your country is ". $country."</h3>";
            $message .= "<h3>"." your city is ". $city."</h3>";
            
            
            
           
        
        
        
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
}

//Go back to the club page
header("Location: ../index.php");
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
        <p>User Name = <?php echo $_POST['uname']; ?></p>
        <p>Password = <?php echo $_POST['email']; ?></p>
        <p class="bg-success"> <?php echo $status ?></p>
    </div>
</body>

</html>