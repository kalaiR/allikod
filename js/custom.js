$(document).ready(function () {
    // alert("ready");
    $("li").click(function () {
        var id = $(this).attr("id");

        $('#' + id).siblings().find(".active").removeClass("active");
            //                       ^ you forgot this
        $('#' + id).addClass("active");
        localStorage.setItem("selectedolditem", id);
    });

    var selectedolditem = localStorage.getItem('selectedolditem');
    if (selectedolditem != null) {
        $('#' + selectedolditem).siblings().find(".active").removeClass("active");
        //                                        ^ you forgot this
        $('#' + selectedolditem).addClass("active");
    }

    // Show and Hide Search Div
    $(".slidingDiv").hide();
    
    $('.view_communication').click(function(){
          $(".slidingDiv").slideToggle();
    });
    
});

// $(window).load(function(){
//     if($('.text_short').length >=1){
        
        
//     }
// });




