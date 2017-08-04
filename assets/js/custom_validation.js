{} $(document).ready(function() {
        var height = '';
        var width = '';

    /*  ===========         Registration Form Validation Start     ===================   */
     $(document).on('submit','.reg_form,.post_success_form',function(e) {
      // alert("linked");
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
                message ="Please Provide All Mandatory Field !";
                $(this).addClass('form-field-error');
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
        /* Validate mobile*/     
        if(error == '') {
            var mobile = $(this).find('.mobile_value');
            if ((/^([0-9-+]{10})+$/.test(mobile.val())) && mobile.length > 0) {
                mobile.removeClass("form-field-error");
            }
            else if (mobile.length > 0) {
                error = 1;
                message = "Enter Valid Mobile Number!";
                mobile.addClass("form-field-error");
            }
        }
       // /* Validate email */
        if(error == '') {
            var email = $(this).find('.email_value');
            if ((!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) && email.length > 0) {
                error = 1;
                message = "Enter Valid Email Address!";
                email.addClass("form-field-error");
            }
            else {
                email.removeClass("form-field-error");
            }
        }
       //  /* Image Upload on Submit*/ 
            if($(this).hasClass('post_success_form')){
                if($("#upload_post")[0].files[0]){
                    var file_size = $("#upload_post")[0].files[0].size;
                    var ext = $("#upload_post").val().split('.').pop().toLowerCase();
                    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
                        error = 1;
                        message = "Invalid extension, only gif, png, jpg, jpeg are allowed";
                        $("#upload_post").addClass("form-field-error");
                    }
                    else if (width > 350 || height > 300) {
                        error = 1;
                        message = "Upload image height and width below 300 X 350";
                        $("#upload_post").addClass("form-field-error");
                    }
                    else if (file_size > 100000) {
                        error = 1;
                        message = "Upload image size less than 1 MB";
                        $("#upload_post").addClass("form-field-error");
                    }
                    else{
                        $("#upload_post").removeClass("form-field-error");
                    } 
                }
            }
        /* Check whether the input and select element has error or not */
        if($(this).find('input,select').hasClass('form-field-error')) {
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
});
    //   $(".image_act").on('change',function(){
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

    
        /*  ===========         Basic_Search Form Validation Start     ===================   */
     // $(document).on('submit','.basic_search',function(e) {
     //    if($(this).find('.bootstrap-select').hasClass('form_inputs')) {
     //        $(this).find('.bootstrap-select').removeClass(' ');
     //    }       
     //    var error = '';
     //    var error_msg = $(this).find('.val_status');
     //    var message = '';
     //    $('.val_error').css('display','none');
     //    /* Validate Input and Select element */
     //    $(this).find('.form_inputs').each(function() {
     //        var tag_name = $(this).prop("tagName").toLowerCase();
     //        var this_val = $.trim($(this).val()); 
     //        // alert(this_val);           
     //        if(this_val == '') {
     //            // alert($(this).attr('name'));
     //            error = 1;
     //            message ="Please Provide Valid Information!";
     //            $(this).addClass('form-field-error');
     //            if(tag_name == "select") {
     //                 $(this).addClass('form-field-error');
     //            }
     //        }
     //         else {            
     //            $(this).removeClass('form-field-error');
     //            if(tag_name == "select") {
     //                $(this).removeClass('form-field-error');
     //            }
     //        }
     //    });
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
       //  /* Check whether the input and select element has error or not */
        // if($(this).find('input,select').hasClass('form-field-error')) {
        //     if(message == '') {
        //         message ="Please Provide All Mandatory Field !";
        //     }
        //     error_msg.addClass('val_error');
        //     error_msg.html(message).fadeIn(350);
        //     return false;
        // }
        // else {
        //     error = 0;
        //     error_msg.fadeOut('fast').html('');
        //     alert("succes");
        //     return false;
        // }  
     // }); // End document

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