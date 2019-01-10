<?php
include 'core/init.php';
$page = isset($_GET['page']) ? $_GET['page'] : '';
$error = isset($_GET['error']);
$view ='';
if ( 0 < $page && $page != '' )
{
    $result = $mysqli->query("SELECT * FROM projects WHERE id=$page")  or 	pageError();
    while($row = mysqli_fetch_array($result))
    {
        $brief = $row['brief'];
        $case = $row['case-study'];
        $material = $row['project_type'];
        $name = $row['name'];
        $title = $row['name']."| Case Study ";
        $small_views = $row['small_views'];
        $print_small_views = explode(';', $small_views);
        $small_view_results = count($print_small_views);
        $large_views = $row['large_views'];
        $print_large_views = explode(';', $large_views);
        $large_view_results = count($print_large_views);
        $methods = $row['methods'];
        $print_methods = explode('.', $methods);
        $method_results = count($print_methods);
        $name = $row['name'];
        $website = $row['website'];
        $title = $name . " | Case Study ";
    }
    include 'includes/overall/header.php';
    include 'includes/header.php';
    include 'includes/main-slider-show.php';
    ?>
<main class="xl:p-16">

    <?php
    if ( 0 < $page && $page != '' )
    {?>
<div class="flex items-center">
      <img class="w-10 h-10 rounded-full mr-4" src="../public/images/sprite-icons.png" alt="Avatar of Jonathan Reinink">
      <div class="text-sm">
      <h1 class ="portfolio-question-header"> Do you agree</h1>
        <h2 class ="case-study-question">Quality Material Should Represent Your Brand?</h2>
      </div>
    </div>
        <?php

        echo "<article id=\"media-display\">";
echo "<div class=\"content\" rel=\"js-content\">";
echo
        "<div class=\"item sample1\" rel=\"js-item-0\">";
        echo "<a href=\"#\" rel='viewLargeDisplay01'>	<img class=\"slide\" src=\"images/".$print_small_views[0]." \" alt=\"".$row['view-01-alt-description']." \"></a>			</div>";
        if ( $small_view_results > 1)
        {
            echo "<div class=\"item sample2\" rel=\"js-item-2\">";
            echo "<a href=\"#\" rel='viewLargeDisplay02'><img class=\"slide\" src=\"images/".$print_small_views[1]." \" alt=\"".$row['view-01-alt-description']." \"></a></div>";

        }
        else {
            echo "";
        }
        echo "</div>";
        if ( 1 < $small_view_results )
        {
            echo "  <button id=\"prevButton\" rel=\"js-case-study-left-button\" /></button>
<button id=\"nextButton\" rel=\"js-case-study-right-button\" /> </button> ";
        }
        else
        {
            echo '';
        }

        switch ($material)
        {
            case "development":
                $view = "website";
                break;
            case "print":
                $view = "print work";
                break;
        }

        echo "<p><a rel='servicesProvided' href=\"#servicesProvided\" ?page=\"".$row['id']."\" rel=\"group1\">Provided <span class=\"samples-text\" rel='spanText'>"."Services"."</span></a> <a href=\"".$website."\" target=\"_blank\">View <span class=\"samples-text\">"."$view"."</span></a></p>";
        echo "</article>";
        echo "<article id=\"inside\">";
        echo "<h3>".$name."</h3>";
        echo "<p>".$brief."</p><p class=\"case\">".$case."</p>";
        echo "<h5 class=\"methods\">Methods</h5>";
        echo "<ul class=\"methods-list\">";

        for ( $i = 0; $i < $method_results; $i++ )
        {
            echo "<li>". $print_methods[$i]."</li>";
        }
        echo "</ul>";
        echo "<p id=\"button\">View More</p>";
        echo "</article>";


        echo "</div>";
    }

    ?>
    <div id="modal" rel="js-modal">
        <?php
        echo '<img class="modal-image" src="images/'.$print_large_views[0].'" alt="'.$row['view-01-alt-description'].'"rel="largeModalImage'.'" >';
        ?>
    </div>

    <div id="servicesDisplay" rel="js-service-modal">
        <div class="modal-content">
            <div id="lb" rel="js-service-modal">
                <p id="services-heading"> Services that were provided to: <?php echo $name; ?></p>
            </div>

            <?php
            echo  "<table class=\"user-list\">
<thead>
<tr>
<th></th>
<th></th>
<th></th>
</tr>
</thead>";
            if (0 < $page && $page != ''  )
            {
                $result = $mysqli->query("SELECT * FROM projects  where id = $page")  or die(mysqli_error());
                while($row = mysqli_fetch_array($result))
                {
                    $service = $row['service_name'];
                    $print_languages = explode('.', $service);
                    $languages_results = count($print_languages);
                    $servicePercentage = $row['service_percentage'];
                    $print_percentage = explode('.', $servicePercentage);
                    $percentage_results = count($print_percentage);
                    echo "<tbody>";
                    echo "<td colspan=\"2\"><ul class=\"languages\">"	;
                    for ( $i = 0; $i < $languages_results; $i++ )
                    {
                        echo "<tr>";
                        echo "<td class=\"heading\">".$print_languages[$i] ."</td>";
                        echo "<td> <div class=\"progressBar\" rel=\"max $print_percentage[$i]\"><div></div></div></td>";
                        echo "<td>" . $print_percentage[$i]. "%</td>";
                    }
                    echo "<tr>";
                    echo "<td class=\"heading\">LANGUAGES / SOFTWARE </td>";
                    $used_languages = $row['language_software'];
                    $print_languages = explode('.', $used_languages );
                    $languages_results = count($print_languages);
                    echo "<td colspan=\"2\"><ul class=\"languages\">"	;
                    for ( $i = 0; $i < $languages_results; $i++ )
                    {
                        echo "<li><span class=\"samples-text\"> ". $print_languages[$i]."</span></li>  ";
                    }
                    echo "</ul></td>";
                }
            }
            ?>
            </tbody>
            </table>
            <div id="lb-footer"> </div>
        </div>
    </div>
<?php
}
else
{
    $name = "Error";
    $title = "Case Study | DeMario Windom";
    $page = '0';
    include 'includes/overall/header.php';
    include 'includes/header.php';
    include 'includes/main-slider-show.php';
    ?>
<main class="xl:p-16">
        <h1 class ="portfolio-question-header"> Oops!</h1>
        <h2 class ="case-study-question">An error occured....</h2>
</main>
    <?php
}
include 'includes/footer.php'; ?>
