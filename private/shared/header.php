<?php
$title;
if(!isset($title))
{
    $title = 'Web Developer | DeMario Windom ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Style declorations: Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- Style declorations: Personal -->
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/layout.css" > -->
    <link rel="stylesheet" href="../stylesheet.css">

    <title><?php echo ($title.'| DeMario Windom'); ?></title>
</head>
<body>
<header>
    <nav class="flex items-center justify-between flex-wrap bg-header p-6">
  <div class="flex items-center flex-no-shrink text-white mr-6">
    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class="font-semibold text-xl tracking-tight">deMario</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-grey-lighter border-grey-light hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="index.php" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lighter hover:text-white mr-4 no-underline">
        home
      </a>
      <a href="about.php" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lighter hover:text-white mr-4 no-underline">
        about
      </a>
      <a href="portfolio.php" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lighter hover:text-white no-underline">
        portfolio
      </a>
      <a href="contact.php" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lighter hover:text-white no-underline">
        contact
      </a>
    </div>
  </div>
        <!-- <div class="center">
            <a href="http://www.d3mario.com"><img src="images/d3mario-logo.png" id ="main-logo" alt="DeMario Windom | Online Portfolio" /></a>
            <button class="hamburger" rel="js-mobile-navigation-toggle" >☰</button>
            <nav id="nav">
                <ul>
                    <li ><a href="index">Home</a></li>
                    <li> <a href="portfolio">Portfolio </a></li>
                    <li> <a href="about">About </a></li>
                    <li> <a href="contact">Contact </a></li>
                </ul>
            </nav>
        </div> -->
    </header>
<div class="container mx-auto .w-full">


    <div id="slide-show">
        <div class="fader1" rel="js-slide-image-01">
            <div class="subtitle-text">
                <h2> Dream &amp Decide</h2>
                <p>Remove the limits &amp; take flight!</p>
            </div>
        </div>
        <div class="fader2" rel="js-slide-image-02">
            <div class="subtitle-text">
                <h2>Design, Develop &amp; Deliver</h2>
                <p>Bringing visions to life!</p>
            </div>
        </div>
    </div>





