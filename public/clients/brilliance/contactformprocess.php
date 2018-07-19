<?php

/* Subject and Email Variables */
	
	$emailSubject = 'Contact Brill';
	$webMaster = 'brillworldwide@gmail.com';
	
/* Gathering Data Variables */

	$emailField = $_Post['email'];
	$nameField = $_Post['name'];
	$commentField = $_Post['comment'];	

	$body = <<<EOD
<br><hr><br>
Email: $email <br>
Name: $name <br>
Comment: $comment <br>
EOD;	


	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailsubject, $body, $headers);
	
/*Results Rendered as Html */
	
	$theResults = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Official Brilliance News</title>
<link href="css/beta01.css" rel="stylesheet" type="text/css" />


<!-- include jQuery library -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<!-- include Cycle plugin -->

<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>

<script type="text/javascript"> 

$(document).ready(function() {

    $('.slideshow').cycle({

		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...

		speed: 300,

		timeout: 3000,

		next: '.slideshow',

		pause: 1





});

});







</script>




</head>

<body>
<!--THE CITY BACKDROP BEGINS HERE-->
	<div id="outer-wraper">
<div id="wrapper">
<!--HEADER BEGINS HERE--> 
	<div id="header">
    	<div class="slideshow">

		<img src="../images/head1.jpg" width="906" height="255" />

		<img src="../images/header-1.jpg" width="906" height="255" />

<img src="../images/header-3.jpg" width="906" height="255" />

<img src="../images/header-4.jpg" width="906" height="255" />

	</div>


   <!--NAVIGATION BEGINS HERE-->
    	<div id="navigation"><!-- #BeginLibraryItem "/Library/main-nav.lbi" -->
<div id="sprite-wrapper">
  <ul id="sprite">
    <li class="home"><a href=><span>Home</span> </a></li>
    <li class="link02"><a href="news.html"><span>Link 02</span> </a></li>
    <li class="audio"><a href="brilliance-bio.html"><span>News</span> </a></li>
    <li class="bio"><a href="index.html"><span>Bio</span> </a></li>
    <li class="photos"><a href="media.html"><span>Media</span> </a></li>
    <li class="events"><a href="events.html"><span>Events</span> </a></li>
    <li class="bookings"><a href="../backup/contact.html"><span>Bookings</span> </a></li>
  </ul>
</div>
<!-- #EndLibraryItem --></div>
    </div>  
    
    <div id="main-content">
          <!--BODY (TEXT)SECTION ENDS(BELOW)-->
      <div id="widebanner">
      <img src="../images/brilliance-wide-news-banner.gif" alt="Brilliance News Banner" />
      <!--WIDE BANNER AREA SECTION CLOSES (BELOW)-->
      </div>
           
      <!--ARTICLE 001 BEGINS HERE(BELOW)-->
       	  <p class="lastupdated">Last Updated Oct 9, 2011 </p>
          <h1 id="head-line">Brilliance with Three Six Mafia</h1>
          <p class="post-by">www.iAmBrill.com</p>
      <!--SOCIAL MEDIA LINKS BEGINS(BELOW)-->
          
          <div class="social-media-links">
          <!--TWITTER LINK BEGINS HERE (BELOW)-->
          <div class="twitter-button">
<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://iambrill.com/signs-to-jeffbass.html" data-count="horizontal" data-via="DJShortstop" data-related="JeffBassMusic">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>  </div>        
                    <!--FB LINK BEGINS HERE (BELOW)-->

          <div class="fb-button"><iframe src="http://www.facebook.com/plugins/like.php?app_id=176386719083458&amp;href=http%3A%2F%2Fiambrill.com%2Fsigns-to-jeffbass.html&amp;send=false&amp;layout=standard&amp;width=680&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font=verdana&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:600px; height:35px;" allowTransparency="true"></iframe></div>
          
      <!--SOCIAL MEDIA LINKS ENDS(BELOW)-->
          </div>

          <!--BODY (TEXT)SECTION ENDS(BELOW)--> 
          <!--MAIN VIDEO HOLDER(GRAY BACKGROUND) BEGINS (BELOW)--->
          <div class="main-video-holder">
          	<!--MAIN VIDEO BEGINS (BELOW)-->
            
            <!--CONTACT FORUM BEGINS HERE(BELOW)--->
            
<h1>Email has been sent</h1>

                
            
          
         
          <!--MAIN VIDEO HOLDER (GRAY BACKGROUND) ENDS (BELOW)-->
          </div>
</div>
<div id="ad-space">
            <div id="more-news">
        	<h2>Related News</h2>
            	<ul>
                	<li>Link1</li>
                    <li>Link2</li>
               </ul>     
        </div>
        <img class="skyscraper-banners" src="../images/brill-youtube-banner.jpg" />
    </div> 
    
        

    </div>
    <div id="footer-holder">
    <div id="footer">
	<p id="copyright"> Website designed by 5ive Star Designs, LLC.  &amp; Brilliance Worldwide, LLC <br/>

Copyright &copy; 2011, 5ive Star Designs, Brilliance Worldwide, Jeff Bass Music &amp; Park City Management, All Rights Reserved.</p>
</div>
</div>
</div>    


</body>
</html>
EOD;		
echo "$theResults";

?>
