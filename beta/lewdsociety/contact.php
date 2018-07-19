<?php
/* Set e-mail recipient */
$myemail  = "iid3mario@gmail.com";

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['yourname'], "Enter your name");
$subject  = check_input($_POST['subject'], "Write a subject");
$email    = check_input($_POST['email']);
$phone  = check_input($_POST['phone']);
$comments = check_input($_POST['comments'], "Write your comments");

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



<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Home - Lewd Society</title>
<style type="text/css">
<!--
MAIN CSS STYLESHEET-->
</style>
<link href="css/stylesheet2.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--CENTERING THE PAGE-->
<div id="outer">
<div id="container">
  <!--THE HEADER-->
  <div id="header">
    <div id="navigation">
      <div id="nav"><!-- #BeginLibraryItem "/Library/main-nav.lbi" -->
      <ul>
        <li><a href="beta.html">Home</a></li>
        <li><a href="audio.html">Audio</a></li>
        <li><a href="video.html">Video</a></li>
        <li><a href="bio.html">Lewd Bio</a></li>
        <li><a href="shows.html">Shows</a></li>
        <li><a href="photos.html">Pictures</a></li>
        <li><a href="lewd-fans.html">Fan Section</a></li>
        <li><a href="bookings.html">Bookings</a></li>
      </ul>
      <!-- #EndLibraryItem --></div>
    </div>
  </div>
  <!--NAVIGATION CLOSES-->
  <!--THE HEADER CLOSES-->
  <!--MAIN STAGE BEGINS(HOLDING CONTENT)-->
  <div id="main-stage">
    <!--SUB HEADER OPENS-->
    <!--SUB HEADER CLOSES-->
    <!--ADVERTISEMENT SECTION-->
    <div id="advertisements">
      <div id="promo">
        <iframe src="http://player.vimeo.com/video/12666263?title=0&amp;byline=0&amp;portrait=0" width="300" height="201" frameborder="0"></iframe>
        <p>&nbsp;</p>
      </div>
      <img id="rop-for-food" src="images/rop-for-food.jpg" /> <img class="advertisements" src="/images/add.jpg" /> <img class="advertisements" src="/images/add.jpg" /> <img class="advertisements" src="/images/add.jpg" /> <img class="advertisements" src="/images/add.jpg" /> </div>
    <!--ADVERTISEMENT SECTION CLOSES-->
    <!--INSIDE CONTENT OPENS-->
    <div id="inside-content">
   
    
    
    <div id="booking-header">
    
    </div>
    	<div id="bio">
        <div id="bookings">
       <h1>For Booking or Inquiries </h1>
        <h2> Contact Michael Philip</h2>
          <p> Phone: 248.747.2629 </p>
          
        <h2>Thank you for your interest</h2>
<form action="file:///C|/Users/5ive Star/Desktop/web-sites/iambrill/contact.php" method="post">
<table id="contact-table">
  <tr>
    <th class="form-header">Your Name:</th>
    <td><input type="text" name="yourname" class="input" /></td>
  </tr>
  <tr>
    <th class="form-header">Subject:</th>
    <td><input type="text" name="subject" class="input" /></td>
  </tr>
  <tr>
    <th class="form-header">Email:</th>
    <td><input type="text" name="email" class="input"  /></td>
  </tr>
  <tr>
    <th class="form-header">Phone:</th>
    <td><input type="text" name="phone" class="input" ></td>
  </tr>
  <tr>
    <th class="form-header">Your Comments:</th>
    <td><textarea name="comments" rows="10" cols="40"></textarea></p>
  </td>
  </tr>
</table>



<div id="submit">
<p><input type="submit" value="Submit"></p>
</div>

</form>
          </div>
<!--NEWS LETTER CLOSES-->
      
    	</div>
    </div>
    <!--FOOTER IMAGE-->
    <div id="footer"></div>
    <!--CENTERING THE PAGE ENDS-->
  </div>
  <!--LEWD BACKGROUND-->
</div>
</body>
</html>
<?php
exit();
}
?>