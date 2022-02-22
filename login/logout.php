<?php
// Session wird Initialisiert
session_start();
 
// Alle Variablen werden zurückgesetzt
$_SESSION = array();
 
// Session auflösen
session_destroy();
 
// Redirect zur login-Seite
header("location: login.php");
exit;
?>