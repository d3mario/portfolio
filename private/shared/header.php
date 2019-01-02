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
<div id="container">
    <header>
        <div class="center">
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
        </div>
    </header>

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





