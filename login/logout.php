<?php
// initialize session
session_start();
 
// reset variables
$_SESSION = array();
 
// dispose session
session_destroy();
 
// redirect to login page
header("location: login.php");
exit;
?>
