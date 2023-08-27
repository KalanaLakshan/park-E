<?php   
session_start(); //to ensure you are using same session
unset($_SESSION["user"]);
session_destroy(); //destroy the session
header("location:http://localhost/park-e2/php/login.php"); //to redirect back to "index.php" after logging out
exit();
?>