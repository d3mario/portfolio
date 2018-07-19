<div id="shadowing"></div>
<div id="box">
  <span id="boxtitle"></span>
  <form method="POST" action="sendmessage.php" target="_parent">

    <p>Email adress:
      <input type="text" name="email" id="email" value="" maxlength="60" size="60">
    </p>
      <input type="text" name="emailmsg" value="" id="emailmsg" />
    <p>
      <input type="submit" name="submit">
      <input type="button" name="cancel" value="Cancel" onClick="closebox()">
    </p>
  </form>
</div>
