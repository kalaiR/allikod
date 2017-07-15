 $(document).ready(function() {

    /*  ===========         Registration Form Validation Start     ===================   */
     $(document).on('submit','.reg_form,.post_success_form',function(e) {
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
                message ="Please Provide Valid Information!";
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
       /* Validate email */
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
        /* Check whether the input and select element has error or not */
        if($(this).find('input,select').hasClass('form-field-error')) {
            if(message == '') {
                message ="Please Provide Valid Information!";
            }
            error_msg.addClass('val_error');
            error_msg.html(message).fadeIn(350);
            return false;
        }
        else {
            error = 0;
            error_msg.fadeOut('fast').html('');
            return true;
        }  
     }); // End document
}); // End document ready


