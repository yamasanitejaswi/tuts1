<?php 

session_start();
if (empty( $_SESSION["uname"] ) ) {
      header( 'Location: index.php' );
      exit();
    }

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
   
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
  <div class="container">
  <!-- Brand 
  <a class="navbar-brand" href="#"><span>Logo</span> Here</a>-->
     <img class="navbar-brand"  src="images/companylogo.png" alt="company logo" style="width:200px;height:100px;">
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="videos/index.php">MY COURSES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile/index.php">PROFILE</a>
      </li> 
      <li class="nav-item">
           <a class="nav-link" href='sessiondestory.php'>LOGOUT</a>
        
      </li> 
    </ul>
  </div>
  </div>
</nav>
  <div class="banner">
  <div class="container">
  <div class="banner-text">
  <div class="banner-heading">
  Glad to see you here !
  </div>
  <div class="banner-sub-heading">
  
  </div>
  <a href='https://www.venukalyan.com/videos/index.php'><button type="button" class="btn btn-warning text-dark btn-banner">Get started</button></a>
  
  </div>
  </div>
</div>
<section id="about">
<div class="container">
  <div class="text-intro">
  <h2>About Us</h2>
    <p style="text-align: justify;">The main objective of this company is to impart trainings to people belonging to any segment or any age in the society. Till date UNIK LIFE has trained more than 10 lakh people across India and overseas and have touched lives of thousands of people through its highly impactful range of Audio & Video Training programs, DVDs, CDs and books. 

From last 7 years UNIK LIFE has trained thousands of people in every walks of life and every age group. Entrepreneurs & Businessmen, Doctors, Engineers, Chartered Accountants, Corporate Executives, Employees, Students, Housewives, Net-workers, Sportsmen etc all who wish everlasting Success, Happiness, Peace and Personal Growth have been Benefited.

UNIK LIFE: Conducts motivational training programs across the world, through seminars, workshops and trainings. Provides a foundation, guidance, training to build a career as a trainer and also provides free public programs to improve happiness, health, humanity & spiritual well-being.

Our Mission:
To add values to this beautiful world by making a major positive difference in the life of people.

Our Vision:
To leave this world with much more than my family, namely love, happiness & peace in everyone. </p>
  </div>
</div>
</section>
<script src="js/header.js"></script>

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