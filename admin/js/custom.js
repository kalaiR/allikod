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

        // Nosorting
        $('.nosorting').dataTable({
            "bDestroy": true,
            "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
            "sLengthMenu": "_MENU_ records per page",
            },
            "bSort": false            
        });

}); //Ready function ends

