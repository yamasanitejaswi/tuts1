<?php

                 include "../../config.php";

                 $videoname= $_POST['videoname'];
                 $paragraph= $_POST['paragraph'];
                 $videourl="";
                 $img="";
                 $pdfurl="";

                      // VIDEOID GENERATION 
                  
                  // here we are taking first two letters of brand name 
                   $videonamesubletter = substr($videoname,0,2);
                 
                   // random number for brandid genaration
                   $randomnumber = rand(100,1000);
                           
                           
                 // finally brandid is a combination of brandsubletter and randomnumber ( 1 STEP . BRAND ID GENERATION)
                           
                  $videoid = $videonamesubletter.$randomnumber;
               
                              	  
                         // UPLOADING THUMBNAIL IMAGES INTO FOLDER 

                            $target_dir = "../../images/";
                            $target_file = $target_dir . basename($_FILES["thumbnailupload"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Check if image file is a actual image or fake image
                         //   if(isset($_POST["submit"])) {
                                $check = getimagesize($_FILES["thumbnailupload"]["tmp_name"]);
                                if($check !== false) {
                                    //echo "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                } else {
                                    echo "File is not an image.";
                                    $uploadOk = 0;
                                }
                            //}
                            // Check if file already exists
                            if (file_exists($target_file)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["thumbnailupload"]["size"] >10485760) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your tumbnail file was not uploaded.";
                            // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["thumbnailupload"]["tmp_name"], $target_file)) {
                                    
                                    
                                        //Getting Selected video Information
                                          $rawimg=$_FILES['thumbnailupload']['name'];

                                         

                                          $url = "https://www.venukalyan.com/images/";

                                          $img= $url .$rawimg;

                         
                              
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
    
                                 // UPLOADING VIDEOS INTO FOLDER

                                   $target="../../videos/";


                                  //Targeting Folder 
                                  $errors = 1;
                                  $target_dir = "../../videos/";
                                  $target_file = $target_dir . basename($_FILES["videoupload"]["name"]);
                                  $target=$target.basename($_FILES['videoupload']['name']);
                                  //Getting Selected video Type
                                  $type=pathinfo($target,PATHINFO_EXTENSION);
                                   //Allow Certain File Format To Upload
                                   if($type!='mp4'){

                                    echo "Only mp4 file format are allowed to Upload. ";
                                    $errors=0;

                                   }
                                                 //checking for Exsisting video Files
                                                  if(file_exists($target)){
                                                   echo "File Exist";
                                                   $errors=0;
                                                   }

                                                  $filesize=$_FILES['videoupload']['size'];
                                                  if($filesize>1073741824){

                                                    $errors=0;
                                                    }
                                                   if($errors == 0){
                                                   echo ' Your File Not Uploaded';
                                                    }
                                      else{
                                           
                                         // $uplaod_success=move_uploaded_file($_FILES['video']['tmp_name'],$target);
                                         
                                        
                                   //       $uplaod_success=move_uploaded_file($_FILES['videoupload']['tmp_name'],$target_file);
                                         
                                         // intentionally doing
                                  
                                       $uplaod_success=true;
                                                                         
                                        if($uplaod_success){

                                        //Getting Selected video Information
                                          $rawvideoname=$_FILES['videoupload']['name'];

                                         

                                          $url = "https://www.venukalyan.com/videos/";

                                          $videourl= $url .$rawvideoname;
                                        

                                         }

                                    
                                   }


                          
                                  $target="../../pdf/";


                                  //Targeting Folder 
                                  $errors = 1;
                                  $target_dir = "../../pdf/";
                                  $target_file = $target_dir . basename($_FILES["pdfupload"]["name"]);
                                  $target=$target.basename($_FILES['pdfupload']['name']);
                                  //Getting Selected video Type
                                  $type=pathinfo($target,PATHINFO_EXTENSION);
                                   //Allow Certain File Format To Upload
                                   if($type!='pdf'){

                                    echo "Only pdf file format are allowed to Upload. ";
                                    $errors=0;

                                   }
                                                 //checking for Exsisting video Files
                                                  if(file_exists($target)){
                                                   echo "File Exist";
                                                   $errors=0;
                                                   }

                                                  $filesize=$_FILES['pdfupload']['size'];
                                                  if($filesize>10485760){

                                                    $errors=0;
                                                    }
                                                   if($errors == 0){
                                                   echo ' Your pdf File Not Uploaded';
                                                    }
                                      else{
                                           
                                         // $uplaod_success=move_uploaded_file($_FILES['video']['tmp_name'],$target);
                                         
                                        
                                          $uplaod_success=move_uploaded_file($_FILES['pdfupload']['tmp_name'],$target_file);
                                         

                                                                         
                                        if($uplaod_success){

                                        //Getting Selected video Information
                                          $rawpdfname=$_FILES['pdfupload']['name'];

                                        
                                          $url = "https://www.venukalyan.com/pdf/";

                                          $pdfurl= $url .$rawpdfname;
                                        
                                          
                                         }

                                    
                                   }

                
                		
                	         $videosql="INSERT INTO `video`( `videoid`, `name`, `source`, `img`) VALUES ('$videoid','$videoname','$videourl','$img')";
                
                			 $contentsql="INSERT INTO `content`( `videoid`, `paragraph`, `pdf`) VALUES ('$videoid','$paragraph','$pdfurl')";
                					
                			 if (mysqli_query($con, $videosql)) {
                
                
                             if (mysqli_query($con, $contentsql)) {
                
                                   echo "New record created successfully";
                                    
                                } else {
                                    echo "Error: " . $contentsql . "<br>" . mysqli_error($con);
                                }
                        
                				   
                				    				
                				} else {
                				    echo "Error: " . $videosql . "<br>" . mysqli_error($con);
                				}
                
                			
                		
	              $con->close();
	
	?>

	
	
	
 
           
	
	
	
	
 
           