<?php
 include '../config.php'; 
// Start the session
session_start();
if (empty( $_SESSION["uname"] ) ) {
      header( 'Location: ../index.php' );
      exit();
    }


?>
<!DOCTYPE html>
<html>
	<head>
	    <title>VenuKalyan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js">
</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
		<!-- Custom style sheet below -->
		<link rel="stylesheet" type="text/css" href="main.css">
		<!-- Link to Font Awesome style sheet below -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- Link to JavaScript file below -->
		<script type="text/javascript" src="main.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		
		<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


<style type="text/css">
	/*
Code snippet by maridlcrmn for Bootsnipp.com
Follow me on Twitter @maridlcrmn
*/

.navbar-brand {
 position: relative; z-index: 2; 
}

.navbar-nav.navbar-right .btn { 
	position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; 
}
.navbar-default {
	background-color:  #404040;
      padding: 10px;
}
.navbar .navbar-collapse { 
	position: relative;
	

 }
.navbar .navbar-collapse .navbar-right > li:last-child { 
	padding-left: 22px; 
}
.navbar-default .navbar-nav>li>a {
    color: white;
        font-size: 19px;
        color: rgba(255,255,255,.75);
}
.navbar .nav-collapse { 
	position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; 
}
.navbar.navbar-default .nav-collapse { 
	background-color: #f8f8f8; 
}
.navbar.navbar-inverse .nav-collapse {
 background-color: #222; 
}
.navbar .nav-collapse .navbar-form { 
	border-width: 0; box-shadow: none;
	 }
.nav-collapse>li {
 float: right;
  }

.btn.btn-circle {
 border-radius: 50px;
  }
.btn.btn-outline { 
	background-color: transparent; 
}
.navbar-brand{
  font-size: 19px;
  color: rgba(255,255,255,.75);
}
@media screen and (max-width: 767px) {
    .navbar .navbar-collapse .navbar-right > li:last-child {
     padding-left: 15px; padding-right: 15px; 
 } 
    
    .navbar .nav-collapse { 
    	margin: 7.5px auto; padding: 0; 
    }
    .navbar .nav-collapse .navbar-form {
     margin: 0; 
 }
    .nav-collapse>li {
     float: none; 
 }
}
img {
  height: 50px;
  margin-top: -8px;

}
.mainbody {
    background:#f0f0f0;
}

</style>
	</head>
	<body>
         <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
       <a class="navbar-brand" href="../header.php"> <img src="../images/companylogo.png" alt="IMG"></a>

        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
             <li class="nav-item">
        <a href="../header.php">ABOUT US</a>
      </li>
            <li class="nav-item">
        <a  href="../videos/index.php">MY COURSES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PROFILE</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="../sessiondestory.php">LOGOUT</a>
      </li> 
          </ul>
      
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->


<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
  </br>
  </br>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <h4>Profile Settings</h4>
      </br>
        <p>Change Your Profile Information</p>
        
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
   
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
           
            <div class="panel panel-default">
                <div class="panel-body">
                 
                   
                    <form class="form-horizontal">
                        <label for="fullname">Full Name</label> : <?php echo  $_SESSION["uname"] ?>   
                        <br><br>
                        <label for="email">Email</label> : <?php echo  $_SESSION["emailid"] ?> 
                        
                         </form>
                      </br>
                    </br>
                  </br>
                      <form >
          <fieldset>
            <legend>Change Password</legend>

            <div class="changePasswordMessages"></div>

            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Current Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="currentpassword" name="currentpassword" placeholder="Current Password">
              </div>
            </div>

            <div class="form-group">
              <label for="npassword" class="col-sm-2 control-label">New password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password">
              </div>
            </div>

            <div class="form-group">
              <label for="cpassword" class="col-sm-2 control-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
              </div>
            </div>

          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <input type="submit" id="but_submit" class="btn btn-primary"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes 
                
              </div>
            </div>


          </fieldset>
        </form>

                   
                </div>
            </div>
        </div>
          </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("form").submit(function(event){
        // Stop form from submitting normally
        event.preventDefault();
        
        /* Serialize the submitted form control values to be sent to the web server with the request */
        var formValues = $(this).serialize();
        
        // Send the form data using post
        $.post("changepassword.php", formValues, function(data){
            // Display the returned data in browser
            Swal.fire(data)
           // $("#result").html(data);
        });
    });
});
</script>
        
 <style>
	 #myFooter {
    background-color: #3c3d41;
    color: white;
    padding-top: 30px;
}

#myFooter .footer-copyright {
    background-color: #333333;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
}

#myFooter .row {
    margin-bottom: 60px;
}

#myFooter .navbar-brand {
    margin-top: 45px;
    height: 65px;
}

#myFooter .footer-copyright p {
    margin: 10px;
    color: #ccc;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter h2 a{
    font-size: 50px;
    text-align: center;
    color: #fff;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .social-networks {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 16px;
}

#myFooter .social-networks a {
    font-size: 32px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover {
    text-decoration: none;
}

#myFooter .facebook:hover {
    color: #0077e2;
}

#myFooter .google:hover {
    color: #ef1a1a;
}

#myFooter .twitter:hover {
    color: #00aced;
}

#myFooter .btn {
    color: white;
    background-color: #d84b6b;
    border-radius: 20px;
    border: none;
    width: 150px;
    display: block;
    margin: 0 auto;
    margin-top: 10px;
    line-height: 25px;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }
}


/* CSS used for positioning the footers at the bottom of the page. */
/* You can remove this. */


.content{
   flex: 1 0 auto;
   -webkit-flex: 1 0 auto;
   min-height: 200px;
}

#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}

	img.p4d{ 
	    height: 150px;
    transform-origin:50% 50%;
    animation:2s rotateRight infinite linear; 
}

@keyframes rotateRight{
    100%{ transform:rotate(360deg); }
}




	</style>

    <footer id="myFooter">
        <div class="container">
            <div class="row">
			<a href="https://play.google.com/store/apps/details?id=com.rotomaker.play4deal">
                <div class="col-sm-4">            
					<img  class="p4d" style=" margin:auto;" src="https://www.venukalyan.com/images/spinwheelgif.png" alt="Smiley face" height="150" width="150">
					<br>
					<h4 class="effect-shine">Powered by PLAY4DEAL</h4>
					
                </div>
				</a>
                <div class="col-sm-5">
                    
                   
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                       
                        <a href="https://www.facebook.com/uniklife01" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCx8YyQLgT6UcYAga21hlHhA" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				 <a href="https://www.linkedin.com/company/unik-life---new-trendsetter-organization/" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						
                    </div>
                    
                </div>
            </div>
        </div>
       
    </footer>

    
 	</body>
</html>