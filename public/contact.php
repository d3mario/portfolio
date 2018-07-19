<?php
include '../private/initalize.php' ;
$title = "Portfolio ";
include(SHARED_PATH .'/header.php');
?>

    <main id="content-area">
    


      <h1 class ="contact-question-header">Do you value</h1>
      <h2 class ="question"> Excellent Communication Skills?</h2>

      <div id="content-body-wrapper">
        <div id="large-phone-icon">
          <a href="tel:3035782725">Call Me Today:</a>
        </div>
        <div id="email-icon" rel="js-email-form">
          <a href="#modal" rel="js-email-form">Email me today:</a> <a class="mobile" href="mailto:iid3mario@gmail.com">Email me today:</a>
        </div>
        <div id="facebook-icon">
          <a href="https://www.linkedin.com/pub/demario-windom/21/390/855" target="_blank">Linked In:</a>
        </div>
        <div id="instagram-icon">
          <a href="https://github.com/d3mario" target="_blank">Git Hub :</a>
        </div>
        <img src="images/divider.png" alt="divider" />
        <div class="details"><a href="tel:3035782725">303-578-2725</a></div>
        <div class="details" rel="js-email-form"><a href="#modal" rel="js-email-form">info [at] d3mario [dot] com</a></div>
        <div class="details"><a href="https://www.linkedin.com/pub/demario-windom/21/390/855" target="_blank">DeMario Windom</a></div>
        <div class="details"><a href="https://github.com/d3mario" target="_blank">DeMario Windom</a></div>


      <article id ="mission">
        <div id = "left-collumn">
          <h2 rel="email_sent_status"> Thank You!</h2>

          <?php
          $mailSent = true;

          if (isset($_GET["SUCCESS"]))
          {
            echo "<p> Your message was sent successfully</p>";
          }
          else {
            echo "<p>I look forward to working with you and bringing your vision to life! </p>";
          }
          ?>


        </div>
        <div id = "right-collumn">
          <p id="view-services"><a href="testimonies.php">View<span class="samples-text">Testimonies</span></a></p>
          <p id="view-resume"><a href="write-your-testimony.php" >Write<span class="samples-text">Testimony</span></a></p>
        </div>
      </article>
      </div>

    </main>

<div id="modal" rel="js-contact-modal">
  <div class="modal-content ">
    <div id="lb" rel="js-contact-modal">
      <p id="services-heading" rel="js-contact-modal-close"> Send me an email: [x] to close</p>
    </div>
    <form method="POST" action="sendmessage.php" target="_parent" id="emailForm" >
    <table id="contact-email-form">
      <tr>
        <td class="contact-email-form-label">First Name </td>
        <td><input type="text" name="firstName" rel="vistorFirstName" id="firstName" value="" maxlength="60" size="60"></td>
      </tr>
      <tr>
        <td class="contact-email-form-label">Subject </td>
        <td><input type="text"  rel="emailSubject" name="emailSubject" id="emailSubject" value="" maxlength="60" size="60"></td>
      </tr>
      <tr>
        <td class="contact-email-form-label">Email Address </td>
        <td><input type="text"  rel="vistorEmailAddress" name="email" id="email" value="" maxlength="60" size="60"></td>
      </tr>
      <tr>
        <td class="contact-email-form-label">Message </td>
        <td><textarea name="emailmsg" rel="vistorEmailMessage" id="emailMessage" class="contact-email-form-label" form="emailForm" > </textarea></td>
      </tr>
      <tr>
        <td> </td>
        <td><button name="submit" id="submit" rel="submitEmailButton">Submit </button>
        </td>
      </tr>
    </table>
    </form>
    <div id="lb-footer"></div>
  </div>

</div>
<?php
include(SHARED_PATH .'/footer.php');
?>
