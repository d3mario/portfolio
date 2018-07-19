<?php
if(!isset($pageTitle))
{
    $pageTitle = 'Web Developer | DeMario Windom ';
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
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Style declorations: Personal -->
    <link rel="stylesheet" href="../public/css/layout.css" >
    <link rel="stylesheet" href="../public/css/stylesheet.css">
    <link rel="stylesheet" href="../public/css/large-browser.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
    <link rel="stylesheet" href="../public/css/typography.css">
    <link rel="stylesheet" href="../public/css/list-styles.css">
    <title><?php echo $pageTitle; ?></title>
</head>

<body>
<div id="container">
    <header>
        <nav id="nav">
            <ul>
                <li ><a href="index.php">Home</a></li>
                <li> <a href="portfolio.php">Portfolio </a></li>
                <li> <a href="services.php?page=112">About </a></li>
                <li> <a href="contact.php">Contact </a></li>
            </ul>
        </nav>
    </header>




