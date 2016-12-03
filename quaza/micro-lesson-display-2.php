<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org">
    
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
	.round_image_2 {
	width: 120px;
height: 120px;
border-radius: 50%;
margin: 20px 40px 20px 40px;
}	
	}
	</style>
  </head>
  <body>
  
 <header>
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 logo"></div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
  <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><img class="header-buttons img-responsive" src="assets/account-button.png" /></div>
  <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><img id="header-button" class="header-buttons img-responsive" src="assets/sign-out-button.png" /></div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
  </div>
  </header>

  
<div class="container" style="margin: 20px auto 20px auto;">
   <div class="row">
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     
<?php

session_start();

$image = $_SESSION["image-data"];


if (empty($image)) {

?>
    
     <div class="circle"></div>
  
<?php } else {echo "<img src=" . $image . " class='round_image_2' />";} ?>   
     
     </div>
     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
     <br />
    <div class="large-font">Emmanuel Addy Lamptey</div>
Success ID: GH-ACC-1230037<br />
<div class="large-font">Physics - Lesson 1: Hooke's Law</div>
</div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
         <div class="third circle-bar">
      <strong></strong>
    </div>
     </div>
</div>
</div>
  
<div class="my-container">
   <div class="row">
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" onClick="hrFunctionAB()" style="cursor: pointer;"><span class="three-text-blue" id="text-1">Core Courses</span>
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" onClick="hrFunctionBB()" style="cursor: pointer;"><span id="text-2">Elective Courses</span>
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" onClick="hrFunctionCB()" style="cursor: pointer;"><span id="text-3">E-Books</span>
     </div>
     </div>
     <br /><br />
     <div class="row">
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 topmargin-4">1
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 large-fonts topmargin"><a href="#" id="get-data-7" class="fetchjson">MicroLesson </a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="audio-1" href="#popup1"><div class="audio-default-1"></div><img src="images/audio.png" class="audio" /></a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="hand-1" href="#popup1"><div class="hand-default-1"></div><img src="images/hand.png" class="hand" /></a>
     </div>
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="topmargin-2"><progress class="progressbar" value="0" max="100" data-max="80"></progress>
  <span class="progress-value">0%</span></div>
     </div>
     </div>
     
    <div class="row">
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 topmargin-4">2
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 large-fonts topmargin"><a href="#" id="get-data-6" class="fetchjson"><div class="anchor-default-2"></div>Micro Lesson</a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="audio-2" href="#popup1"><div class="audio-default-2"></div><img src="images/audio.png" class="audio" /></a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="hand-2" href="#popup1"><div class="hand-default-2"></div><img src="images/hand.png" class="hand" /></a>
     </div>
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="topmargin-2"><progress class="progressbar" value="0" max="100" data-max="30"></progress>
  <span class="progress-value">0%</span></div>
     </div>
     </div>
         
   <div class="row">
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 topmargin-4">3
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 large-fonts topmargin"><a href="#" id="get-data-5" class="fetchjson"><div class="anchor-default-3"></div>Micro Lesson</a>
     </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="audio-3" href="#popup1"><div class="audio-default-3"></div><img src="images/audio.png" class="audio" /></a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="hand-3" href="#popup1"><div class="hand-default-3"></div><img src="images/hand.png" class="hand" /></a>
     </div>
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="topmargin-2"><progress class="progressbar" value="0" max="100" data-max="30"></progress>
  <span class="progress-value">0%</span></div>
     </div>
     </div>
       
   <div class="row">
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 topmargin-4">4
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 large-fonts topmargin"><a href="#" id="get-data-4" class="fetchjson"><div class="anchor-default-4"></div>Micro Lesson</a>
     </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="audio-4" href="#popup1"><div class="audio-default-4"></div><img src="images/audio.png" class="audio" /></a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="hand-4" href="#popup1"><div class="hand-default-4"></div><img src="images/hand.png" class="hand" /></a>
     </div>
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="topmargin-2"><progress class="progressbar" value="0" max="100" data-max="10"></progress>
  <span class="progress-value">0%</span></div>
     </div>
 
     </div>
       
   <div class="row">
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 topmargin-4">5
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 large-fonts topmargin"><a href="#" id="get-data-3" class="fetchjson"><div class="anchor-default-5"></div>Micro Lesson</a>
     </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="audio-5" href="#popup1"><div class="audio-default-5"></div><img src="images/audio.png" class="audio" /></a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="hand-5" href="#popup1"><div class="hand-default-5"></div><img src="images/hand.png" class="hand" /></a>
     </div>
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="topmargin-2"><progress class="progressbar" value="0" max="100" data-max="0"></progress>
  <span class="progress-value">0%</span>
  
  </div>
     </div>
         <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

     </div>
     
      
   <div class="row">
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 topmargin-4">6
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 large-fonts topmargin"><a href="#" id="get-data-2" class="fetchjson"><div class="anchor-default-6"></div>Micro Lesson</a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="audio-6" href="#popup1"><div class="audio-default-6"></div><img src="images/audio.png" class="audio" /></a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="hand-6" href="#popup1"><div class="hand-default-6"></div><img src="images/hand.png" class="hand" /></a>
     </div>
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="topmargin-2"><progress class="progressbar" value="0" max="100" data-max="0"></progress>
  <span class="progress-value">0%</span></div>
     </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
 
     </div>
     
     
   <div class="row">
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 topmargin-4">7
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 large-fonts topmargin"><a href="#" id="get-data-1" class="fetchjson"><div class="anchor-default-7"></div>Micro Lesson</a>
     </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="audio-7" href="#popup1"><div class="audio-default-7"></div><img src="images/audio.png" class="audio" /></a>
     </div>
     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
     <a class="hand-7" href="#popup1"><div class="hand-default-7"></div><img src="images/hand.png" class="hand" /></a>
     </div>
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="topmargin-2"><progress class="progressbar" value="0" max="100" data-max="0"></progress>
  <span class="progress-value">0%</span></div>
     </div>
              
 
     </div>  
     <br />  
   <div class="row">
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
     <a class="anchor-8" href="#popup3"><div class="anchor-default-8"></div><img src="assets/question-bank-button.png" class="question-bank" /></a>
     </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
     <img src="assets/all-lessons.png" class="all-lessons" />
     
     </div>
     </div> 
          
     </div>
      <div class="my-container-2 large-fonts">
<a class="pop-up-2" href="#popup2">Lesson Intro Video</a>
<br />
<a class="pop-up-2" href="#popup2">
<img src="assets/thumb_video-icon-01.png" id="video-icon-2" />
</a>
   <br /><br />
        
     <div class="large-fonts-2">Quizzes</div>
   

<div class="quiz-list-1"></div>
<div class="quiz-list-2"></div>
<div class="quiz-list-3"></div>
<div class="quiz-list-4"></div>
<div class="quiz-list-5"></div>
<div class="quiz-list-6"></div>
<div class="quiz-list-7"></div>
</div>   

 <div id="popup1" class="modalBox" href="http://localhost:8080/recordData?microLessonID=1">
 <a href="#" class="modalCloseOuter" onClick="stopVideo();"></a>
 <div class="mp4">
   <div class="bar-1"></div>
    <a href="#" style="float:right; margin: 20px 40px 20px 0;" onClick="stopVideo();">Close</a>
   <div class="modalBody">
<video width="800" id="modal-box" controls>
  <source src="videos/lesson 1 with audio.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</div>
<div class="bar-3"></div>
  </div>
  </div> 
  
   <div id="popup2" class="modalBox" href="http://localhost:8080/recordData?microLessonID=2">
 <a href="#" class="modalCloseOuter" onClick="stopVideo2();"></a>
 <div class="mp4">
   <div class="bar-1"></div>
    <a href="#" style="float:right; margin: 20px 40px 20px 0;" onClick="stopVideo();">Close</a>
   <div class="modalBody">
<video width="800" id="modal-box-2" controls>
  <source src="videos/lesson 2 with aduio.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</div>
<div class="bar-3"></div>
  </div>
  </div> 

<div id="popup3" class="q-modalBox" href="http://localhost:8080/recordData?questionBankID=1">
 <a href="#" class="modalCloseOuter" onClick="apiCall();"></a>
 <div class="qBank">
   <div class="question-bank-top-bar"><div class="question-bank-top-text">Question Bank Question 1</div><a href="#" style="float:right; margin: -30px 40px 20px 0;" onClick="apiCall();">Close</a></div>
    
   <div class="questionBankModalBody">
<div class="whiteBody">What is the best way to get the  most out of your brainstorming and outlining techniques?</div>
</div>
  </div>
  </div>

<div style="margin-top: 40px;" class="row bottom-6">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bottom-4">
<img src="assets/Social-Icons-01.png" class="social-icons" />
<img src="assets/Social-Icons-02.png" class="social-icons" />
<img src="assets/Social-Icons-03.png" class="social-icons" />
<br /><br />
<p class="copyright">&copy; 2016 QPALX. All rights reserved</p>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bottom-5">
<p>Contact Us<br />
hello@qpalx.com<br />
Studio M, 4th Floor 8 Lower<br />
Manchester Street, M1 SQF<br />
+34 393 323 32 22</p>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 float-right">
<p>Subscribe Now<br />
Sign up to stay up to date with our<br />
latest news</p>

<input type="text" name="email" class="textbox" value="&nbsp;&nbsp;&nbsp;Enter Email Address">
<img src="assets/sign-up-button.png" class="sign-up" />
</div>
</div>
<footer>
</footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="js/hr.js"></script>
     <script src="js/hover.js"></script>
     <script src="js/modal.js"></script>
         <script src="js/progress-bar.js" type="text/javascript"></script>
     <script src="js/circle-progress.js"></script>
    <script src="js/modernizr.js" type="text/javascript"></script>
    <script>
	
$(document).ready(function() {
$('.fetchjson').click(function () {
var idNumber = $(this).attr('id').split('-').reverse()[0];
$.getJSON( "ajax/microLesson"+idNumber+".json", function( data ) {
var items = [];
$.each( data, function( key, val ) {
items.push( "<tr><td>" + key + "</td><td>" + val + "</td></tr>" );
});

$( "<table />", {
"class": "my-new-list",
html: items.join( "" ),
}).appendTo( ".quiz-list-"+idNumber+"" );
});
});
});

     function stopVideo(){
        $("#modal-box")[0].pause();
		 var href = parent.document.getElementById('popup1').getAttribute("href");
		 //alert('Making API call.');
         $.ajax({ 
             type: "GET",
             dataType: "json",
             url: href,
             success: function(data){        
                alert(data);
             }
         }); 
     }
     function stopVideo2(){
        $("#modal-box-2")[0].pause();
		 var href = parent.document.getElementById('popup2').getAttribute("href");
		 //alert('Making API call.');
         $.ajax({ 
             type: "GET",
             dataType: "json",
             url: href,
             success: function(data){        
                alert(data);
             }
         });
     }
	 function apiCall(){
        
		 var href = parent.document.getElementById('popup3').getAttribute("href");
		 //alert('Making API call.');
         $.ajax({ 
             type: "GET",
             dataType: "json",
             url: href,
             success: function(data){        
                alert(data);
             }
         }); 
     }
	 	 $('.third.circle-bar').circleProgress({
  value: 1.00,
  fill: {gradient: [['#06bfd3', .5], ['#06bfd3', .5]], gradientAngle: Math.PI / 4}
}).on('circle-animation-progress', function(event, progress, stepValue) {
  $(this).find('strong').html(parseInt(100 * progress) + '<i>%</i>');
});

function newPopup(url) {
    popupWindow = window.open(url,'popUpWindow1','height=615,width=970,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
  </body>
</html>