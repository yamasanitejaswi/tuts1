<?php

                 include "../../config.php";

                 $username= $_POST['username'];
                 $password= $_POST['password'];
                 $fullname= $_POST['fullname'];
                 $email=$_POST['email'];
                

                        

                          
                               $userssql="INSERT INTO `users`( `username`, `password`, `fullname`, `email`) VALUES ('$username','$password','$fullname','$email')";
                		
                	        
                
                	
                					
                			 if (mysqli_query($con, $userssql)) {
 
                
                                   echo "New user registered successfully";
                                    
                                } else {
                                 //   echo "Error: " . $contentsql . "<br>" . mysqli_error($con);
                                 echo "username already taken";
                                }
                        
                				
                			
                		
	              $con->close();
	
	?>

	