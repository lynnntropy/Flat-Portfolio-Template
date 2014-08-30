$(document).ready(function() {

    $("#about-me-tab").click(function() {

        console.log("about me tab clicked!");

        switchTab(".about-me");

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
});

function switchTab(tabClass)
{
    var totalFadeDuration = 250; // in ms

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