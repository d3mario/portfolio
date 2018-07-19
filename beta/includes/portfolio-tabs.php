<div id="portfolio-body-wrapper">
    <?php
    $result = $mysqli->query("SELECT * FROM projects WHERE id != 112 ORDER BY project_type ASC ")  or die(mysqli_error());
    while($row = mysqli_fetch_array($result))
    {
        echo "<div class=\"portfolio-work-wrapper\">";
        echo "<a href=\"case-study.php?page=".$row['id']."\"> <img class=\"website-comps\" src=\"images/".$row['portfolio-thumbnail']."\" alt=\"".$row['portfolio-thumbnail-alt-description'].""."\"> </a>";
        echo "<h4 data-type=".$row['project_type']."><a href=\"case-study.php?page=".$row['id']."\"> " .$row['name']."</a></h4>";
        echo "<p data-type=\"showAll\"> ".$row['portfolio-thumbnail-alt-description']."</p>";
        echo "</div>";
    }
    ?>
</div>

</main>
