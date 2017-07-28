$(document).ready(function () {
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


        $('.search_customer').click(function(){
        $(".slidingDiv").slideToggle();
        });

});

