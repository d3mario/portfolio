<?php
include '../private/initalize.php' ;
$title = "Portfolio ";
include(SHARED_PATH .'/header.php');
?>
    <main id="content-area">
        <h1 class ="portfolio-question-header"> Do you agree</h1>
        <h2 class ="question">Quality Material Should Represent Your Brand?</h2>
        <div id="category-tabs">

            <form id="portfolio-pages">

                <table id="portfolio-categories">

                    <tr>
                        <td>
                                <input type="checkbox" id="allCheckBoxes" checked="checked">
                        </td>
                        <td>
                            <label for="allCheckBoxes">
                                View All
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="developmentCheckBox" checked="checked" />
                        </td>
                        <td>
                            <label for="developmentCheckBox">
                                Development
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="uxDesignCheckBox" checked="checked" />
                        </td>
                        <td>
                            <label for="uxDesignCheckBox">
                                UX Design
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="printDesignCheckBox" checked="checked">
                        </td>
                        <td>
                            <label for="printDesignCheckBox">
                                    Print
                            </label>
                        </td>
                    </tr>
                </table>

<!--                <span class="category" > Show Categories</span>
               <input type="checkbox" id="allCheckBoxes" checked="checked" />
                <label class="category" for="allCheckBoxes">View All </label>
                <input type="checkbox" id="developmentCheckBox" checked="checked" />
                <label class="category" for="developmentCheckBox">Development </label>
                <input type="checkbox" id="uxDesignCheckBox" checked="checked"/>
                <label class="category" for="uxDesignCheckBox">UX Design</label>
                <input type="checkbox" id="printDesignCheckBox" checked="checked"/>
                <label class="category" for="printDesignCheckBox">Print</label>-->
            </form>
      	</div>

        <div id="portfolio-body-wrapper">
            <?php
            getClients();
            ?>
        </div>

    </main>
<?php
include(SHARED_PATH .'/footer.php');
?>
