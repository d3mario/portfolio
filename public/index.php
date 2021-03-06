<?php
    include '../private/initalize.php' ;
    $title = "Web Developer";
    include(SHARED_PATH .'/header.php');

//    include 'includes/main-slider-show.php';
 ?>
<main class="xl:p-16">
    <h1 class="text-center"> What do you value</h1>

<div class="sm:inline-flex md:block lg:flex xl:flex">
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a class="no-underline time-management" href="about">Time Management:</a> </div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a class="no-underline customer-satisfaction" href="testimony">Customer Satisfaction:</a> </div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a class="no-underline communication" href="contact">Relationships:</a> </div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a class="no-underline portfolio-icon" href="portfolio">Quality Material:</a> </div>
</div>

    <!-- <article id="introduction">
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

    </article> -->

    

    <div class="sm:inline-flex md:block lg:flex xl:flex">
    <div class="p-4 flex flex-col justify-between leading-normal xl:w-2/5">
    <div class="mb-8">
      <div class="text-black font-bold text-xl mb-2">Working for you. Here for you. </div>
      <p class="antipasto text-grey-darker text-base">As your multimedia specialist it is with my greatest pleasure to maintain the highest level of excellence,
            integrity and respect for you and your brand while communicating to the prospective audience with creative
            material!</p>
        <p class="text-grey-darker"><a class="no-underline text-blue-darkest" href="portfolio.php" >View <span class="bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full" rel="spanText">Samples</a></span></p>
    </div>
    
  </div>
  <div class="h-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center xl:w-2/5" style="background-image: url('images/mobile-mod-center/images/mobile-mod-center-display-01.png')" title="Woman holding a mug">
    </div>
    

</div>


</main>

<?php include '../private/shared/footer.php'; ?>
</div>

