$(document).ready(function() {

    $(".toggle-accordion").on("click", function() {
        var accordionId = $(this).attr("accordion-id"),
            numPanelOpen = $(accordionId + ' .collapse.in').length;

        $(this).toggleClass("active");

        if (numPanelOpen == 0) {
            openAllPanels(accordionId);
        } else {
            closeAllPanels(accordionId);
        }
    })

    openAllPanels = function(aId) {
        console.log("setAllPanelOpen");
        $(aId + ' .panel-collapse:not(".in")').collapse('show');
    }
    closeAllPanels = function(aId) {
        console.log("setAllPanelclose");
        $(aId + ' .panel-collapse.in').collapse('hide');
    }

});
// $(".card").click(function() {
//         var activeElement = $(this).attr("id");
//         $("#collapse-" + activeElement).find('div').attr("class", "panel-title text-black");
//         $("#arrow-" + activeElement).find('span').attr("class", "sign mbr-iconfont mbri-arrow-up inactive");
//         $("#collapse" + activeElement + "_11").find('div').attr("class", "panel-collapse noScroll collapse show");
//         console.log(activeElement);
//         var i = 1;
//         while(i <= 12) {
//             if(i == activeElement) {
//                 $("#collapse-" + i).find('div').attr("class", "collapsed panel-title text-black");
//                 if($("#arrow-" + i).find('span').attr("class") == "sign mbr-iconfont mbri-arrow-down inactive")
//                     $("#arrow-" + i).find('span').attr("class", "sign mbr-iconfont mbri-arrow-up inactive");
//                 else
//                     $("#arrow-" + i).find('span').attr("class", "sign mbr-iconfont mbri-arrow-down inactive");
//                 $("#collapse" + i + "_11").find('div').attr("class", "panel-collapse noScroll collapse");
//             }
//             i = i + 1;
//         }
//     }
// );