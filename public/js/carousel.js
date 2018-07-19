/**
 * Created by DeMario on 7/15/2017.
 */
var carousel = (function () {
    var $left,$right,$buttonClicked, $displayImage;

    function scrollImage(event)
    {
        var leftButton = "js-left-button";
        var rightButton = "js-right-button";

        $buttonClicked = $(event.target).attr('rel');

        event.stopPropagation();
        event.preventDefault();
        event.stopImmediatePropagation();

        switch ($buttonClicked)
        {
            case leftButton:
                //toggleFadeClass();
                console.log("The previous button was pressed");
                break;
            case rightButton:
                console.log("The next button was pressed" + $displayImage );
                $displayImage.css({right:"0px"});
                break;
            default:
                console.log("Ooops!");
                break;
        }
    }


    function init()
    {
        $left = $("[rel=js-left-button]");
        $left.on("click", scrollImage);
        $right = $("[rel=js-right-button]");
        $right.on("click", scrollImage);
        $displayImage = $("[rel=js-item-1]");
    }
    return {init: init};
})();

$(document).ready(carousel.init);

