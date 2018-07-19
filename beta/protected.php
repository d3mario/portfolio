<?php include 'core/init.php'; ?>
<?php $title = "Web Developer, Graphic Designer"; ?>
<?php include 'includes/overall/header.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/main-slider-show.php'; ?>
    <div id="content-area">
      <h1 class ="question-header"> Do you agree </h1>
      <h2 class="question">Testimonies from real people are valuable</h2>
      <h2 class="q2">Enter log in credentials </h2>
      <article id="inside">
        <div id="login-forum">
          <form action="login" method="POST">
            <table class="login-table">
                <tr>
                  <td class="label"><p>Email Address:</p></td>
                  </tr>
                  <tr>
                  <td><input type="text" name="username" id="username" placeholder="Your email address*" /></td>
                </tr>
                <tr>
                  <td class="label"><p>Password:</p> <p><a href="#">Forgot your password?</a></p></td>
                </tr> 
                <tr> 
                  <td><input type="password" name="password" id="password" ></td>
                </tr>
                <tr> </tr>
            </table>
            <input type="submit" id="submit" value="Login" />
          </form>
        </div>
      </article>
  </div>
    <?php include 'includes/footer.php'; ?>

