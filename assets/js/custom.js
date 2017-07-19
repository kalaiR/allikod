$(document).ready(function () {
        // $("li").click(function () {
        //     var id = $(this).attr("id");
        //     $('#' + id).siblings().find(".active").removeClass("active");
        //     $('#' + id).addClass("active");
        //     localStorage.setItem("selectedolditem", id);
        // });

        // var selectedolditem = localStorage.getItem('selectedolditem');

        // if (selectedolditem != null) {
        //     $('#' + selectedolditem).siblings().find(".active").removeClass("active");
        //     $('#' + selectedolditem).addClass("active");
        // }

        $("#next").click(function(){
            var output = validate();
            if(output) {
                var current = $(".highlight");
                var next = $(".highlight").next("li");
                if(next.length>0) {                
                    $("#"+current.attr("id")+"-field").hide();
                    $("#"+next.attr("id")+"-field").show();
                    $("#back").show();
                    $("#finish").hide();
                    $(".highlight").removeClass("highlight");
                    next.addClass("highlight");                                
                    if($(".highlight").attr("id") == 'horoscope') {
                        $("#next").hide();
                        $("#finish").show();                
                    }
                }
            }
        });
        $("#back").click(function(){ 
            var current = $(".highlight");
            var prev = $(".highlight").prev("li");
            if(prev.length>0) {
                $("#"+current.attr("id")+"-field").hide();
                $("#"+prev.attr("id")+"-field").show();
                $("#next").show();
                $("#finish").hide();
                $(".highlight").removeClass("highlight");
                prev.addClass("highlight");
                if($(".highlight").attr("id") == 'userdetails') {
                    $("#back").hide();          
                }
            }
        });

    function validate() {
            var output = true;
            $(".registration-error").html('');
            if($("#userdetails-field").css('display') != 'none') {

                if(!($("#register_email").val())) {
                    output = false;
                    $("#register_email-error").html("Required");
                }   
                // if(!$("#register_email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                //     $("#register_email-error").html("invalid");
                //     output = false;
                // }
                 if(!($("#reg_pass").val())) {
                     output = false;
                     $("#reg_pass_error").html("Required");
                 } 
                 if(!($("#reg_con_pass").val())) {
                     output = false;
                     $("#reg_con_error").html("Required");
                 } 
                 if(!($("#register_by").val())) {
                     output = false;
                     $("#reg_by_error").html("Required");
                 } 
                 if(!($("#reg_Name").val())) {
                     output = false;
                     $("#reg_name_error").html("Required");
                 } 
                  if(!($("#gender").val())) {
                     output = false;
                     $("#gender_error").html("Required");
                 } 
                 if(!($("#marital").val())) {
                     output = false;
                     $("#marital_error").html("Required");
                 }
                 if(!($("#mother").val())) {
                     output = false;
                     $("#mother_error").html("Required");
                 }
                 if(!($("#nakshathra").val())) {
                     output = false;
                     $("#nakshathra_error").html("Required");
                 }
                 if(!($("#luknam").val())) {
                     output = false;
                     $("#luknam_error").html("Required");
                 }
                 if(!($("#zodiac_sign").val())) {
                     output = false;
                     $("#zodiac_sign_error").html("Required");
                 }
                 if(!($("#education").val())) {
                     output = false;
                     $("#education_error").html("Required");
                 } 
                 if(!($("#occupation").val())) {
                     output = false;
                     $("#occupation_error").html("Required");
                 }  
                 if(!($("#employed_in").val())) {
                     output = false;
                     $("#employed_in_error").html("Required");
                 }  
                 if(!($("#resident").val())) {
                     output = false;
                     $("#resident_error").html("Required");
                 }  
                 if(!($("#cur_country").val())) {
                     output = false;
                     $("#cur_country_error").html("Required");
                 } 
                 if(!($("#family_status").val())) {
                     output = false;
                     $("#family_status_error").html("Required");
                 }  
                 if(!($("#family_type").val())) {
                     output = false;
                     $("#family_type_error").html("Required");
                 } 
                 if(!($("#body_type").val())) {
                     output = false;
                     $("#body_type_error").html("Required");
                 } 
                 if(!($("#complexion").val())) {
                     output = false;
                     $("#complexion_error").html("Required");
                 }
                 if(!($("#physical_status").val())) {
                     output = false;
                     $("#physical_status_error").html("Required");
                 }
                 if(!($("#food").val())) {
                     output = false;
                     $("#food_error").html("Required");
                 }
                 if(!($("#search_age_from").val())) {
                     output = false;
                     $("#search_age_from_error").html("Required");
                 }
            }

            return output;
    }


    $('form#userlogin').submit(function() {
        var formData = new FormData(this);
        var this_status = $(this).find('.admin_status');        
        $.ajax({
            type : "POST",
            url : 'login_ajax',
            data : formData,
            async: false,
            success: function(res) {
                if(res != 'login_success') {
                    this_status.html("<i class='icon-remove-sign' id='admin_error_login'></i>  "+res);
                    this_status.fadeIn(500);
                    window.location.href = "base/index";
                }
                else {                   
                   window.location.href = "base/index";
                }
            }
        });
        return false;
    });

//var this_status = $(this).find('.admin_status');  
    // Form Upload for Success Stories //
    $("form#success_stories").submit(function(){
        var formData = new FormData(this);
        $.ajax({
            url: 'success_stories',
            type: 'POST',
            data: formData,
            async: false,
            success: function (data) {
                alert(data)
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });


            
});