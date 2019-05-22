<?php 

    include "../config.php";
     // Start the session
    session_start();
  
  	$username = $_SESSION["uname"];
    // $username="venu";
  	
  	
 
  	
	$currentPassword = $_POST['currentpassword'];
	$newPassword = $_POST['newpassword'];
	$confirmPassword = $_POST['confirmpassword'];
	


	$sql ="SELECT * FROM users WHERE username = '$username'";
	$query = $con->query($sql);
	$result = $query->fetch_assoc();

	if($currentPassword == $result['password']) {

		if($newPassword == $confirmPassword) {

			$updateSql = "UPDATE users SET password = '$newPassword' WHERE username = '$username'";
			
			if($con->query($updateSql) === TRUE) {
			
				$valid= "Successfully Updated";	
				
			} else {
			
				$valid = "Error while updating the password";	
			}

		} else {
		
			$valid = "New password does not match with Conform password";
		}

	} else {
	
		$valid = "Current password is incorrect";
	}

	$con->close();

	echo $valid;



?>