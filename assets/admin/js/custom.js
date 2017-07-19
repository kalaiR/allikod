$(document).ready(function() {

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
});