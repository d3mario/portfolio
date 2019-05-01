<?php

function getNavigation()
{
    global $connection;
    // Perform database query
    $query = "SELECT * FROM pages";
    $result_set = pg_query($connection, $query);

    // Test if query succeeded
    if (!$result_set) {
        exit("Database query failed.");
    }

    // Use returned data (if any)
    while ($navigation = pg_fetch_assoc($result_set)) {
        echo $navigation["name"] . "<br />";
    }
    pg_free_result($result_set);

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
    $query = 'SELECT * FROM projects';
    $query .= ' INNER JOIN clients ON projects.id = '.$id.'';
    $result_set = $connection->query($query);
    // Test if query succeeded
    if (!$result_set) {
        exit("Database query failed.");
    }

    // Use returned data (if any)
    $page = $result_set->fetch();
//    var_dump($page);
    return $page;
    pg_free_result($result_set);

}

function getClients()
{
    global $connection;
    $query = 'SELECT * FROM projects ';
    $query .= ' INNER JOIN clients ON projects.id = clients.id';
    $result_set = $connection->query($query);
    // Test if query succeeded
    if (!$result_set) {
        var_dump(pg_last_error($connection));
    }
    // Use returned data (if any)
    while ($row = $result_set->fetch())
    {

        $image = JSON_decode($row['images'], true)[0]["cardImage"];
        echo "<div class=\"sm:w-1 md:w-1/3 lg:w-1/4 xl:w-1/3 mb-4 portfolio-work-wrapper\">";
        echo "<a href=\"case-study.php?page=".$row['id']."\"> <img class=\"website-comps\" src=\"images/".$image."\" alt=\"".$row['portfolio-thumbnail-alt-description'].""."\"> </a>";
        echo "<h4 data-type=".$row['project_type']."><a href=\"case-study.php?page=".$row['id']."\"> " .$row['name']."</a></h4>";
        echo "<p data-type=\"showAll\"> ".$row['portfolio-thumbnail-alt-description']."</p>";
        echo "</div>";
    }
    // release data
    pg_free_result($result_set);
}

?>