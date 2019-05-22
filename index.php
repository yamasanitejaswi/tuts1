<?php 
//require_once 'config.php';


?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>VenuKalyan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		
		<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../images/img-01.jpg" alt="IMG">
                </div>
                 <div id="message"></div>
                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid User name is required">
                        <input class="input100" type="text" name="username" id="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                       
                        <input type="submit" value="Login" class="login100-form-btn">
                       
                       
                            
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  

<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
    <script src="js/main.js"></script>
    
    
    
       <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("form").submit(function(event){
        // Stop form from submitting normally
        event.preventDefault();
       
        /* Serialize the submitted form control values to be sent to the web server with the request */
        var formValues = $(this).serialize();
        
        // Send the form data using post
        $.post("checkUser.php", formValues, function(data){
            // Display the returned data in browser
          //  Swal.fire(data)
           // $("#result").html(data);
           
            
                    if( data==1){
                    
                 window.location.href="header.php";
                                }
                                else{
                        Swal.fire(data)
                    } 
          
          
        });
    });
});
</script>
    
   
 <style>
	 #myFooter {
    background-color: #3c3d41;
    color: white;
    padding-top: 5px;
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
   min-height: 02px;
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
	
	<div class="content">
    </div>

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