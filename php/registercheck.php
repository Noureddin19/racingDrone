<?php
//including the database connection file
session_start();
$_SESSION['register'] = true;

include("sql/connect.php");
 
if(isset($_POST['submit'])) {    
    $email = $_POST['email'];
}
     
    // if all the fields are filled (not empty)             
    //insert data to database
try {
        $stmt = $pdo->prepare("SELECT email FROM adminTable WHERE email='$email'");
        $stmt->execute();
      
        // set the resulting array to associative
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $email = $result['email'];
        }
        
        if((strcasecmp($email,"$email"))){
            header('location: racing-form.php');
            $_SESSION['register'] = true;
        }else{
            header('location: display-membership-info.php');
            $_SESSION['register'] = false;
        }
        
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
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
    <h1>غلط</h1>
</body>
</html>