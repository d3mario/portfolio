<?php 
include 'head.php';
include 'header.php';
include 'navigation.php'; 
include 'slidder.php' 
?>
<?php
$hair_colors = array (" 
	<li>Highlights</li>
	<li>Low lights </li>
	<li>Retouch </li>
	<li>Color Change*</li>
");
$hair_styling = array ("
	<li> Shampoo &amp; Set</li>
	<li> Blow-dry &amp; curl</li>
	<li> Hair cuts</li>
	<li> Up-do's</li>
	<li> Press &amp; Curls</li>
	<li> Corn-rows</li>

");

$hair_treatment = array 
("
	<li>Perms</li>
	<li>Spiral perms</li>
	<li>Relaxer</li>
	<li>Deep conditioning</li>
	<li>Keratin</li>
");

$hair_extentions = array
("
	<li>Part/sew-in's</li>
	<li>Full/sew-in's</li>
	<li>Hair Fusions</li>
	<li>Micro Link extensions</li>
");

$nail_services = array
("
	<li>Manicures*</li>
	<li>Acrylic nails</li>
	<li>Fill-in of acrylic</li>
	<li>Nail repair</li>
	<li>French manicure</li>
");

?>

<div id="content">
  <div id="inner-wrapper">
    <h2 class="subtitle">Everything Hair &amp; Nails </h2>
    <h3 class="sub-caption">Our <span class="about">Services</span></h3>
    <article class="services">
      <ul>
        <li>
          <h4><a href="#">Hair Color:</a></h4>
        </li>
        <li id="hair-color-icon"><a href="#"> </a></li>
      </ul>
    </article>
    <article class="services">
      <ul>
        <li>
          <h4><a href="#">Hair Styling:</a></h4>
        </li>
        <li id="scissors-icon"><a href="#"> </a></li>
      </ul>
    </article>
    <article class="services">
      <ul>
        <li>
          <h4><a href="#">Hair Treatment:</a></h4>
        </li>
        <li id="hair-chemicals-icon"><a href="#"> </a></li>
      </ul>
    </article>
    <article class="services">
      <ul>
        <li>
          <h4><a href="#">Hair Extentions:</a></h4>
        </li>
        <li id="hair-extentions-icon"><a href="#"> </a></li>
      </ul>
    </article>
    <article class="services">
      <ul>
        <li>
          <h4><a href="#">Nail Services:</a></h4>
        </li>
        <li id="nail-icon"><a href="#"> </a></li>
      </ul>
    </article>
    <img id="divider" src="images/divider.png" alt="divider" />
    <article class="services">
      <ul class="details">
        <?php foreach($hair_colors as $value)
        {
        echo $value;
        } ?>
      </ul>
    </article>
    <article class="services">
      <ul class="details">
        <?php foreach($hair_styling as $value)
        {
        echo $value;
        } ?>
      </ul>
    </article>
    <article class="services">
      <ul class="details">
        <?php foreach($hair_treatment as $value)
        {
        echo $value;
        } ?>
      </ul>
    </article>
    <article class="services">
      <ul class="details">
        <?php foreach($hair_extentions as $value)
        {
        echo $value;
        } ?>
      </ul>
    </article>
    <article class="services">
      <ul class="details">
        <?php foreach($nail_services as $value)
        {
        echo $value;
        } ?>
      </ul>
    </article>
    <article id ="mission">
      <div id = "left-collumn">
        <h4> Our <span class="about">Mission</span></h4>
        <p>Everything Hair & Nails Salon is truly one of a kind.<br>
          We take pride in bring one of the few salons around that <br>
          will not have you waiting for hours to be serviced as was as providing<br>
          you with just about every hair and nail service you could need in one <br>
          place. </p>
        <p class="right-aligned"> 33970 Groesbeck Hwy, Clinton Township MI <br>
          <span class="bold">COME IN FOR YOUR APPOINTMENT</span> </p>
      </div>
      <div id = "right-collumn">
        <p>Everything Hair & Nails Salon is <br>
          family-owned & operated in Clinton Township, MI. <br>
          Other companies may offer similar services, <br>
          but our services are the best, & come with a personal touch . </p>
        <p class="left-aligned"> 586-790-5333 <br>
          <span class="bold">CALL NOW FOR YOUR APPOINTMENT</span> </p>
      </div>
    </article>
  </div>
</div>
<!--</div>
-->

<?php include 'footer.php' ?>
