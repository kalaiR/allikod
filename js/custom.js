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
//     if($('.text_short').length >0){
//         $( ".text_short" ).each(function() {
//   $( this ).parent( "com_adr" );
// });
       // shorttext_val = $(".text_short").text();
       // alert(shorttext_val.length);
       // if(shorttext_val.length>=10){
       //  alert("test");
       //      $(".view_icon").show();
       // }

        
        
    }
});




