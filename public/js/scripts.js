/**
 * Created by DeMario on 7/15/2017.
 */
$(function()
{
    var $progressBarPercentage = $("div [rel=max]");
    var $spanText = $("[rel=spanText]");
    var $portfolioTabsLabel = $("[rel=showAll]");
    var $mainSliderImage01 = $("[rel=js-slide-image-01]");
    var $mainSliderImage02 = $("[rel=js-slide-image-02]");
    var $leftButton = $("[rel=js-left-button]");
    var $rightButton = $("[rel=js-right-button]");
    var $caseStudyLeftButton = $("[rel=js-case-study-left-button]");
    var $caseStudyRightButton = $("[rel=js-case-study-right-button]");
    var $emailButton = $("[rel=js-email-form]");
    var $modal = $("[rel=js-modal]");
    var $contactModal = $("[rel=js-contact-modal]");
    var $servicesDisplay = $("[rel=js-service-modal]");
    var $closeContactModal = $("[rel=js-contact-modal-close]")
    //var $emailLink = $("[rel=js-email-form]");
    var dialog;
    var form;
    var $submitEmail = $("[rel=submitEmailButton]");
    var $viewLargeDisplay01 = $("[rel=viewLargeDisplay01]");
    var $viewLargeDisplay02 = $("[rel=viewLargeDisplay02]");
    var $viewLargeDisplay03 = $("[rel=viewLargeDisplay03]");
    var $closeModal = $("#services-heading");
    var $largeModalImage = $("[rel=largeModalImage]");
    var $viewServicesProvided = $("[rel=servicesProvided]");
    var $viewResume = $("[rel=viewResume]");
    var $resumeDisplay = $("[rel=js-resume-modal]");
    var firstImage, secondImage, thirdImage;
    var i = 1;
    var $mobileNavigationToggle = $("[rel=js-mobile-navigation-toggle]");
    var $mobileNavigationPanel= $("[rel=js-mobile-navigation-panel]");


    function fillPercentageBar() {
        var word = $progressBarPercentage;

    }
    $mobileNavigationToggle.on("click", function(){
        $mobileNavigationPanel.slideToggle("swing");
        $(this).toggleClass('open');
        console.log("clicked");
    })

    function getEmailData(e){
        e.stopPropagation();
        e.preventDefault();

        var target = $("#portfolio");
        var xhr = new XMLHttpRequest();
        xhr.open('GET','contact-form.php', true );
        xhr.onreadystatechange = function (){
         console.log('readyState: ' + xhr.readyState);
            if (xhr.readyState == 2) {
                target.html("Loading...");
                console.log('readyState: ' + xhr.readyState);
            }
            if (xhr.readyState == 4 && xhr.status == 200 ){
                $("#portfolio").html(xhr.responseText);
                //target.innerHTML == xhr.responseText;
            }
        }
        xhr.send();
    }


    function hideDiv()
    {
        if ($(window).width() < 768) {
            $(".portfolio-question-header").hide();
            $(".question-header").show();
        } else
            {
            $(".portfolio-question-header").show();
            $(".question-header").hide();
            }
    }
    $(window).resize(function()
    {
        hideDiv();
    });

    $($leftButton).on("click", fadeDisplayItem);
    $($rightButton).on("click", fadeDisplayItem);

    $($caseStudyRightButton).on("click", function(){
        console.log('clicked');
        var $image;
        $image = $(".modal-image").attr("src");
        var end = $image.charAt($image.length-5);
        fadeDisplayItem(end);
    });

    $($caseStudyLeftButton).on("click", function(){
        var $image;
        $image = $(".modal-image").attr("src");
       var end = $image.charAt($image.length-5);
       fadeDisplayItem(end);
    });


    function fadeDisplayItem(attr)
    {
        $(".sample1").fadeToggle(1000);
        //$largeModalImage[i];
        var $image;
        $image = $(".modal-image").attr("src");
        // var end = $image.charAt($image.length-5);
        switch (attr)
        {

            case '1':
                secondImage = $image;
                secondImage = secondImage.replace("01", "02");
                //$(".modal-image").prop("src", $image);
                $(".modal-image").prop("src" , secondImage);
                break;
            case '2':
                firstImage = $image;
                firstImage = firstImage.replace("02", "01");
                // $(".modal-image").removeAttr("src", $image);
                $(".modal-image").prop("src" , firstImage);
                break;
            default:
                console.log("An error occurred");
        }

        //     //$('.list-toggle').click(function() {
        //     var $listSort = $('.list-sort');
        //     if ($listSort.attr('colspan')) {
        //         $listSort.removeAttr('colspan');
        //     } else {
        //         $listSort.attr('colspan', 6);
        //     }
        // });
        //find out what image is showing,
        //if image is 01, replace 01 with 02
        //else replace 0 with 02
        // var $secondImage = $image.replace("01", '0'+i);
        // $(".modal-image").attr("src" , $secondImage);
    }


    function slideShowFader()
    {
        var i;
        console.log("Start");


        window.setInterval(function(){
            $mainSliderImage01.fadeOut(2500);
            // $mainSliderImage02.fadeIn(2000);
            var num =0;
            num = (num + 1 ) % 4;
        }, 5000)

        window.setInterval(function(){
            // $mainSliderImage02.fadeIn(2500);
            $mainSliderImage01.fadeIn(2500);
            var numTo =0;
            numTo = (numTo + 1 ) % 4;
        }, 5000)
    }




    $("#uxDesignCheckBox").change(function (evt)
    {
        toggleCategory("uxdesign", evt.target.checked);
    });
    $("#developmentCheckBox").change(function (evt)
    {
        toggleCategory("developer", evt.target.checked);
    });
    $("#printDesignCheckBox").change(function (evt)
    {
        toggleCategory("printDesign", evt.target.checked);
    });

    $("#allCheckBoxes").change(function (evt)
    {
        if (evt.target.checked)
        {
            $("#uxDesignCheckBox").prop('checked', true);
            $("#developmentCheckBox").prop('checked', true);
            $("#printDesignCheckBox").prop('checked', true);
            toggleCategory("allCheckBoxes",evt.target.checked);
        }
        else{
            $("#uxDesignCheckBox").prop('checked', false);
            $("#developmentCheckBox").prop('checked', false);
            $("#printDesignCheckBox").prop('checked', false);
            toggleCategory("allCheckBoxes",evt.target.checked);
        }
    });
    function toggleCategory(category, checkBoxStatus)
    {
        var querySelector = "";
        switch (category)
        {
            case 'allCheckBoxes':
                querySelector = "p[data-type=showAll]";
                break;
            case 'uxdesign':
                querySelector = "h4[data-type=uxdesign]";
                break;
            case 'developer':
                querySelector = "h4[data-type=development]";
                break;
            case 'printDesign' :
                querySelector = "h4[data-type=print]";
                // $("#tabs-1").html("Print items are displayed");
                break;
        }
        $(".portfolio-work-wrapper").has(querySelector).css('display', checkBoxStatus ? "" : "none");

    }


    $("p#button").on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        var $viewLess = $("p#button").html();
        $("p.case, h5.methods, ul.methods-list").toggle(800);
        switch($viewLess)
        {
            case 'View More':
                $("p#button").html("View Less");
                break;
            case 'View Less':
                $("p#button").html("View More");
                break;
        }

    });


    function hideMobileContent()
    {
        if ($(document).width() < 699 )
        {
            $(".mobile").hide();
            $viewServicesProvided.css("display", "none");

        }
        else {
            $(".mobile").show();
        }
    }

    hideMobileContent();
   // $($emailButton).on("click", getEmailData );
    $viewLargeDisplay01.on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        $modal.css('display', 'block');
    });

    $viewLargeDisplay02.on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        $modal.css('display', 'block');
    });
    $viewLargeDisplay03.on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        $modal.css('display', 'block');
    });

    $emailButton.on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        $contactModal.css('display', 'block');
    });

    // $submitEmail.on("click", function(){
    //     var vistorEmailAddress = $("[rel=vistorEmailAddress]").val();
    //     var vistorEmailMessage = $("[rel=vistorEmailMessage]").val();
    //     var vistorFirstName = $("[rel=vistorFirstName]").val();
    //     // var forum = $("[rel=emailForm]");
    //
    //
    //    alert("Hello " + vistorFirstName + "Thank you for your email" );
    //
    //         $.post("sendmessage.php", {vistorEmailAddress: vistorEmailAddress}, function(data){
    //             var status = $("[rel=email_sent_status]");
    //             status.html(data);
    //
    //
    //         });
    //
    //         $contactModal.fadeToggle(1000);
    // });


    $viewServicesProvided.on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        $servicesDisplay.css('display', 'block');

    });


    $viewResume.on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        $resumeDisplay.css('display', 'block');
    });
    // $closeModal.on("click", function(){
    //     $modal.fadeToggle();
    // });

    $servicesDisplay.on("click", function() {
        $servicesDisplay.fadeToggle();
    })

    $resumeDisplay.on("click", function() {
        $resumeDisplay.fadeToggle();
    })
    // $largeModalImage.on("click", function(){
    //     $modal.fadeToggle();
    // });

    $contactModal.on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        $modal.css('display', 'block');
    })
    $modal.on("click", function () {
        $modal.fadeToggle();
    })

    $closeContactModal.on("click", function(){
        $contactModal.fadeToggle();
    })

    window.onload = function ()
    {
        slideShowFader();
        var test = "p[data-type=showAll]";
        $(test).css("display", "none");

        console.log(test);
        fillPercentageBar();

    };



});

