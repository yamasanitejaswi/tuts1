<?php

// Start the session
session_start();


// destroy the session 
session_destroy(); 

header("Location: index.php"); /* Redirect browser */

 exit();

?>