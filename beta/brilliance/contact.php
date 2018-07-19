<?php
/* Set e-mail recipient */
$myemail  = "brillworldwide@gmail.com";

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['yourname'], "Enter your name");
$subject  = check_input($_POST['subject'], "Write a subject");
$email    = check_input($_POST['email']);
$phone  = check_input($_POST['phone']);
$likeit   = check_input($_POST['likeit']);
$how = check_input($_POST['how']);
$comments = check_input($_POST['comments'], "Write your comments");
$teambrill= check_input($_POST['teambrill'], "Join Team Brilliance");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}


/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $yourname
E-mail: $email
Phone: $phone

Join #Team Brilliance? $teambrill
How did he/she hear about Brilliance? $how

Comments:
$comments

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);
/* Redirect visitor to the thank you page */
header('Location: thanks.htm');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Official Brilliance Website: Thanks</title>
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

<!--GOOGLE TRACKER-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22461842-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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
    <li class="home"><a href="index.html"><span>Home</span> </a></li>
    <li class="link02"><a href="news.html"><span>Link 02</span> </a></li>
    <li class="audio"><a href="brilliance-bio.html"><span>News</span> </a></li>
    <li class="bio"><a href="index.html"><span>Bio</span> </a></li>
    <li class="photos"><a href="media.html"><span>Media</span> </a></li>
    <li class="events"><a href="events.html"><span>Events</span> </a></li>
    <li class="bookings"><a href="contact.html"><span>Bookings</span> </a></li>
  </ul>
</div>
<!-- #EndLibraryItem --></div>
    </div>  
    
    <div id="main-content">
          <!--BODY (TEXT)SECTION ENDS(BELOW)-->
      <div id="widebanner">
      <a href="http://itunes.apple.com/us/album/one-day/id473962612?i=473962622&ign-mpt=uo%3D4" target="_new"><img src="../images/one-day-banner.jpg" alt="Brilliance One Day Banner" /></a>
      <!--WIDE BANNER AREA SECTION CLOSES (BELOW)-->
      </div>
           

          <!--BODY (TEXT)SECTION ENDS(BELOW)--> 
          <!--MAIN VIDEO HOLDER(GRAY BACKGROUND) BEGINS (BELOW)--->
          <div class="form-holder">
          	<!--MAIN VIDEO BEGINS (BELOW)-->
            <h5>There was an error</h5>
<p id="contact-thanks">    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>
<br/></p>

<img src="../images/error.jpg" alt="Thank you image" />            <!--CONTACT FORUM BEGINS HERE(BELOW)--->
            
         
          <!--MAIN VIDEO HOLDER (GRAY BACKGROUND) ENDS (BELOW)-->
          </div>
          <div id="footer-banner-news">
<img src="../images/brilliance-wide-news-banner.gif" alt="One Day Banner" />
</div>

</div><!-- #BeginLibraryItem "/Library/photo-ad-space.lbi" -->
    <div id="ad-space">
      <div id="more-news">
     
             <h2>DOWNLOAD the LATEST MUSIC</h2>

        <a href="http://itunes.apple.com/us/album/one-day/id473962612?i=473962622&ign-mpt=uo%3D4" target="_new"><img src="images/one-day-artwork.jpg" alt="One Day Artwork" /></a>
        <p id="download">Brilliance: One Day <br/>
          (Available on iTunes Today)</p>
     </div>
  </div>
<!-- #EndLibraryItem --></div></div></div><!-- #BeginLibraryItem "/Library/footer.lbi" --><div id="footer-holder">
    <div id="footer">
	<p id="copyright"> Website designed by <a href="http://www.d3mario.com" target="_new">5ive Star Designs</a>, LLC.  &amp; Brilliance Worldwide, LLC <br/>

Copyright &copy; 2011, <a href="http://www.d3mario.com" target="_new">5ive Star Designs</a>, Brilliance Worldwide, Jeff Bass Music &amp; Park City Management, All Rights Reserved.</p>
</div>
</div><!-- #EndLibraryItem --></div>    


</body>
</html>

<?php
exit();
}
?>