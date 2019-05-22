<?php
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
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

           <style>

         #smplVideoPlayer {
  margin: auto;
  background-color: black;
  display: inline-block;
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  position: absolute;
  top: 1%;
  left: 20%;
}
.myIframe {
     position: relative;
     padding-bottom: 65.25%;
     padding-top: 30px;
     height: 0;
     overflow: auto; 
     -webkit-overflow-scrolling:touch; //<<--- THIS IS THE KEY 
     border: solid black 1px;
} 
.myIframe iframe {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
}
  #streamContainer {
    margin-top: 1px;
    margin-bottom: 4px;
    background-color: rgb(48, 46, 47);
    cursor: pointer;
  }
    #streamBar {
      height: 10px;
      width: 0%; /*width set to zero (of its parent)*/
      background-color: rgb(255, 255, 255);
    }
  #controlsContainer {
    height: 45px;
    padding-bottom: 4px;
  }   
    #controlsContainer > * {
      display: inline-block;
      vertical-align: middle;
    }
    #playButton {
      width: 40px;
      margin: 0 0 0 5px;
      float: left;
      cursor: pointer;
    }
    #duration {
      margin: 0 350px 0 20px;
      color: rgb(255, 255, 255);
      cursor: default;
    }
    #volumeButton {
      cursor: pointer;
    }
    #volumeContainer {
      margin: 0 10px 0 0;
      height: 37px;
      width: 100px;
      background-color: rgb(48, 46, 47);
      cursor: pointer;
    }
      #volumeBar {
        height: 37px;
        width: 50%;
        background-color: rgb(255, 255, 255);
      }
    #fullscreenButton {
      margin: 0 5px 0 0;
      float: right;
      cursor: pointer;
    }


           </style>
        <!-- Custom style sheet below 
        <link rel="stylesheet" type="text/css" href="main.css">-->
        <!-- Link to Font Awesome style sheet below -->
  		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
             <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Link to JavaScript file below -->
        <script type="text/javascript" src="main.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

      <!-- CSS ================================================== -->

    
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic|Montserrat:400,700,400italic,700italic" rel="stylesheet" type="text/css">    
    <link rel="stylesheet" media="screen" href="./css/core.css" />
    <link rel="stylesheet" media="screen" href="./css/style.css" />

    <!-- Optional Background Image ======================================== -->
    
      <style>
        .section--global {
          background: #f9f9f9;
        }
      </style>
    

    


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
#text{
  background-color: black;
}
.list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    border: 1px solid #000;
        color: white;
    }
.list-group-item{
  background-color: black;

.fa-play:before {
    content: "\f04b";
    color: white;
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
        <a  href="#">MY COURSES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../profile/index.php">PROFILE</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="../sessiondestory.php">LOGOUT</a>
      </li> 
          </ul>
      
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
        
           </br>
           </br> 
            </br>
           </br> 
            </br>
           </br> 
            </br>
           </br> 
             
           <div id="text" class="container">
            <div class="row">
              <div class="col-sm-8">
                <div class="myIframe">
             
             
             <iframe src="https://player.vimeo.com/video/336318911" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

             </div>
            </div>
          
             <div class="col-sm-4">

       <div style="height:400px;width:400px;overflow:scroll;overflow-x:hidden;overflow-y:scroll; color: white;">
           <p align='center'><b>COMMUNICATION SKILLS</b></p>
              <ul class="list-group list-group-flush" id="books">
       
              <li class="list-group-item" title="telugumelodies1"><a href="index.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp; &nbsp;</i>Introduction</li>
              <li class="list-group-item" title="telugumelodies2"><a href="video2.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 1 How To Introduce Yourself </li>
             <li class="list-group-item" title="telugumelodies2"><a href="video3.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 2 How To Greet And Meet People </li> 
             <li class="list-group-item" title="telugumelodies2"><a href="video4.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 3 How To Express Yourself And Your Ideas </li> 
         <li class="list-group-item" title="telugumelodies2"><a href="video5.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 4 How To Talk To Anyone </li> 
              <li class="list-group-item" title="telugumelodies2"><a href="video6.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 5 English Speaking</li>
   <li class="list-group-item" title="telugumelodies2"><a href="video7.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 6 How To Win Interviews</li>
   <li class="list-group-item" title="telugumelodies2"><a href="video8.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 7 How_To_Win_Group_Discussions</li>   
       <li class="list-group-item" title="telugumelodies2"><a href="video9.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>LESSON 8 HOW TO BECOME GREAT CONVERSATIONALIST</li>   
             </ul>
  <div style="height:400px;width:400px;overflow:scroll;overflow-x:hidden;overflow-y:scroll; color: white;">
           <p align='center'><b>PRESENTATION SKILLS</b></p>
              <ul class="list-group list-group-flush" id="books">
                  <li class="list-group-item" title="telugumelodies2"><a href="video10.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>LESSON 9 HOW TO SPEAK FLUENTLY</li>
              </ul>
         </div>
   

         </div>

                </div>
             </div>   
        






   <div class="container container--main">
      <div class="content-wrap">
        <div class="section-wrap section-wrap--top">
          <div id="section-header" data-section-id="header"><!-- Header Variables -->



  <!-- Announcement Variables -->





<style>
  .announcement {
    background: #1abc9c;
    color: #fff;
  }
  a.announcement:hover {
    color: #fff;
  }
</style>





</div>
          <div id="section-search" data-section-id="search">






<style>
  .section--search {
    /*============================================================================
      #Background Color Override
    ==============================================================================*/
    background: #92969c;
    
      /*============================================================================
        #Text Color Override
      ==============================================================================*/
      color: #ffffff;
    
  }
  .section--link_list.section--dark.section--search a, .section--link_list.section--light.section--search a, .section--blog_posts.section--dark.section--search a, .section--blog_posts.section--light.section--search a, .section--feature.section--dark.section--search a, .section--feature.section--light.section--search a {
    
      /*============================================================================
        #Text Color Override
      ==============================================================================*/
      color: #ffffff;
    
  }
</style>


<style>
  .section--search ::-webkit-input-placeholder {
    color: #ffffff;
  }
  .section--search ::-moz-placeholder {
    color: #ffffff;
  }
  .section--search :-ms-input-placeholder {
    color: #ffffff;
  }
  .section--search :-moz-placeholder {
    color: #ffffff;
  }
  .section--search .search__icon {
    color: #ffffff;
  }
  .section--search .search__input {
    color: #ffffff;
  }
</style>


  <div class="section section--search section--middle section--light section--search" kjb-settings-id="sections_search_settings_background_color">
    <div class="container">
      <form action="/products/advanced-personality-development/search" method="get" role="search">
        <div class="input-group search">
          <span class="input-group-addon search__icon"><i class="fa fa-search"></i></span>
          <input class="form-control search__input" type="search" name="q" placeholder="Search for something..." kjb-settings-id="sections_search_settings_search_text">
          <span class="input-group-addon search__icon search__icon--close"><i class="fa fa-times" aria-hidden="true"></i></span>
        </div>
      </form>
    </div>
  </div>


</div>
          <div id="" class="section section--global section--product">
  <div class="container">
    <div class="row">
      <div id="section-breadcrumbs" data-section-id="breadcrumbs">
  
  
  <style>
    .breadcrumbs__crumb {
      color: #111;
    }
    .breadcrumbs__crumb a, .breadcrumbs__crumb--divider {
      color: #666;
    }
  </style>



</div>
    </div>
    <div class="row">
      <div id="section-post_player" data-section-id="post_player">


Liquid error: Unrecognized color `'

<style>
  
  .track__count i {
    color: #2e91fc;
  }
  .playlist .progress__icon {
    color: #2e91fc;
  }
  
</style>




</div>
    </div>
    <div class="row section__row">
      <div class="section__body col-lg-8">
        <div id="section-post_body" data-section-id="post_body">
  <div class="panel panel-- panel--" style="text-align: left" >
    <div class="panel__body">


<style>
  /*============================================================================
    #Completion Btn Style
  ==============================================================================*/
  .btn--completion {
    border-color: #2e91fc !important;
    color: #2e91fc !important;
    margin-bottom:0;
  }
  .btn--completion[data-post-completion-toggle="true"] {
    background: #2e91fc !important;
    border-color: #2e91fc !important;
    color: #fff !important;
  }
  .btn--completion[data-post-completion-toggle="true"]:hover {
    color: #fff !important;
  }
  .btn--completion:hover {
    color: #2e91fc !important;
  }
</style>

  <style>
    /*============================================================================
      #Smart Next Styles
    ==============================================================================*/
    .smart-next {
      background: #f9f9f9;
      color: #000;
    }
    .smart-next__link, .smart-next__link:hover {
      color: #000;
    }
    .smart-next__link--small, .smart-next__link--small:hover {
      color: #2e91fc;
    }
  </style>
    </div>
  </div>

</div>

      </div>
      <div id="section-post_sidebar" data-section-id="post_sidebar">
  <div class="section__sidebar col-lg-4">
    
      
          
  <div class="panel" >
    <div class="panel__body">
      <p class="panel__heading" >
        Downloads
      </p>
      <div class="downloads">
        
          <a target="_blank" class="downloads__download" href="../pdf/01-Introduction.pdf">
            <div class="media">
              <div class="media-left media-middle">
                     
                  <img class="downloads__icon" src="img/pdf.png" width="300" height="300" />
                
              </div>
              <div class="media-body media-middle">
                Introduction.pdf
              </div>
            </div>
          </a>
        
      </div>
    </div>
  </div>

<style>
  .panel--1481845721274 {
    /*============================================================================
      #Background Color Override
    ==============================================================================*/
    background: #fff;
    
  }
</style>


<style>
  .panel--1481845721274 .instructor__title {
    color: ;
  }
</style>

<div class="panel panel--1481845721274 instructor" >
  <div class="panel__body">
    
      <h6 class="panel__heading" >Instructor</h6>
    
    <div class="media">
      
        <div class="media-left">
          <img src="img/venukalyan.jpg" class="img-circle instructor__image" />
        </div>

      <div class="media-body media-middle">
        <p class="instructor__name" >Venu Kalyan</p>

        <p class="instructor__title" > One of the Youngest <br> Mind Trainer  <br>Motivational Guru  <br> Yogacharya  <br> Certified NLP Trainer  <br> Tarot Card Teacher  <br> Life Coach  <br> Entreprenuer
        <br> Youth Icon <br> Author</p>
      </div>
    </div>
    <p class="panel__copy" ></p>
  </div>
</div>

        
    
  </div>


</div>
    </div>
  </div>
</div>


          
        </div>
      </div>
      
    </div>
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
                    <button type="button" class="btn btn-default">Contact us</button>
                </div>
            </div>
        </div>
       
    </footer>
    
    </body>

</html>