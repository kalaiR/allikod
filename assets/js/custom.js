function validate() {
    var output = true;
    // $(".registration-error").html('');
    //     if($("#userdetails-field").css('display') != 'none') {

    //         if(!($("#register_email").val())) {
    //             output = false;
    //             $("#register_email-error").html("Required");
    //         }   
    //         if(!$("#register_email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    //             $("#register_email-error").html("Invalid");
    //             output = false;
    //         }
    //          if(!($("#reg_pass1").val())) {
    //              output = false;
    //              $("#reg_passed_error").html("Required");
    //          } 
    //          if(!($("#reg_con_pass2").val())) {
    //              output = false;
    //              $("#reg_con_error").html("Required");
    //          }    
    //             if($("#reg_pass1").val() != $("#reg_con_pass2").val()) {
    //              output = false;
    //                $("#reg_con_error").html("Password doesn't match");
                  
    //             }
           
              
    //          if(!($("#register_by").val())) {
    //              output = false;
    //              $("#reg_error").html("Required");
    //          }

    //          if(!($("#reg_Nam").val())) {
    //              output = false;
    //              $("#reg_nam_error").html("Required");
    //          } 
    //           if(!($("#gender").val())) {
    //              output = false;
    //              $("#gender_error").html("Required");
    //          } 
    //          if(!($("#marital").val())) {
    //              output = false;
    //              $("#marital_error").html("Required");
    //          }
      
    //     }
    //     if($("#ethnicity-field").css('display') != 'none') {

    //         if(!($("#reg_tim").val())) {
    //              output = false;
    //              $("#tim_error").html("Required");
    //          }
    //           if(!($("#reg_tim").val())) {
    //              output = false;
    //              $("#tim_error").html("Required");
    //          }
    //           if(!($("#mother").val())) {
    //              output = false;
    //              $("#mother_error").html("Required");
    //          }
    //          if(!($("#nakshathra").val())) {
    //              output = false;
    //              $("#nakshathra_error").html("Required");
    //          }
    //          if(!($("#zodiac_sign").val())) {
    //              output = false;
    //              $("#zodiac_sign_error").html("Required");
    //          }
    //     }
    //     if($("#education-field").css('display') != 'none') {

    //          if(!($("#edu").val())) {
    //              output = false;
    //              $("#edu_error").html("Required");
    //          } 
    //          if(!($("#education_detail").val())) {
    //              output = false;
    //              $("#education_detail_error").html("Required");
    //          } 
    //          if(!($("#occupation").val())) {
    //              output = false;
    //              $("#occupation_error").html("Required");
    //          }  
    //          if(!($("#employed_in").val())) {
    //              output = false;
    //              $("#employed_in_error").html("Required");
    //          }
    //          if(!($("#reg_income").val())) {
    //              output = false;
    //              $("#reg_income_error").html("Required");
    //          }  
    //     }
    // if($("#com-field").css('display') != 'none') {
    //     var mobile =$("#reg_mobile").val();
    //     if(!(/^([0-9-+]{10})+$/.test(mobile)) && mobile.length!=10){
    //         output = false;
    //         $("#reg_mobile_error").html("Invalid Number");
    //     }       
    //          if(!($("#reg_fname").val())) {
    //              output = false;
    //              $("#reg_fname_error").html("Required");
    //          }
    //          if(!($("#reg_mname").val())) {
    //              output = false;
    //              $("#reg_mname_error").html("Required");
    //          }
    //          if(!($("#reg_femployment").val())) {
    //              output = false;
    //              $("#reg_femployment_error").html("Required");
    //          } 
    //          if(!($("#reg_memployment").val())) {
    //              output = false;
    //              $("#reg_memployment_error").html("Required");
    //          }   
    //          if(!($("#family_status").val())) {
    //              output = false;
    //              $("#family_status_error").html("Required");
    //          }
    //          if(!($("#family_type").val())) {
    //              output = false;
    //              $("#family_type_error").html("Required");
    //          }  

    //     }
    //     if($("#exceptation-field").css('display') != 'none') {

    //          if(!($("#food").val())) {
    //              output = false;
    //              $("#food_error").html("Required");
    //          }
    //          if(!($("#search_age_from").val())) {
    //              output = false;
    //              $("#search_age_from_error").html("Required");
    //          }

    //     }
    // if($("#horoscope-field").css('display') != 'none') {
       
    //    if(!($("#upload").val())) {
    //              output = false;
    //              $("#upload_error").html("Required");
    //          }
    // }

        return output;
}

function remove(array, property, value) {
    var i, j, cur;
    for (i = array.length - 1; i >= 0; i--) {
        cur = array[i];
        if (cur[property] === value) {
            array.splice(i, 1);
        }
    }
}

$(document).ready(function () {

    var results_array = [];  
    // Add the Rasi on registration Page               
    $('#cont').on('click', '#add_rasi', function(){
            var srasi_val = $('#rasi_name :selected').val();
            var srasi_text = $('#rasi_name :selected').text();
            var sres = $('#box_id :selected').val(); 
            var data={};
              $('.third-row').each(function(){
                    var id=$(this).data('id');
                    var res = id.split("_");                                              
                        if(res[1]==sres){                            
                            img='http://localhost/test/rasi/'+srasi_val+'.png';             
                            $("#"+id).append("<img src="+img+" data-id="+srasi_val+" />");
                            data.key = srasi_val;
                            data.value = res[1];
                            data.text = srasi_text;
                            data.boxid = id;
                        }                    
              });
            results_array.push(data); 
            $("#rasi_name option[value='"+srasi_val+"']").remove();            
            $("#crasi_name").append('<option value="' + data.key + '" data-id="'+data.boxid+'">' + data.text + '</option>');
            // alert(JSON.stringify(results_array));    
    });

    // Remove the Rasi from Registration Page
    $('#cont').on('click', '#remove_rasi', function(){
            var crasi_name = $('#crasi_name :selected').data('id');
            var crasi_val = $('#crasi_name :selected').val();  
            alert(crasi_val);

            var cres = crasi_name.split("_");
            var removeid;          
            //var data={};
            // alert(JSON.stringify(results_array)); 
            //results_array.forEach(function(e){  
                $('.third-row').each(function(){
                    var id=$(this).data('id');
                    var res = id.split("_");                                                       
                    if(cres[1] == res[1]){  
                        // alert($("#"+id).find('[data-id=r_' + res[1] + ']').attr('src'));
                        $("#"+id).find('[data-id=r_' + res[1] + ']').remove();  
                        removeid = crasi_val;                                     
                        // data.key = crasi_name;
                        // data.value = res[1];
                        // data.text = srasi_text;
                        // data.boxid = id;                                    
                    }
                });                                
                // alert('remove'+removeid)
                remove(results_array, "key", removeid);
                    //});
            // alert(JSON.stringify(results_array)); 
            // results_array.push(data); 
    });


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

$("#dob").blur(function(){
    // dob =  $('#dob').val();
    // var today = new Date();    
    // var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    // $('#age').html(age+' years old');

    // var today = new Date(), // today date object
    //   birthday_val = $("#dob").val().split('/'), // input value
    //   birthday = new Date(birthday_val[2],birthday_val[0]-1,birthday_val[1]), // birthday date object
    //   todayYear = today.getFullYear(), // today year
    //   todayMonth = today.getMonth(), // today month
    //   todayDay = today.getDate(), // today day of month
    //   birthdayYear = birthday.getFullYear(), // birthday year
    //   birthdayMonth = birthday.getMonth(), // birthday month
    //   birthdayDay = birthday.getDate(), // birthday day of month
    //   // calculate age
    //   age = (todayMonth == birthdayMonth && todayDay > birthdayDay) ? 
    //         todayYear - birthdayYear : (todayMonth > birthdayMonth) ? 
    //               todayYear - birthdayYear : todayYear - birthdayYear-1;

    // alert("Age: " + age);

});

        // Show and Hide Search Div
    $(".slidingDiv").hide();
    
    $('.view_communication').click(function(){
        if($('.slidingDiv').length == 0){
            if($('.check_payment_status').val() == 1)
                alert("Please renew your account at vallikodimatrimonial.in");
            else
                alert("Please pay at vallikodimatrimonial.in");
        }
    $(".slidingDiv").slideToggle();
});

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



$(window).load(function(){
  var height = $('.img-pane').height();
     var width = $('.img-pane').width();
     $('.img-pane').css({
         'margin-top': -height / 2 + "px",
         'margin-left': -width / 2 + "px"
     });

 });