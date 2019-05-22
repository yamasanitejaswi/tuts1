<?php

// Start the session
session_start();

include "../../config.php";

$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
$password = mysqli_real_escape_string($con,$_POST['password']);


if ($mobile!= "" && $password!= ""){

    $sql_query = "SELECT count(*) as cntUser FROM admin WHERE mobilenumber='".$mobile."' and password='".$password."'";
   
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        // Set session variables
              $_SESSION["admin"] = 1;
        echo "1";
    }else{
        echo "0";
    }

}
else{
echo "wrong credentials";
}
?>