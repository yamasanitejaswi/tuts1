<?php

// Start the session
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header("Location: https://www.venukalyan.com/index.php"); /* Redirect browser */
 exit();

?>