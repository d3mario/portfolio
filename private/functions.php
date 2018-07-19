<?php

function getNavigation()
{
    global $connection;
    // Perform database query
    $query = "SELECT * FROM pages";
    $result_set = mysqli_query($connection, $query);

    // Test if query succeeded
    if (!$result_set) {
        exit("Database query failed.");
    }

    // Use returned data (if any)
    while ($navigation = mysqli_fetch_assoc($result_set)) {
        echo $navigation["name"] . "<br />";
    }
    mysqli_free_result($result_set);

}

//function getNavigationLinkStatus($pageTitle)
//{
//    $homePageTitle = 'Web Developer | DeMario Windom';
//    $portfolioPageTitle = 'Portfolio | DeMario Windom';
//    $aboutPageTitle = 'About | DeMario Windom';
//    $contactPageTitle = 'Contact | DeMario Windom';
//    global $linkStatus;
//
//    switch ($pageTitle)
//
//    {
//
//        case 'Timeless LLC | Home':
//            $linkStatus .= ' active';
//            echo $linkStatus;
//            break;
//
//        case 'Timeless LLC | About':
//            $linkStatus .= ' active';
//            echo $linkStatus;
//            break;
//
//        case 'Timeless LLC | Services':
//            $linkStatus .= ' active';
//            echo $linkStatus;
//            break;
//
//        case 'Timeless LLC | Contact':
//            $linkStatus .= ' active';
//            echo $linkStatus;
//            break;
//    }
//
//
//}
function getPage($id)
{
    global $connection;
    $query = 'SELECT * FROM projects ';
    $query .= 'WHERE id='.$id.'';
    //echo $query;
    $result_set = mysqli_query($connection, $query);

    // Test if query succeeded
    if (!$result_set) {
        exit("Database query failed.");
    }

    // Use returned data (if any)
    while ($page = mysqli_fetch_assoc($result_set)) {
        echo $page["name"] . "<br />";
    }
    mysqli_free_result($result_set);

}

function getClients()
{
    global $connection;
    $query = 'SELECT * FROM projects WHERE ';
    $query .= 'id !=112 ORDER BY project_type ASC';

    $result_set = mysqli_query($connection, $query);

    // Test if query succeeded
    if (!$result_set) {
        exit("Database query failed.");
    }

    // Use returned data (if any)
    while ($row = mysqli_fetch_assoc($result_set))
    {
        echo "<div class=\"portfolio-work-wrapper\">";
        echo "<a href=\"case-study.php?page=".$row['id']."\"> <img class=\"website-comps\" src=\"images/".$row['portfolio-thumbnail']."\" alt=\"".$row['portfolio-thumbnail-alt-description'].""."\"> </a>";
        echo "<h4 data-type=".$row['project_type']."><a href=\"case-study.php?page=".$row['id']."\"> " .$row['name']."</a></h4>";
        echo "<p data-type=\"showAll\"> ".$row['portfolio-thumbnail-alt-description']."</p>";
        echo "</div>";
    }

    // release data
    mysqli_free_result($result_set);

}





?>