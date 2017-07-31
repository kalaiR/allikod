$(document).ready(function() {
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

    // Active menu
 $("li").click(function () {
            var id = $(this).attr("id");
            $('#' + id).siblings().find(".active").removeClass("active");
            $('#' + id).addClass("active");
            localStorage.setItem("selectedolditem", id);
        });

        var selectedolditem = localStorage.getItem('selectedolditem');

        if (selectedolditem != null) {
            $('#' + selectedolditem).siblings().find(".active").removeClass("active");
            $('#' + selectedolditem).addClass("active");
        }
    //commented this code on plugin file charisma.js and overwrite some logic here
    $('.datatable').dataTable({
      "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
      "sPaginationType": "bootstrap",
      "bSortable": false, //newly added
      "oLanguage": {
      "sLengthMenu": "_MENU_ records per page"
      }  
    });

    ajax = function (params,action,element){
      params['action'] = action;
      params[csrf_name] = csfrData[csrf_name];
      // alert(JSON.stringify(params));
      $.ajax({
          type : "POST",
          url : admin_baseurl+element.attr('action'),
          dataType : 'json',
          data : params ,
          success: function(res) {
            if(res.error==1) {
                $('.val_error').html("<i class='icon-remove-sign'></i>  "+res.status);
                $('.val_error').fadeIn(500);
                $('.val_error').fadeOut(5000);
            }
              else if(res.error==2) {
                $('.val_error').html();
                element.html(res.output);
                $('.db_status').fadeOut(5000);
            }
          }
      });
    };

//************ Yes button for Delete popup ***********
     $(document).on("click", ".yes_btn_act", function () {
        var myId = $(".modal-body > #vId").val();
        alert(myId);
        form_data = {'table_name':$('.table_name').val(),'field_name':$('.field_name').val(),'id':myId};
        alert(JSON.stringify(form_data)); 
        $.ajax({
           type: "POST",
           url: $('.action').val(),
           data: form_data,
           dataType: 'json',  
           cache: false,
           success: function(data) {    
                if(data == 1){ 
                    $('a[data-id*='+myId+']').parents('tr').remove();
                    $('#myModal1,.modal,.modal-backdrop,.fade').hide();
                    $('.error_msg_del').text("Record Deleted Successfully").show();
                    window.setTimeout(function(){location.reload()},1000);
                }
           }
        });        
    })

    // Delete - Old record
    // $(document).on("click","."+deletebutton,function(){
    //     var id = $(this).data("id");
    //     var form_id = $(this).parents('form').attr('id');
    //     var ajax_data = {};
    //     ajax_data['rid'] = id;
    //     if(id){
    //         confirm_alert("Are you sure want to delete?", function yes() {
    //             ajax(ajax_data,"delete",form_id);
    //         }, function no() {
    //             // do nothing
    //         });
    //     }
    //     else {
    //         alert("Unable to process");
    //     }
    // });
     //************ Yes button for Delete popup End ***********
  
    //************ Start ***********
    $(document).on('submit','.add_form,.edit_form',function(e) {
          form_inputs = $(this).find('.form_inputs');
          var formdata = {};
          form_inputs.each(function() {
              var value = $(this).val();   
              if($(this).attr('type') == 'file') {
                // // var file = $(this)[0].files[0];
                // alert($(this).get(0).files[0]);
                // if(!empty($(this).get(0).files[0])){
                //   echo "if";
                //   // formdata[$(this).attr('name')] = $(this).get(0).files[0];                                          
                // }
                // else
                  formdata[$(this).attr('name')] = "";              
              }
              else {
                if($.isArray(value)) {
                  value = value.toString();
                }
                formdata[$(this).attr('name')] = value;
              }
              // formdata[$(this).attr('name')] = value;
          });
          // alert(JSON.stringify(formdata));
          if($(this).hasClass('edit_form')){
            formdata['rid'] = $(this).data('id');
            action = "update";
          }
          else{
            action = "save";
          }
          // alert(JSON.stringify(formdata));
          ajax(formdata,action,$(this));
          return false;
    });

    //************ End *************
    // $('.update_success_md').
    $('.update_success_md').fadeOut(5000);


    /* Admin Login Form Start */
    $('.admin_login_form').on('submit',function(e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        var this_status = $(this).find('.admin_status');
        $.ajax({
            type : "POST",
            url : $(this).attr('action'),
            data : form_data+'&'+csrf_name+'='+csfrData[csrf_name] ,
            success: function(res) {
                if(res != 'login_success') {
                    this_status.html("<i class='icon-remove-sign' id='admin_error_login'></i>  "+res);
                    this_status.fadeIn(500);
                    // this_status.fadeOut(5000);
                }
                else {
                   window.location.href = admin_baseurl+"dashboard";
                }
            }
        });
    });

    /*Admin customer user edit form Start*/
    $('.customer_edit_form').on('submit',function(e) {
        e.preventDefault();
        var error = '';
        var error_msg = $(this).find('.val_error');
        var message = '';
        /* Validate Input and Select element */
        // $(this).find('.form_inputs').each(function() {
        //     var this_val = $.trim($(this).val()); 
        //     // alert(this_val);           
        //     if(this_val == '') {
        //         // alert($(this).attr('name'));
        //         error = 1;
        //         message ="Please fill all mandatory fields";
        //         $(this).addClass('form-field-error');
        //     }
        //      else {            
        //         $(this).removeClass('form-field-error');
        //     }
        // });
        // Validate Password comparison
        if(error == '' ) {
              if($("#new_pass").val() != $("#confirm_pass").val()) {
                  error = 1;
                  message = "Confirm password didnot match with new password";
                  $("#confirm_pass").addClass("form-field-error");
              }
              else {
                 $("#confirm_pass").removeClass("form-field-error"); 
              } 
        }
        /* Check whether the input and select element has error or not */
        if($(this).find('input,select').hasClass('form-field-error')) {
            if(message == '') {
                message ="Please fill all mandatory fields";
            }
            $('html, body').animate({scrollTop:0},500);
            error_msg.html(message).fadeIn(350);
            return false;
        }
        else {
            error = 0;
            error_msg.fadeOut('fast').html('');
            var formData = new FormData($(this)[0]);
            // formData[csrf_name] = csfrData[csrf_name];
            formData.append(csrf_name,csfrData[csrf_name]);
            formData.append('action',"update");
            formData.append('rid', $(this).data('id'));
            // var formData = $(this).serialize();
            // alert(JSON.stringify(formData)); // It returns empty when stringify json data, but data has been passed
            $.ajax({
               type: "POST",
               url: admin_baseurl+$(this).attr('action'),
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
                      // alert("no error");
                      $('.val_error').html();
                      $(this).html(res.output);
                      $('html, body').animate({scrollTop:0},500);
                      // $('.db_status').fadeOut(10000);
                  }
                }
            });
        }
    });

    /*Admin customer user edit form End*/

});

