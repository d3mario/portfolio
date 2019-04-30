<?php
include ('../private/initalize.php');
$title = "Portfolio ";
include(SHARED_PATH .'/header.php');



$page = isset($_GET['page']) ? $_GET['page'] : '';
$error = isset($_GET['error']);
$view ='';

$client = getPage($page);
$image = JSON_decode($client['images'], true);
var_dump($image[0]);
$id = $page['id'];
//$client = new Client($id);
//var_dump($client);
//$clientName = $client->getClientName();
//$clientCaseStudy = $client->getClientCaseStudy();
//$clientCaseStudyBrief = $client->getClientCaseStudyBrief();
//$clientMethods = array();
//$clientMethods = $client->getClientsMethods();
//$clientSmallCompositions = $client->getSmallClientCompositionViews();
//$clientLargeCompositions = $client->getLargeClientCompositionViews();

$clientInfo = array(
    "clientName" => $client['name'],
    "clientCaseStudy" => $client['casestudy']
);
//var_dump($clientInfo);
?>
<main class="xl:p-16">
    <h1 class="portfolio-question-header"> Do you agree</h1>
    <h2 class="case-study-question">Quality Material Should Represent Your Brand?</h2>

    <div class="sm:inline-flex md:block lg:flex xl:flex">
  <div class="text-grey-darker text-left px-4 py-2 m-2"> 

        <h3><?php echo($clientInfo["clientName"]); ?></h3>
        <p><?php echo ($clientInfo["clientCaseStudyBrief"]);?></p>
        <p class="case"><?php echo ($clientInfo["clientCaseStudy"]);?></p>
        <h5 class="methods">Methods</h5>
        <ul class="methods-list">
            <?php
            foreach ($clientMethods as $clientMethodInfo){
                echo('<li>'.$clientMethodInfo.'</li>');
            }?>

        </ul>
        <p id="button">View More</p>
  </div>
  <div class="text-grey-darker px-4 py-2 m-2"> 
  <article id="media-display">
        <div class="content" rel="js-content">
            <?php
            //dowhileloop
            $count = 1;
            foreach($image as $comp)
            {
                $c = $comp["image01"];
                echo (
                "<div class=\"item sample$count\">
                <a href=\"#\" rel=\"viewLargeDisplay0".$count."\"><img class=\"slide\" src=images/\ $c alt=\" \"></a>
            </div>");
                $count++;
            }
            ?>
        </div>
        <?php
        $imageNumber = count($clientSmallCompositions);
            if (1 < $imageNumber )
            {
                echo ("<button id=\"prevButton\" rel=\"js-case-study-left-button\"></button>
                <button id=\"nextButton\" rel=\"js-case-study-right-button\"> </button>");
            }

                ?>
        <p>
            <a rel="servicesProvided" href="#servicesProvided" ?page="">Provided <span class="samples-text" rel="spanText">Services</span></a><a href="" target="_blank">View <span class="samples-text">print work</span></a>
        </p>
    </article>
  </div>
</div>



</div>
    <div id="modal" rel="js-modal">
        <?php

        //$largeImageCount == $count;
        //$largeClientCompositionsViews = $client->getClientCompositonViews();
//        foreach($clientLargeCompositions as $largeComp)
//        {
//            echo ("<img class=\"modal-image\" src=images/$largeComp alt=\" \" rel=\"largeModalImage viewLargeDisplay0\">");
////            $count++;
//        }
                    echo ("<img class=\"modal-image\" src=images/$clientLargeCompositions[0] alt=\" \" rel=\"largeModalImage\">");

        ?>
    </div>
    <div id="servicesDisplay" rel="js-service-modal">
        <div class="modal-content">
            <div id="lb" rel="js-service-modal">
                <p id="services-heading"> Services that were provided to: Mobile Mod Center</p>
            </div>

            <table class="user-list">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead><tbody><tr><td colspan="2"><ul class="languages"></ul></td></tr><tr><td class="heading">Web Design</td><td> <div class="progressBar" rel="max 100"><div></div></div></td><td>100%</td></tr><tr><td class="heading"> Brand Development</td><td> <div class="progressBar" rel="max  100"><div></div></div></td><td> 100%</td></tr><tr><td class="heading">LANGUAGES / SOFTWARE </td><td colspan="2"><ul class="languages"><li><span class="samples-text"> Adobe FireWorks </span></li>  </ul></td>            </tr></tbody>
            </table>
            <div id="lb-footer"> </div>
        </div>
</main>
<?php
include(SHARED_PATH .'/footer.php');
?>