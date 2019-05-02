<?php 
include 'core/init.php'; 
protect_page();
$title = $user_data['username'] . " | Write your testimony ";
include 'includes/overall/header.php'; 
include 'includes/header.php'; 
include 'includes/main-slider-show.php'; 
?>  

    <div id="content-area">
      <h1 class ="question-header"> Do you value</h1>
      <h2 class="question">Customer Satisfaction as one of your priorities</h2>
      <h2 class="q2"><?php echo $user_data['username']; ?> Testimony</h2>
      <article id="inside">
        <p> Owner: <?php echo $user_data['last_name']; ?></p>
        <div id="testimony-container" >
          <form action="" method="post">
            <table class="testimony-form">
              <tbody>
                <tr>
                  <td><p class="form-text">How did you hear about DeMario</p></td>
                </tr>
                <tr>
                  <td class="question-fields"><select class ="referal" name="referal" size="1">
                      <option value=""></option>
                      <option value="1">Referral </option>
                      <option value="2">DeMario</option>
                      <option value="3">Another Website</option>
                      <option value="4">Other</option>
                    </select></td>
                </tr>
                <tr>
                  <td><p class="form-text" >How would you rate DeMario's time management for your project?</p></td>
                </tr>
                <tr>
                  <td><select class ="referal" name="referal" size="1">
                      <option value=""></option>
                      <option value="1">Outstanding </option>
                      <option value="2">Exceptional</option>
                      <option value="3">Fair</option>
                      <option value="4">Poor</option>
                    </select></td>
                </tr>
                <tr>
                  <td><p class="form-text" >How would you rate your overall experience working with DeMario?</p></td>
                </tr>
                <tr>
                  <td><select class ="referal" name="referal" size="1">
                      <option value=""></option>
                      <option value="1">Outstanding </option>
                      <option value="2">Exceptional</option>
                      <option value="3">Fair</option>
                      <option value="4">Poor</option>
                    </select></td>
                </tr>
                <tr>
                  <td><p class="form-text" >How would you rate your experience communicating with DeMario (was he professional and respectful )</p></td>
                </tr>
                <tr>
                  <td><select class ="referal" name="referal" size="1">
                      <option value=""></option>
                      <option value="1">Outstanding </option>
                      <option value="2">Exceptional</option>
                      <option value="3">Fair</option>
                      <option value="4">Poor</option>
                    </select></td>
                </tr>
                <tr>
                  <td><p class="form-text" >How would you rate the value of the service provided by DeMario </p></td>
                </tr>
                <tr>
                  <td><select class ="referal" name="referal" size="1">
                      <option value=""></option>
                      <option value="1">Outstanding </option>
                      <option value="2">Exceptional</option>
                      <option value="3">Fair</option>
                      <option value="4">Poor</option>
                    </select></td>
                </tr>
                <tr>
                  <td><p class="form-text" >How would you rate the quality of the material DeMario provided </p></td>
                </tr>
                <tr>
                  <td><select class ="referal" name="referal" size="1">
                      <option value=""></option>
                      <option value="1">Outstanding </option>
                      <option value="2">Exceptional</option>
                      <option value="3">Fair</option>
                      <option value="4">Poor</option>
                    </select></td>
                </tr>
                <tr>
                  <td><p class="form-text">How likely are you to recommend DeMario to a friend or colleague </p></td>
                </tr>
                <tr>
                  <td><select class ="referal" name="referal" size="1">
                      <option value=""></option>
                      <option value="1">Extremely likely </option>
                      <option value="2">Likely</option>
                      <option value="3">Not Likely</option>
                      <option value="4">Extremely unlikely</option>
                    </select></td>
                </tr>
                <tr>
                  <td><!--<p class="form-text" >Testimony: </p>--></td>
                </tr>
                <tr>
                  <td><label for="msg" class="form-text">Enter a Message</label>
                    <textarea id="msg" name="msg" class="testimony-text-area"></textarea></td>
                </tr>
                <tr> </tr>
              </tbody>
            </table>
            <input type="submit" id="submit" value="send" />
          </form>
        </div>
      </article>
<script>
function hideDiv(){

    if ($(window).width() < 1024) {

            $("#media-display-inside").fadeOut("slow");

    }else{

        $("#media-display-inside").fadeIn("slow");

    }

}

//run on document load and on window resize
$(document).ready(function () {

    //on load
    hideDiv();

    //on resize
    $(window).resize(function(){
        hideDiv();
    });

});</script>
      
      <div id="media-display-inside"> <img src="images/material-display-inside.png" alt="Mobile Mod Center">
        <p id="view-services"><a href="case-study.php?page=101">View<span class="samples-text">Case Study</span></a></p>
        <p id="view-resume"><a href=# target="_blank">View<span class="samples-text">Website</span></a></p>
      </div>
    </div>
  </div>
<?php include 'includes/footer.php'; ?>
