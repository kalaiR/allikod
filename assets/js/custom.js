var calculateAge = function(birthday) {
    var now = new Date();
    var past = new Date(birthday);
    var nowYear = now.getFullYear();
    var pastYear = past.getFullYear();
    var age = nowYear - pastYear;
 
    return age;
};

function validate() {
    var output = true;
    $(".registration-error").html('');
        if($("#userdetails-field").css('display') != 'none') {

            if(!($("#register_email").val())) {
                output = false;
                $("#register_email-error").html("Required");
            } 
            
            if($("#register_email").val()){
                if(!$("#register_email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#register_email-error").html("Invalid Email Id");
                    output = false;
                     
                }
            }

            if($("#register_email").val()){
                    var data = {};
                    data[csrf_name] = csfrData[csrf_name];
                    data['email'] = $("#register_email").val();
                    $.ajax({
                        url: baseurl+"register_mailcheck",
                        data: data,
                        type: "post",
                        success: function(results_array){
                            alert(JSON.stringify(results_array));
                            if(results_array!=1){
                                output = false;
                                $("#register_email-error").html(" Email Already Registered ");
                            }
                        }
                    });
            }
            
             if(!($("#reg_pass1").val())) {
                 output = false;
                 $("#reg_passed_error").html("Required");
             } 
             if(!($("#reg_con_pass2").val())) {
                 output = false;
                 $("#reg_con_error").html("Required");
             }   

            if($("#reg_pass1").val() != $("#reg_con_pass2").val()) {
             output = false;
               $("#reg_con_error").html("Password doesn't match");
              
            }           
              
             if(!($("#register_by").val())) {
                 output = false;
                 $("#reg_error").html("Required");
             }

             if(!($("#reg_Nam").val())) {
                 output = false;
                 $("#reg_nam_error").html("Required");
             } 
              if(!($("#gender").val())) {
                 output = false;
                 $("#gender_error").html("Required");
             } 
             if(!($("#marital").val())) {
                 output = false;
                 $("#marital_error").html("Required");
             }
      
        }
        if($("#ethnicity-field").css('display') != 'none') {

            if(!($("#reg_tim").val())) {
                 output = false;
                 $("#tim_error").html("Required");
             }
              if(!($("#reg_tim").val())) {
                 output = false;
                 $("#tim_error").html("Required");
             }
              if(!($("#mother").val())) {
                 output = false;
                 $("#mother_error").html("Required");
             }
             if(!($("#nakshathra").val())) {
                 output = false;
                 $("#nakshathra_error").html("Required");
             }
             if(!($("#zodiac_sign").val())) {
                 output = false;
                 $("#zodiac_sign_error").html("Required");
             }
        }
        if($("#education-field").css('display') != 'none') {

             if(!($("#edu").val())) {
                 output = false;
                 $("#edu_error").html("Required");
             } 
             if(!($("#education_detail").val())) {
                 output = false;
                 $("#education_detail_error").html("Required");
             } 
             if(!($("#occupation").val())) {
                 output = false;
                 $("#occupation_error").html("Required");
             }  
             if(!($("#employed_in").val())) {
                 output = false;
                 $("#employed_in_error").html("Required");
             }
             if(!($("#reg_income").val())) {
                 output = false;
                 $("#reg_income_error").html("Required");
             }  
        }
    if($("#com-field").css('display') != 'none') {
        var mobile =$("#reg_mobile").val();
        if(!(/^([0-9-+]{10})+$/.test(mobile)) && mobile.length!=10){
            output = false;
            $("#reg_mobile_error").html("Invalid Number");
        }       
             if(!($("#reg_fname").val())) {
                 output = false;
                 $("#reg_fname_error").html("Required");
             }
             if(!($("#reg_mname").val())) {
                 output = false;
                 $("#reg_mname_error").html("Required");
             }
             if(!($("#reg_femployment").val())) {
                 output = false;
                 $("#reg_femployment_error").html("Required");
             } 
             if(!($("#reg_memployment").val())) {
                 output = false;
                 $("#reg_memployment_error").html("Required");
             }   
             if(!($("#family_status").val())) {
                 output = false;
                 $("#family_status_error").html("Required");
             }
             if(!($("#family_type").val())) {
                 output = false;
                 $("#family_type_error").html("Required");
             }  
        }
        if($("#exceptation-field").css('display') != 'none') {

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

// Remove the Result array Values for Horoscope //
function remove(array, property, value) {
    var i, j, cur;
    for (i = array.length - 1; i >= 0; i--) {
        cur = array[i];
        if (cur[property] === value) {
            array.splice(i, 1);
        }
    }
}

$(document).ready(function() {

    // Rasi Horoscope - Start //
    var results_array = [];     
    // Add the Rasi on registration Page               
    $('#rasi_cont').on('click', '#add_rasi', function(){
            //added if condition only by kalai
            // alert($('#rasi_name option').length);
            if($('#rasi_name option').length > 0){
                var srasi_val = $('#rasi_name :selected').val();
                var srasi_text = $('#rasi_name :selected').text();
                var sres = $('#box_id :selected').val(); 
                var data={};
                  $('.third-row').each(function(){
                        var id=$(this).data('id');
                        var res = id.split("_");                                              
                            if(res[1]==sres){                            
                                img=media_url+'assets/img/rasi/'+srasi_val+'.png';             
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
            }
    });

    // Remove the Rasi from Registration Page
    $('#rasi_cont').on('click', '#remove_rasi', function(){
            var crasi_name = $('#crasi_name :selected').data('id');
            var crasi_val = $('#crasi_name :selected').val();  
            // alert(crasi_val);

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
                        $("#"+id).find('[data-id='+crasi_val+']').remove();  
                        removeid = crasi_val;                                     
                        // data.key = crasi_name;
                        // data.value = res[1];
                        // data.text = srasi_text;
                        // data.boxid = id;                                    
                    }
                });                                
                // alert('remove'+removeid)
                remove(results_array, "key", removeid);
                //newly added by kalai start
                $('#rasi_name').append($('#crasi_name').find('option:selected').clone());
                //end
                $('#crasi_name').find('option:selected').remove();
                    //});
            // alert(JSON.stringify(results_array)); 
            // results_array.push(data); 
    });
    // Rasi Horoscope - End //


    // ASHAM Horoscope - Start //
    var results_array_asham = [];  
    // Add the ASHAM on registration Page               
    $('#asham_cont').on('click', '#add_asham', function(){
            //added if condition only by kalai
            // alert($('#asham_name option').length);
            if($('#asham_name option').length > 0){
                var srasi_val = $('#asham_name :selected').val();
                var srasi_text = $('#asham_name :selected').text();
                var sres = $('#ashambox_id :selected').val();            
                var data={};
                  $('.asham-row').each(function(){
                        var id=$(this).data('id');
                        var res = id.split("_");                                              
                            if(res[1]==sres){                            
                                img=media_url+'assets/img/rasi/'+srasi_val+'.png';             
                                $("#"+id).append("<img src="+img+" data-id="+srasi_val+" />");
                                data.key = srasi_val;
                                data.value = res[1];
                                data.text = srasi_text;
                                data.boxid = id;
                            }                    
                  });
                results_array_asham.push(data); 
                $("#asham_name option[value='"+srasi_val+"']").remove();            
                $("#casham_name").append('<option value="' + data.key + '" data-id="'+data.boxid+'">' + data.text + '</option>');
                // alert(JSON.stringify(results_array)); 
            }   
    });

    // Remove the ASHAM from Registration Page
    $('#asham_cont').on('click', '#remove_asham', function(){
            var crasi_name = $('#casham_name :selected').data('id');
            var crasi_val = $('#casham_name :selected').val();             

            var cres = crasi_name.split("_");
            var removeid;          
            //var data={};
            // alert(JSON.stringify(results_array)); 
            //results_array.forEach(function(e){  
                $('.asham-row').each(function(){
                    var id=$(this).data('id');
                    var res = id.split("_");                                                       
                    if(cres[1] == res[1]){  
                        // alert($("#"+id).find('[data-id=r_' + res[1] + ']').attr('src'));
                        $("#"+id).find('[data-id='+crasi_val+']').remove();  
                        removeid = crasi_val;                                     
                        // data.key = crasi_name;
                        // data.value = res[1];
                        // data.text = srasi_text;
                        // data.boxid = id;                                    
                    }
                });                                
                // alert('remove'+removeid)
                remove(results_array_asham, "key", removeid);
                //newly added by kalai start
                $('#asham_name').append($('#casham_name').find('option:selected').clone());
                //end
                $('#casham_name').find('option:selected').remove();
                    //});
            // alert(JSON.stringify(results_array)); 
            // results_array.push(data); 
    });

    // ASHAM Horoscope - End //

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
        var $birthday = $('#dob').val();
        var age = calculateAge($birthday)
        $('#user_age').val(age);
    });

    $('.search_btn').on('click', '#finish', function(){
        $("#result_horoscope_rasi").val(JSON.stringify(results_array));
        $("#result_horoscope_asham").val(JSON.stringify(results_array_asham));
    });        

    // Show and Hide Search Div
    $(".slidingDiv").hide();

    $('.view_communication').click(function(){
        if($('.slidingDiv').length != 0){
            var data = {};
            var url = window.location.href;
            var profile_id = url.split('viewdetail/');
            data[csrf_name] = csfrData[csrf_name];
            data['user_id'] = log_userid;
            data['profile_id'] = profile_id[1];
            // alert(JSON.stringify(data)); 
            $.ajax({
            url: baseurl+"countprofile_viewed",
            data: data,
            type: "post",
            dataType: 'json',
            success: function(res){        
                // alert(JSON.stringify(res));  
                if(res['status'] == 'hide')
                    alert("Please renew your account or view another profile");
                else
                    $(".slidingDiv").slideToggle(); 
            },
            error: function(jqXHR, textStatus, errorThrown){
                // console.log("The following error occured: "+ textStatus, errorThrown);
                // $('#register_email-error').html(response);
                //     return false;
                }
            });

            // if($('.check_payment_status').val() == 1)
            //     alert("Please renew your account at vallikodimatrimonial.in");
            // else
            //     alert("Please pay at vallikodimatrimonial.in");
        }else{
            // $(".slidingDiv").slideToggle();    
            alert("Please contact vallikodimatrimonial.in");
        }
        
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


    /*Admin customer user edit form Start*/
    $('.customer_edit_form').on('submit',function(e) {
        e.preventDefault();
        // var error = '';
        var error_msg = $(this).find('.val_error');
        var message = '';
        // /* Validate Input and Select element */
        // // $(this).find('.form_inputs').each(function() {
        // //     var this_val = $.trim($(this).val()); 
        // //     // alert(this_val);           
        // //     if(this_val == '') {
        // //         // alert($(this).attr('name'));
        // //         error = 1;
        // //         message ="Please fill all mandatory fields";
        // //         $(this).addClass('form-field-error');
        // //     }
        // //      else {            
        // //         $(this).removeClass('form-field-error');
        // //     }
        // // });
        // // Validate Password comparison
        // if(error == '' ) {
        //       if($("#new_pass").val() != $("#confirm_pass").val()) {
        //           error = 1;
        //           message = "Confirm password didnot match with new password";
        //           $("#confirm_pass").addClass("form-field-error");
        //       }
        //       else {
        //          $("#confirm_pass").removeClass("form-field-error"); 
        //       } 
        // }
        // /* Check whether the input and select element has error or not */
        // if($(this).find('input,select').hasClass('form-field-error')) {
        //     if(message == '') {
        //         message ="Please fill all mandatory fields";
        //     }
        //     $('html, body').animate({scrollTop:0},500);
        //     error_msg.html(message).fadeIn(350);
        //     return false;
        // }
        // else {
            error = 0;
            error_msg.fadeOut('fast').html('');
            var formData = new FormData($(this)[0]);
            // formData[csrf_name] = csfrData[csrf_name];
            formData.append(csrf_name,csfrData[csrf_name]);
            formData.append('action',"update");
            formData.append('rid', $(this).data('id'));
            // var formData = $(this).serialize();
            // alert(JSON.stringify(formData)); // It returns empty when stringify json data, but data has been passed
            rasi = [];
            $('.horo_row div').each(function() {
                if($(this).find('img').length){
                    value = $(this).text();
                    // formData.append('rasi', $(this).text());
                    $(this).find('img').each(function(){
                        rasi.push({'key':$(this).data('id'),'value':value});
                    })                   
                }
            });
            // alert(JSON.stringify(rasi));
            formData.append('rasi', JSON.stringify(rasi));
            amsam = [];
            $('.asham_horo_row div').each(function() {
                if($(this).find('img').length){
                    value = $(this).text();
                    // formData.append('rasi', $(this).text());
                    $(this).find('img').each(function(){
                        amsam.push({'key':$(this).data('id'),'value':value});
                    })                   
                }
            });
            // alert(JSON.stringify(amsam));
            formData.append('amsam', JSON.stringify(amsam));
            $.ajax({
               type: "POST",
               url: baseurl+$(this).attr('action'),
               data: formData,
               async: false,
               contentType: false,
               processData: false,
               dataType: 'json', 
               success: function(res) {  
                  if(res.error==1) {
                      $('.val_error').html("<i class='icon-remove-sign'></i>  "+res.status);
                      $('html, body').animate({scrollTop:0},500);
                      $('.val_error').fadeIn(500);
                      $('.val_error').fadeOut(5000);
                  }
                    else if(res.error==2) {
                      $('.val_error').html("<i class='icon-ok-sign'></i>  "+res.status);
                      $(this).html(res.output);
                      $('html, body').animate({scrollTop:0},500);
                      $('.val_error').fadeIn(500);
                      $('.val_error').fadeOut(5000);
                      // $('.db_status').fadeIn(500);
                      // $('.db_status').fadeOut(5000);
                  }
                }
            });
        // }
    });

    /*Admin customer user edit form End*/

    $(".find_age,#cus_age").keypress(function(event) {event.preventDefault();});

    $('.find_age').on('blur', function(){
        date_value = $(this).val().split('-');
        // dob = $.datepicker.formatDate('dd/mm/yy', new Date(date_value[2],date_value[1]-1,date_value[0]));
        // var today = $.datepicker.formatDate('dd/mm/yy', new Date());
        var dob = new Date(date_value[0],date_value[1]-1,date_value[2]);
        var today = new Date();
        var nowYear = today.getYear();
        var pastYear = dob.getYear();
        var age = nowYear - pastYear;
        $('#cus_age').val(age);
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
/*Image upload in reg page*/
(function($) {
    'use strict';

    var options = {};

    var methods = {
        init: init,
        disable: disable,
        enable: enable,
        reset: reset
    };

    // -----------------------------------------------------------------------------
    // Plugin Definition
    // -----------------------------------------------------------------------------

    $.fn.imageupload = function(methodOrOptions) {
        var givenArguments = arguments;

        return this.filter('div').each(function() {
            if (methods[methodOrOptions]) {
                methods[methodOrOptions].apply($(this), Array.prototype.slice.call(givenArguments, 1));
            }
            else if (typeof methodOrOptions === 'object' || !methodOrOptions) {
                methods.init.apply($(this), givenArguments);
            }
            else {
                throw new Error('Method "' + methodOrOptions + '" is not defined for imageupload.');
            }
        });
    };

    $.fn.imageupload.defaultOptions = {
        allowedFormats: [ 'jpg', 'jpeg', 'png', 'gif' ],
        maxWidth: 250,
        maxHeight: 250,
        maxFileSizeKb: 2048
    };

    // -----------------------------------------------------------------------------
    // Public Methods
    // -----------------------------------------------------------------------------

    function init(givenOptions) {
        options = $.extend({}, $.fn.imageupload.defaultOptions, givenOptions);

        var $imageupload = this;
        var $fileTab = $imageupload.find('.file-tab');
        var $fileTabButton = $imageupload.find('.panel-heading .btn:eq(0)');
        var $browseFileButton = $fileTab.find('input[type="file"]');
        var $removeFileButton = $fileTab.find('.btn:eq(1)');
        var $urlTab = $imageupload.find('.url-tab');
        var $urlTabButton = $imageupload.find('.panel-heading .btn:eq(1)');
        var $submitUrlButton = $urlTab.find('.btn:eq(0)');
        var $removeUrlButton = $urlTab.find('.btn:eq(1)');

        // Do a complete reset.
        resetFileTab($fileTab);
        resetUrlTab($urlTab);
        showFileTab($fileTab);
        enable.call($imageupload);
        
        // Unbind all previous bound event handlers.
        $fileTabButton.off();
        $browseFileButton.off();
        $removeFileButton.off();
        $urlTabButton.off();
        $submitUrlButton.off();
        $removeUrlButton.off();

        $fileTabButton.on('click', function() {
            $(this).blur();
            showFileTab($fileTab);
        });

        $browseFileButton.on('change', function() {
            $(this).blur();
            submitImageFile($fileTab);
        });

        $removeFileButton.on('click', function() {
            $(this).blur();
            resetFileTab($fileTab);
        });

        $urlTabButton.on('click', function() {
            $(this).blur();
            showUrlTab($urlTab);
        });

        $submitUrlButton.on('click', function() {
            $(this).blur();
            submitImageUrl($urlTab);
        });

        $removeUrlButton.on('click', function() {
            $(this).blur();
            resetUrlTab($urlTab);
        });
    }

    function disable() {
        var $imageupload = this;
        $imageupload.addClass('imageupload-disabled');
    }

    function enable() {
        var $imageupload = this;
        $imageupload.removeClass('imageupload-disabled');
    }

    function reset() {
        var $imageupload = this;
        init.call($imageupload, options);
    }

    // -----------------------------------------------------------------------------
    // Private Methods
    // -----------------------------------------------------------------------------

    function getAlertHtml(message) {
        var html = [];
        html.push('<div class="alert alert-danger alert-dismissible">');
        html.push('<button type="button" class="close" data-dismiss="alert">');
        html.push('<span>&times;</span>');
        html.push('</button>' + message);
        html.push('</div>');
        return html.join('');
    }

    function getImageThumbnailHtml(src) {
        return '<img src="' + src + '" alt="Image preview" class="thumbnail" style="max-width: ' + options.maxWidth + 'px; max-height: ' + options.maxHeight + 'px">';
    }

    function getFileExtension(path) {
        return path.substr(path.lastIndexOf('.') + 1).toLowerCase();
    }

    function isValidImageFile(file, callback) {
        // Check file size.
        if (file.size / 1024 > options.maxFileSizeKb)
        {
            callback(false, 'File is too large (max ' + options.maxFileSizeKb + 'kB).');
            return;
        }

        // Check image format by file extension.
        var fileExtension = getFileExtension(file.name);
        if ($.inArray(fileExtension, options.allowedFormats) > -1) {
            callback(true, 'Image file is valid.');
        }
        else {
            callback(false, 'File type is not allowed.');
        }
    }


    function showFileTab($fileTab) {
        var $imageupload = $fileTab.closest('.imageupload');
        var $fileTabButton = $imageupload.find('.panel-heading .btn:eq(0)');

        if (!$fileTabButton.hasClass('active')) {
            var $urlTab = $imageupload.find('.url-tab');

            // Change active tab buttton.
            $imageupload.find('.panel-heading .btn:eq(1)').removeClass('active');
            $fileTabButton.addClass('active');

            // Hide URL tab and show file tab.
            $urlTab.hide();
            $fileTab.show();
            resetUrlTab($urlTab);
        }
    }

    function resetFileTab($fileTab) {
        $fileTab.find('.alert').remove();
        $fileTab.find('img').remove();
        $fileTab.find('.btn span').text('Browse');
        $fileTab.find('.btn:eq(1)').hide();
        $fileTab.find('input').val('');
    }

    function submitImageFile($fileTab) {
        var $browseFileButton = $fileTab.find('.btn:eq(0)');
        var $removeFileButton = $fileTab.find('.btn:eq(1)');
        var $fileInput = $browseFileButton.find('input');
        
        $fileTab.find('.alert').remove();
        $fileTab.find('img').remove();
        $browseFileButton.find('span').text('Browse');
        $removeFileButton.hide();

        // Check if file was uploaded.
        if (!($fileInput[0].files && $fileInput[0].files[0])) {
            return;
        }

        $browseFileButton.prop('disabled', true);
        
        var file = $fileInput[0].files[0];

        isValidImageFile(file, function(isValid, message) {
            if (isValid) {
                var fileReader = new FileReader();

                fileReader.onload = function(e) {
                    // Show thumbnail and remove button.
                    $fileTab.prepend(getImageThumbnailHtml(e.target.result));
                    $browseFileButton.find('span').text('Change');
                    $removeFileButton.css('display', 'inline-block');
                };

                fileReader.onerror = function() {
                    $fileTab.prepend(getAlertHtml('Error loading image file.'));
                    $fileInput.val('');
                };

                fileReader.readAsDataURL(file);
            }
            else {
                $fileTab.prepend(getAlertHtml(message));
                $browseFileButton.find('span').text('Browse');
                $fileInput.val('');
            }

            $browseFileButton.prop('disabled', false);
        });
    }
    function resetUrlTab($urlTab) {
        $urlTab.find('.alert').remove();
        $urlTab.find('img').remove();
        $urlTab.find('.btn:eq(1)').hide();
        $urlTab.find('input').val('');
    }

}(jQuery));


 /* End Image upload in reg page*/
