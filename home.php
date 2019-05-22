<?php
include "config.php";

// Start the session
session_start();

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>
    <head>
    <title>Login </title>
    </head>
    <body>
        <form method='post' action="index.php">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>