function mailcheckuser(){        
    if($("#reg_email2").val()){
                    var data = {};
                    data[csrf_name] = csfrData[csrf_name];
                    data['email'] = $("#reg_email2").val();
                    $.ajax({
                        url: baseurl+"register_mailcheck",
                        data: data,
                        type: "post",
                        async: false,
                        success: function(results_array){
                            // alert(JSON.stringify(results_array));
                            if(results_array!="1"){
                                ajx_output = 1;
                                // alert("ajax-fasle");
                                // $("#register_email-error").html(" Email Already Registered ");
                                return ajx_output;      
                            }else{
                                ajx_output = 0;
                                // alert("ajax-true");
                                return ajx_output;      
                            }
                        }
                    });
                    return ajx_output;
            }
}

$(document).ready(function() {
        var height = '';
        var width = '';

    /*  ===========         Registration Form Validation Start     ===================   */
     $(document).on('submit','.reg_form,.post_success_form,.form_inner,.user_login,.forgot_form',function(e) {
       // // alert("linked");
        // if($(this).find('.bootstrap-select').hasClass('form_inputs')) {
            // $(this).find('.bootstrap-select').removeClass('form_inputs');
        // }       
        // var error = '';
        // var error_msg = $(this).find('.val_status');
        // var message = '';
        // $('.val_error').css('display','none');
        // /* Validate Input and Select element */
        // $(this).find('.form_inputs').each(function() {
            // var tag_name = $(this).prop("tagName").toLowerCase();
            // var this_val = $.trim($(this).val()); 
            // // alert(this_val);           
            // if(this_val == '') {
                // // alert($(this).attr('name'));
                // error = 1;
                // message ="Please Provide Valid Information!";
                // $(this).addClass('form-field-error');
                // if(tag_name == "select") {
                     // $(this).addClass('form-field-error');
                // }
            // }
             // else {            
                // $(this).removeClass('form-field-error');
                // if(tag_name == "select") {
                    // $(this).removeClass('form-field-error');
                // }
            // }
        // });
        // /* Validate mobile*/     
        // if(error == '') {
            // var mobile = $(this).find('.mobile_value');
            // if ((/^([0-9-+]{10})+$/.test(mobile.val())) && mobile.length > 0) {
                // mobile.removeClass("form-field-error");
            // }
            // else if (mobile.length > 0) {
                // error = 1;
                // message = "Enter Valid Mobile Number!";
                // mobile.addClass("form-field-error");
            // }
        // }
       // // /* Validate email */
        // if(error == '') {
            // var email = $(this).find('.email_value');
            // if ((!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) && email.length > 0) {
                // error = 1;
                // message = "Enter Valid Email Address!";
                // email.addClass("form-field-error");
            // }
            // else {
                // email.removeClass("form-field-error");
            // }
        // }
// 
        // // /* Validate email exits */
        // if(error == '') {
            // var email1 = $(this).find('#reg_email2');
            // var email = mailcheckuser();                                
              // if(email){
                // error = 1;
                // message = "Email Already Registered !";
                // email1.addClass("form-field-error");
              // }else{
                // email.removeClass("form-field-error");
                // // alert("false=>");              
              // }
        // }

       //  /* Image Upload on Submit*/ 
            if($(this).hasClass('post_success_form')){
                if($("#uploadedfile")[0].files[0]){
                    var file_size = $("#uploadedfile")[0].files[0].size;
                    var ext = $("#uploadedfile").val().split('.').pop().toLowerCase();
                    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
                        error = 1;
                        message = "Invalid extension, only gif, png, jpg, jpeg are allowed";
                        $("#uploadedfile").addClass("form-field-error");
                    }
                    else if (width > 350 || height > 300) {
                        error = 1;
                        message = "Upload image height and width below 300 X 350";
                        $("#uploadedfile").addClass("form-field-error");
                    }
                    else if (file_size > 1000000) {
                        error = 1;
                        message = "Upload image size less than 1 MB";
                        $("#uploadedfile").addClass("form-field-error");
                    }
                    else{
                        $("#uploadedfile").removeClass("form-field-error");
                    } 
                }
            }
        /* Check whether the input and select element has error or not */
        if($(this).find('input,select').hasClass('form-field-error')) {
            // alert("message===>"+message);
            if(message == '') {
                message ="Please Provide All Mandatory Field !";
            }
            error_msg.addClass('val_error');
            error_msg.html(message).fadeIn(350);
            return false;
        }
        else {
            error = 0;
            error_msg.fadeOut('fast').html('');
            // alert("success");
            return true;
        }        
  }); // End document
  $(".image_act").on('change',function(){
        //Get reference of FileUpload.
        var fileUpload = $(this)[0];
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
            //Initiate the JavaScript Image object.
            var image = new Image();
            //Set the Base64 string return from FileReader as source.
            image.src = e.target.result;
            image.onload = function () {
                //Determine the Height and Width.
                height = this.height;
                width = this.width;
            };
          }
        }
    });
});
      

    
        /*  ===========         Basic_Search Form Validation Start     ===================   */
     $(document).on('submit','.basic_search',function(e) {
        if($(this).find('.bootstrap-select').hasClass('form_inputs')) {
            $(this).find('.bootstrap-select').removeClass(' ');
        }       
        var error = '';
        var error_msg = $(this).find('.val_status');
        var message = '';
        $('.val_error').css('display','none');
        /* Validate Input and Select element */
        $(this).find('.form_inputs').each(function() {
            var tag_name = $(this).prop("tagName").toLowerCase();
            var this_val = $.trim($(this).val()); 
            // alert(this_val);           
            if(this_val == '') {
                // alert($(this).attr('name'));
                error = 1;
                // message ="Please Provide Valid Information!";
                message ="Please fill "+$(this).data('message');
                $(this).focus();
                $(this).addClass('form-field-error');
                return false;
                if(tag_name == "select") {
                     $(this).addClass('form-field-error');
                }
            }
             else {            
                $(this).removeClass('form-field-error');
                if(tag_name == "select") {
                    $(this).removeClass('form-field-error');
                }
            }
        });
       //  /* Validate mobile*/     
       //  if(error == '') {
       //      var mobile = $(this).find('.mobile_value');
       //      if ((/^([0-9-+]{10})+$/.test(mobile.val())) && mobile.length > 0) {
       //          mobile.removeClass("form-field-error");
       //      }
       //      else if (mobile.length > 0) {
       //          error = 1;
       //          message = "Enter Valid Mobile Number!";
       //          mobile.addClass("form-field-error");
       //      }
       //  }
       // /* Validate email */
       //  if(error == '') {
       //      var email = $(this).find('.email_value');
       //      if ((!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) && email.length > 0) {
       //          error = 1;
       //          message = "Enter Valid Email Address!";
       //          email.addClass("form-field-error");
       //      }
       //      else {
       //          email.removeClass("form-field-error");
       //      }
       //  }
       //  /* Image Upload on Submit*/ 
       //      if($(this).hasClass('post_success_form')){
       //          if($("#image_couple")[0].files[0]){
       //              var file_size = $("#image_couple")[0].files[0].size;
       //              var ext = $("#image_couple").val().split('.').pop().toLowerCase();
       //              if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
       //                  error = 1;
       //                  message = "Invalid extension, only gif, png, jpg, jpeg are allowed";
       //                  $("#image_couple").addClass("form-field-error");
       //              }
       //              else if (width > 350 || height > 300) {
       //                  error = 1;
       //                  message = "Upload image height and width below 300 X 350";
       //                  $("#image_couple").addClass("form-field-error");
       //              }
       //              else if (file_size > 100000) {
       //                  error = 1;
       //                  message = "Upload image size less than 1 MB";
       //                  $("#image_couple").addClass("form-field-error");
       //              }
       //              else{
       //                  $("#image_couple").removeClass("form-field-error");
       //              } 
       //          }
       //      }
         /* Check whether the input and select element has error or not */
        if($(this).find('input,select').hasClass('form-field-error')) {
            if(message == '') {
                // message ="Please Provide All Mandatory Field !";
                // message ="Please fill "+$(this).data('message');
                // $(this).focus();
            }
            error_msg.addClass('val_error');
            error_msg.html(message).fadeIn(350);
            return false;
        }
        else {
            error = 0;
            error_msg.fadeOut('fast').html('');
            // alert("succes");
            return true;
        }  
     }); // End document

    //      $(".image_act").on('change',function(){
    //     //Get reference of FileUpload.
    //     var fileUpload = $(this)[0];
    //     if (typeof (fileUpload.files) != "undefined") {
    //         //Initiate the FileReader object.
    //         var reader = new FileReader();
    //         //Read the contents of Image File.
    //         reader.readAsDataURL(fileUpload.files[0]);
    //         reader.onload = function (e) {
    //         //Initiate the JavaScript Image object.
    //         var image = new Image();
    //         //Set the Base64 string return from FileReader as source.
    //         image.src = e.target.result;
    //         image.onload = function () {
    //             //Determine the Height and Width.
    //             height = this.height;
    //             width = this.width;
    //         };
    //       }
    //     }
    // }); 
