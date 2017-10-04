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

    // $(document).on('submit','.user_login,.reg_formss,.post_success_form,.forgot_forms',function(e) {
    $('.reg_formss,.post_success_form,.forgot_forms').on('submit',function(e) {
    	// e.preventDefault();
        if($(this).find('.bootstrap-select').hasClass('form_inputs')) {
            $(this).find('.bootstrap-select').removeClass('form_inputs');
        }  
        var error = '';
        var error_msg = $(this).find('.val_error');
        var message = '';
       /* Validate Input and Select element */
        $(this).find('.form_inputs').each(function() {
            var this_val = $.trim($(this).val()); 
            var tag_name = $(this).prop("tagName").toLowerCase();
            // alert(tag_name);           
            if(this_val == '') {
                // alert($(this).attr('name'));
                error = 1;
                message ="Please fill "+$(this).data('message');
                $(this).focus();
                // alert(message);
                // alert($(this).attr('name'));
                $(this).addClass('form-field-error');
                return false;
            }
             else {            
                $(this).removeClass('form-field-error');
            }
        });
        /* Validate mobile*/     
        if(error == '') {
            var mobile = $(this).find('.mobile_value');
            if ((/^([0-9-+]{10})+$/.test(mobile.val())) && mobile.length > 0) {
                mobile.removeClass("form-field-error");
                // alert("mobile validation");
            }
            else if (mobile.length > 0) {
                error = 1;
                message = "Enter Valid Mobile Number!";
                mobile.addClass("form-field-error");
            }
        }
         if(error == '') {
            var email = $(this).find('.email_value');
             var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if ((!emailReg.test(email.val())) ) {
                error = 1;
                message = "Enter Valid Email Address!";
                email.addClass("form-field-error");
            }
            else {
                email.removeClass("form-field-error");
            }
        }
		if(error == '') { 
		var age =$('.age_regs').val();
		var ages = $(this).find('.age_regs');
            if(age<=18){
                error = 1;
                message = "Age should be 18 or more";
                ages.addClass("form-field-error");
              }else{
                ages.removeClass("form-field-error");
                // alert("false=>");              
              }
        }
        // /* Validate email exits */
        if(error == '') {
            var email1 = $(this).find('#reg_email2');
            var email = mailcheckuser();                                
              if(email){
                error = 1;
                message = "Email Already Registered !";
                email1.addClass("form-field-error");
              }else{
                email.removeClass("form-field-error");
                // alert("false=>");              
              }
        }
        if($(this).find('input,select,textarea').hasClass('form-field-error')) {
            // if(message == '') {
                // message ="Please fill "+data('message');
            // }
            $('html, body').animate({scrollTop:0},500);
            error_msg.html(message).fadeIn(350);
            return false;
        }
        else {
            error = 0;
            error_msg.fadeOut('fast').html('');
            // alert("success3");
            return true;
        }  
      
    });


/*enduser validation*/
    
        /*  ===========         Basic_Search Form Validation Start     ===================   */
     $(document).on('submit','.basic_search',function(e) {
        if($(this).find('.bootstrap-select').hasClass('form_inputs')) {
            $(this).find('.bootstrap-select').removeClass('form_inputs');
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
            // if(message == '') {
                // // message ="Please Provide All Mandatory Field !";
                // // message ="Please fill "+$(this).data('message');
                // // $(this).focus();
            // }
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
    
    }); 
