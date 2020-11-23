<?php
    //step4: create the database
    $sql = "create DATABASE if not exists myDbase";
    if($conn->query($sql) === TRUE){
        echo "<i>Database created successfully!</i>";
    } else {
        echo "error in creating database";
    }
    // Select the database
    $conn->select_db("myDbase");"<h1>Welcome ".$username." to out php website</h1>";

    ?>