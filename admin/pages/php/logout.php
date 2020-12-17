<?php
session_start();
session_unset();
session_destroy();
$_SESSION['logged']=false;
echo $_SESSION['logged'];

?>