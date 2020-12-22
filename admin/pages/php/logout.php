<?php
// when user clik logout from navbar he will come here and all the session wil be removed
session_start();
session_unset();// cler the session
session_destroy();//close the session
header("location: ../../../index.php"); //go to index.php
?>