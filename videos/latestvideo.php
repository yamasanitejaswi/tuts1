<?php
// Start the session
session_start();
if ( empty( $_SESSION["uname"] ) ) {
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


<script language="JavaScript">

//////////F12 disable code////////////////////////
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
/////////////////////end///////////////////////


</script>

    </head>
    <body  oncontextmenu="return false">
 
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
             
    <div id="text" class="container">
            <div class="row">
             <div class="col-sm-8">
                 <div class="myIframe">
             
             
             <iframe src="https://player.vimeo.com/video/336318911" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
             </div>
            </div>
  
         <div class="col-sm-4">
                    


       <div style="height:400px;width:400px;overflow:scroll;overflow-x:hidden;overflow-y:scroll; color: red;">
              <ul class="list-group list-group-flush" id="books">
             <li class="list-group-item" title="telugumelodies1"><a href="index.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp; &nbsp;</i>Introduction</li>
              <li class="list-group-item" title="telugumelodies2"><a href="video2.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 1 How To Introduce Yourself </li>
             <li class="list-group-item" title="telugumelodies2"><a href="video3.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 2 How To Greet And Meet People </li> 
             <li class="list-group-item" title="telugumelodies2"><a href="video4.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 3 How To Express Yourself And Your Ideas </li> 
         <li class="list-group-item" title="telugumelodies2"><a href="video5.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 4 How To Talk To Anyone </li> 
              <li class="list-group-item" title="telugumelodies2"><a href="video6.php"><img src="img/play.png"  width="20" height="20" /></a>&nbsp;&nbsp; </i>Lesson 5 English Speaking</li>
   
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






<!-- KJB Settings Variables -->


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
      
        
            <div class="panel__block" >
  
    <h1 class="panel__title" >LESSON 1 HOW TO INTRODUCE YOURSELF</h1>
  
  
  
    <p style="text-align: justify;">Lesson 1: How To Introduce Yourself
COMMUNICATION SKILLS
For a good personality, the first skill you need to work on is communication skill. How you should, talk, represent yourself, represent your ideas matters a lot. You want to have a good job, earn good money, earn knowledge, come into a relationship, etc., you need to have good communication skill. And if you are unable to have good communication skills, then you lack behind somewhere in your life, that I don’t want. We have to master your communication skill. Have you ever thought where do you lack in your communication skill and what needs to improve? You might have thought about it or probably not. But you don’t have to worry as you will see the changes in real life when you start applying all that you are about to learn here.
The topic that we will be covering under communication skill is a question “how to introduce yourself”. In a survey it was found out that in a job interview, this question is the most difficult to answer. A person goes into a thought process as hardly anyone prepares for this question. People assume that they know themselves well. Suppose that you have come for an interview with me and I have asked you to introduce yourself. You can pause the video and see if you are able to answer it. this question sounds easy yet many fail to speak much about it. we need to master this question. I will fit the answer to this question in your subconscious mind so that you won’t ever face difficulty while answering the question.
We give introduction in two forms – short and long. When you meet most of the people, you have to give short introduction. Most people have short attention span these days and they need maximum information in the least amount of time. How you introduce yourself to others matters a lot. You must leave an impact when you introduce yourself, doesn’t matter if it’s short or long.
Short Introduction
We must know how we can introduce ourselves in twenty to thirty seconds. In certain cases, you will be asked to introduce yourself but in certain cases you would have to take the initiative. When you have to start a conversation, that is called an opener. It is a word or a statement that will start a conversation. I can go to a store and ask the person if they work for the store. This acts as an opener and conversation can go on from there. You can use any opener, but the most used opener worldwide is “hi/hello”. When we speak on phone, we say hello. In whatever situation we say/hear hello, we are ready to start a conversation. You must understand how you should use hi/hello. Response to hi is hello and vice versa. If I say hi, you will respond hello and if I say hello, you will say hi.
When you introduce yourself, you must tell your name. Most people say their name. Now notice when I say:
“Hi. My name is Venu Kalyan.”
“Hi. Venu Kalyan.”
Now you tell me which sentence seemed more confidence. When I say “my name is…” or “myself…” I am just telling my name. Have you noticed that when celebrities introduce themselves, they say, “I am Shahrukh Khan.” It implies they are someone in life. So “I am” has a strength. It brings confidence in it. so always say “Hi. I am…” because you are somebody. You have an identity and you have to create it. many people don’t tell their full name when they are asked to introduce themselves. You must tell your full name. How will it sound if Sachin Tendulkar introduces himself as Sachin? You surname is your identity so use it. When I speak my full name, I am different. When I say Salman is standing there. The difference here could be Salman could be anyone. But when I say Salman Khan, it means a particular person is standing there. Salman Khan is an identity. Always tell your full name.
You need to tell them about your profession as well. People introduce themselves as businessman. But I don’t know what business do you run. When you tell them more about your profession, you have to be specific. We are giving a short introduction of thirty seconds and we need to give maximum information to the other person. So if Salman says, “Hi, I am Salman Khan and I am medical science student”, we know that he is a medical science student and with “I am”, it created an impact that he has an identity. Let’s use it here.
“Hi I am Venu Kalyan and I am a motivational speaker.” Now with this statement, you clearly know who I am. Similarly, if you are Atul Jain, say, “Hi I am Atul Jain and I am an engineering student.” The other person will know your name and know what you are studying currently. The advantage of this is when you introduce yourself in this way, he can see you as a use for them or recommend you where necessary. Let’s say I want a CA for myself and someone tells me that they are a final year CA student, I know that the person can come in handy in the future. If they introduce themselves as merely a student, then I wouldn’t know if they can be of any use for me, or anyone who I could recommend to, or not. Many businessmen commit the same error. You need to expand and explain your profile. Increase your network. If you have a digital marketing business, introduce yourself as, “Hi. I am Rahul Yadav and I have a digital marketing business.” So in this one line you leave an impact and the other person knows exactly who you are. Conversation can proceed accordingly after this. So you use this type of short introduction and you will notice that you will leave a positive image.
Long introduction
When do we use long introduction? This is used mostly in an interview. If the interviewer only asks you “tell me about yourself”, then you need to have more points to speak on, besides the three points we discussed in the short introduction. You can use “apart from that/I also like to…”. I am introducing myself, I can say, “Hi. I am Venu Kalyan and I am a business coach and apart from that I have two companies.” I can now further explain about my company and how it operates. So if you are an engineering student, you can say, “I am an engineering student and apart from that I also teach guitar/home tuitions”.
Many a times, where you belong from isn’t the place where you are currently living. So you can add that you belong to so-so place. I will share an incident with you. Few years back, I was at an airport and was conversing with a foreigner. I don’t remember what all he told me but I do remember that he was from South America. He told me that in his country there is a flower festival and that stuck with me since. If you come across a person who isn’t from your culture, tell them about your culture and tradition. It initiates a new topic and takes conversation further
If you are good at cooking or writing, tell them what you are good at. Especially, during job interview, if you tell someone that you are good at content writing, then your skill can be used for the similar purpose in the organization. Tell them on what activities you are good at. Share your qualities in this way.
You have to be optimistic about your future. Your future is positive and you need to speak positively. If you are going to become CA or IAS officer, it could be a fact that you are still preparing for it but believe that you will be one and tell others that you are going to be an IAS. If you are starting a startup, tell them you are going to start one.
Finally, if your introduction wasn’t long enough, then you can let them know of your other hobbies at the end. Then, tell them about your family.
So let’s summarize it all:
</p>

</div>

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
        
          <a target="_blank" class="downloads__download" href="../pdf/02-How_to_Introduce_Yourself.pdf">
            <div class="media">
              <div class="media-left media-middle">
                     
                  <img class="downloads__icon" src="img/pdf.png" width="300" height="300" />
                
              </div>
              <div class="media-body media-middle">
                How_to_Introduce_Yourself.pdf
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
			<a href="https://www.play4deal.com">
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