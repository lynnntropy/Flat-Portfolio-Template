(function(document) {

    $(wrap(document)).ready(function() {

        $("#about-me-tab").click(function() {

            try
            {
                console.log("about me tab clicked!");

                switchTab(".about-me");
            }
            catch (e)
            {

            }

        });

        $("#projects-tab").click(function() {

            console.log("projects tab clicked!");

            switchTab(".projects");

        });


        $("#contact-tab").click(function() {

            console.log("contact tab clicked!");

            switchTab(".contact");

        });

        $("#contact-button").click(function() {

            $("html, body").animate({ scrollTop: 0 }, 750, "easeOutQuad", function() {

                $("paper-tabs")[0].selected = "2";
                $("#contact-tab").click();

            });
        });

//    $("#messageSubmitButton").click(function() {
//
//        // put your message sending code here!
//
//    });

        $(".card-image").hover(function() {

            $(this).parent().find(".image-zoom-hint").addClass("faded-in");

        });

        $(".card-image").mouseleave(function() {

            $(this).parent().find(".image-zoom-hint").removeClass("faded-in");

        });

//    window.addEventListener('polymer-ready', function(e) {
//
//        $(".card-image").hover(function() {
//
//            $(this).parent().find(".image-zoom-hint").addClass("faded-in");
//
//        });
//
//        $(".card-image").mouseleave(function() {
//
//            $(this).parent().find(".image-zoom-hint").removeClass("faded-in");
//
//        });
//
//        $()
//
//    });

        $('.image-card > div > a').magnificPopup({
            type: 'image'
//            mainClass: 'mfp-with-zoom', // this class is for CSS animation below

//            zoom: {
//                enabled: true, // By default it's false, so don't forget to enable it
//
//                duration: 300, // duration of the effect, in milliseconds
//                easing: 'ease-in-out', // CSS transition easing function
//
//                // The "opener" function should return the element from which popup will be zoomed in
//                // and to which popup will be scaled down
//                // By defailt it looks for an image tag:
////                opener: function(openerElement) {
////                    // openerElement is the element on which popup was initialized, in this case its <a> tag
////                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
////                    return openerElement.is('img') ? openerElement : openerElement.find('img');
////                }
//            }
        });


    });

    function switchTab(tabClass)
    {
        var totalFadeDuration = 350; // in ms

        var openPanel = $(".panel-faded-in");

        var classToCheck = tabClass.substring(1);

        console.log("Checking if tab clicked contains class " + classToCheck)
        if (!openPanel.first().hasClass(classToCheck))
        {
            openPanel.removeClass("panel-faded-in");
            openPanel.addClass("panel-faded-out");

            openPanel.fadeTo(totalFadeDuration / 2, 0, function()
            {
                var panelToOpen = $(tabClass);

                panelToOpen.removeClass("inactive-content");
                panelToOpen.addClass("active-content");

                panelToOpen.removeClass("panel-faded-out");
                panelToOpen.addClass("panel-faded-in");

                panelToOpen.css("opacity", "0");
                panelToOpen.fadeTo(totalFadeDuration / 2, 1);

                openPanel.removeClass("active-content");
                openPanel.addClass("inactive-content");
            });
        }
        else
        {
            // clicked the currently selected tab
            // do nothing.

            console.log("Re-selected current tab. Not switching.");
        }
    }

})(wrap(document));

