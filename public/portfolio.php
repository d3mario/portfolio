<?php
include '../private/initalize.php' ;
$title = "Portfolio ";
include(SHARED_PATH .'/header.php');
?>
<main class="xl:p-16">
<div class="flex items-center">
      <img class="w-10 h-10 rounded-full mr-4" src="../public/images/sprite-icons.png" alt="Avatar of Jonathan Reinink">
      <div class="text-sm">
      <h1 class ="portfolio-question-header"> Do you agree</h1>
      <h2 class ="question">Quality Material Should Represent Your Brand?</h2>
      </div>
    </div>

        <div id="category-tabs">

            <form id="portfolio-pages">

                <table id="portfolio-categories">

                    <tr>
                        <td>
                                <input class="mr-2 leading-tight" type="checkbox" id="allCheckBoxes" checked="checked">
                        </td>
                        <td>
                            <label for="allCheckBoxes">
                                View All
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="mr-2 leading-tight"  type="checkbox" id="developmentCheckBox" checked="checked" />
                        </td>
                        <td>
                            <label for="developmentCheckBox">
                                Development
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="mr-2 leading-tight" type="checkbox" id="uxDesignCheckBox" checked="checked" />
                        </td>
                        <td>
                            <label for="uxDesignCheckBox">
                                UX Design
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="mr-2 leading-tight" type="checkbox" id="printDesignCheckBox" checked="checked">
                        </td>
                        <td>
                            <label for="printDesignCheckBox">
                                    Print
                            </label>
                        </td>
                    </tr>
                </table>

            </form>
      	</div>

    <div class="flex flex-wrap mb-4">
            <?php
            getClients();
            ?>
        </div>

    </main>
<?php
include(SHARED_PATH .'/footer.php');
?>
