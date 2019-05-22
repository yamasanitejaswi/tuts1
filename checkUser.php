<?php


include "config.php";

// Start the session
session_start();



$uname = trim(mysqli_real_escape_string($con,$_POST['username']));
$password = trim(mysqli_real_escape_string($con,$_POST['password']));




$userssql="SELECT * FROM users WHERE username='$uname'";
$result=mysqli_query($con,$userssql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
    $row = mysqli_fetch_assoc($result);
    if ($password == $row['password']){
          $_SESSION["uname"] = $uname;
         $_SESSION["emailid"] = $row['email'];
         echo 1;
        
    }
    else {
        echo "Wrong  Password";
        
    }
}
else{
    echo "Wrong Username ";
   
}












mysqli_close($con);


?>