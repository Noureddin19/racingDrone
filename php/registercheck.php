<?php
//including the database connection file
session_start();
$_SESSION['register'] = true;

require("../sql/connect.php");
 
if(isset($_POST['submit'])) {    
    $email = $_POST['email'];
}
     
    // if all the fields are filled (not empty)             
    //insert data to database
try {
        $stmt = $pdo->prepare("SELECT email FROM membership_form WHERE email='$email'");
        $stmt->execute();
      
        // set the resulting array to associative
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $eml = $result['email'];
        }
        
        if(strcasecmp($eml, $email)){
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