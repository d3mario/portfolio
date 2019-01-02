<?php
    include '../private/initalize.php' ;
    $title = "Web Developer";
    include(SHARED_PATH .'/header.php');

//    include 'includes/main-slider-show.php';
 ?>
<main id="content-area">
    <h1> What do you value</h1>

    <!-- <ul id="valued-icons">
        <li id="time-management"><a href="about.php">Time Management:</a></li>
        <li id="customer-satisfaction"><a href="testimony.php">Customer Satisfaction:</a></li>
        <li id="communication"><a href="contact.php">Great Communication:</a></li>
        <li id="portfolio-sample"><a href="portfolio.php">Quality Material:</a></li>
    </ul> -->
<div class="sm:inline-flex md:block lg:flex xl:flex">
  <div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2"><a class="no-underline" href="about">Time Management:</a> </div>
  <div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2"><a class="no-underline" href="testimony">Customer Satisfaction:</a> </div>
  <div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2"><a class="no-underline" href="contact">Relationships:</a> </div>
  <div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2"><a class="no-underline" href="portfolio">Quality Material:</a> </div>
</div>

    <article id="introduction">
        <h2 class="grey">Working for you!</h2>
        <h2>Here for you!</h2>
        <p>As your multimedia specialist it is with my greatest pleasure to maintain the highest level of excellence,
            integrity and respect for you and your brand while communicating to the prospective audience with creative
            material!</p>
        <p><a class="no-underline text-blue-darkest" href="portfolio.php" >View <span class="bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full" rel="spanText">Samples</a></span></p>
    </article>

    <article id="media-display" rel="servicesProvided">
        <div class="content" rel="js-content">
            <div class="item sample1" rel="js-item-0">
                <img src="images/mobile-mod-center/images/mobile-mod-center-display-01.png" />
            </div>

        </div>

    </article>


</main>

<?php include '../private/shared/footer.php'; ?>
</div>

