<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php'; 
include 'includes/header.php'; 
	
$page = isset($_GET['page']) ? $_GET['page'] : '0';	
if ( $page )
{
$result = mysql_query("SELECT * FROM websites where id = $page")  or die(mysql_error()); 
  while($row = mysql_fetch_array($result))
  {
	  $title = $row['name']."| Testimonies ";
  }
}
else 
	{
		$title = "Testimonies | DeMario Windom";	
		$page = '0';
	}

include 'includes/main-slider-show.php'; 
?>  
        

    <div id="content-area">
        <script>
function formatHeader(){

    if ($(window).width() < 768) {

            $(".testimony-question-header").hide();
			$(".question-header").show();

    }else{
        $(".testimony-question-header").show();
		$(".question-header").hide();
    }

}

//run on document load and on window resize
$(document).ready(function () {

    //on load
    formatHeader();

    //on resize
    $(window).resize(function(){
        formatHeader();
    });

});</script>

      <h1 class ="testimony-question-header"> Do you value</h1>
      <h1 class ="question-header"> Do you value</h1>            
      <h2>Customer Satisfaction as one of your priorities</h2>
      <?php
$result = mysql_query("SELECT * FROM websites where id = $page")  or die(mysql_error()); 
  if ($page > 0)
{ 
  while($row = mysql_fetch_array($result))
  {
	echo "<h3>".$row['name']." Testimony</h3>";
	echo "<article id=\"inside\">";
	echo "<p> ".$row['testimony']."</p>";
	echo "</article>";
	echo "<div id=\"media-display-inside\"> <img src=\"images/".$row['view-01']."\" alt=\"".$row['portfolio-thumbnail-alt-description'].""."\">";
	echo "<p id=\"view-services\">"."<a href=\"case-study.php?page=".$row['id']."\">"."View"."<span class=\"samples-text\">"."Case Study"."</span></a>"."</p>";
	echo "<p id=\"view-resume\">"."<a href=".$row['website']." target=\"_blank\">"."View"."<span class=\"samples-text\">"."Website"."</span></a>"."</p>";	
	echo "</div>";
  }
}
  else
  {
	echo "<h3> DeMario </h3> 
	<article id=\"inside\"><p> Lorem ipsum dolor sit amet, consectetur adi piscing, elit. Quisque volutpat sit amet urna sit amet pharetra. In sed imperdiet enim. Quisque semper magna et dui fermentum lacinia. Vivamus commodo massa in tellus scelerisque, eu faucibus nisl varius.
Int</p></article>";
?>
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
<?php
"<div id=\"media-display-inside\"><div id=\"myCarousel\" class=\"carousel slide\"> 
          <div class=\"carousel-inner\">
            <div class=\"item active\"> <a class=\"modalbox\" href=\"images/brilliance-comp-01.jpg\" title=\"Brilliance \">/<img src=\"images/brilliance-display-01.png\" title=\"Brilliance \"></a>
              <div class=\"carousel-caption\"> </div>
            </div>
            <div class=\"item \"> <a class=\"modalbox\" href=\"images/\" title=\"Brilliance \">/<img src=\"images/brilliance-display-01.png\" title=\"Brilliance \"></a>
              <div class=\"carousel-caption\"> </div>
            </div>
          </div>
          <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a> <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a> </div>      <p id=\"view-services\"><a href=\"testimonies.php?page=105\">View<span class=\"samples-text\">Testimony</span></a></p>
      <p id=\"view-resume\"><a href=\"brilliance/way-high-splash.html\" target=\"_blank\">View<span class=\"samples-text\">Website</span></a></p>      
	</div>";
  }
?>
    </div>
    <?php include 'includes/footer.php'; ?>

