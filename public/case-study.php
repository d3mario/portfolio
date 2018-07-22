<?php
include ('../private/initalize.php');
$title = "Portfolio ";
include(SHARED_PATH .'/header.php');


$page = isset($_GET['page']) ? $_GET['page'] : '';
$error = isset($_GET['error']);
$view ='';

$client = new Client($page);
$clientName = $client->getClientName();
$clientCaseStudy = $client->getClientCaseStudy();
$clientCaseStudyBrief = $client->getClientCaseStudyBrief();
$clientMethods = array();
$clientMethods = $client->getClientsMethods();
$clientCompositions = $client->getClientCompositonViews();

$clientInfo = array(
    "clientName" => $clientName,
    "clientCaseStudy" => $clientCaseStudy,
    "clientCaseStudyBrief" =>$clientCaseStudyBrief,
);
?>
<div id="content-area">
    <h1 class="portfolio-question-header"> Do you agree</h1>
    <h2 class="case-study-question">Quality Material Should Represent Your Brand?</h2>
    <article id="media-display">
        <div class="content" rel="js-content">
            <div class="item sample1" rel="js-item-0">
                <?php
                foreach($clientCompositions as $comp)
                    ?><a href="#" rel="viewLargeDisplay01"><img class="slide" src=images/<?php echo($comp) ?> alt=" "></a>
            </div>
        </div>
        <p>
            <a rel="servicesProvided" href="#servicesProvided" ?page="">Provided <span class="samples-text" rel="spanText">Services</span></a><a href="" target="_blank">View <span class="samples-text">print work</span></a>
        </p>
    </article>
    <article id="inside">
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
    </article>

</div>
<?php
include(SHARED_PATH .'/footer.php');
?>