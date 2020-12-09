<?php
//including the database connection file
session_start();
$_SESSION['login'] = true;

include("../sql/connect.php");
 
if(isset($_POST['submit'])) {    
    $uname = $_POST['uname'];
    $pwd = $_POST['pass'];
}
     
    // if all the fields are filled (not empty)             
    //insert data to database
try {
        $stmt = $pdo->prepare("SELECT username, password FROM adminTable WHERE username='$uname' and password = '$pwd'");
        $stmt->execute();
      
        // set the resulting array to associative
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $un = $result['username'];
            $pass = $result['password'];
        }
        
        if( !(strcasecmp($un,"$uname"))  && $pass == "$pwd"){
            header('location: ../index.php');
            $_SESSION['login'] = true;
        }else{
            header('location: ../login.php');
            $_SESSION['login'] = false;
        }
        
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }


?>