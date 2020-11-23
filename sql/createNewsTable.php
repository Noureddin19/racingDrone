<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>phpone</title>
</head>
<body>
    <p>This is a page to create a database and table along with insert record</p>
    <?php
    require(connect.php);
    
    require(createDB.php);
    
    #step5 : create the table
    $sql = "CREATE TABLE IF NOT EXISTS membership_form(
    membershipid VARCHAR(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30),
    memberrole VARCHAR(15),
    birthdate VARCHAR(20),
    phonenumber VARCHAR(12)
    )";
    
    //step6 : run the query
    if($conn->query($sql) == TRUE){
        echo "<br>";
        echo "<h3>Table Info created successfuly</h3>";
    } else {
        echo "<br>";
        echo "error in creating the table Ino".$conn->error;
    }
 
    
    ?>
    
</body>
</html>