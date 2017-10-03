
$(document).ready(function() {
  // Show and Hide Search Div
 $(function(){
  $('.search_customer').click(function() {
  $('.slidingDiv').show("slow"); 

  });
  $('#myTab').click(function(){  
  $('.slidingDiv').hide(); 
  });
});
        // $(".slidingDiv").hide();
        // $('.search_customer').click(function(){
        // // $(".slidingDiv").slideToggle();
        // $(".slidingDiv").show("slow");
        // });
  
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
// Form Reset
$('.reset').click(function() {
	$( ".checked" ).prop( "checked", false );
	$("span").removeClass("checked");
	$('input').attr('value', '');
   $('.dropdrop').val('').trigger('liszt:updated');
   // $('.checker').get(0).reset();
   // $("#focusedInput_pwd").val('');
});

// $(".reset").click(function () {
    // var ele = $(this).find(':checkbox');
    // if ($(':checked').length) {
      // ele.prop('checked', false);
      // $(this).removeClass('checked');
    // } else {
      // ele.prop('checked', true);
      // $(this).addClass('checked');
    // }
 // });
 
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
                  message = "Confirm password did not match with new password";
                  $("#confirm_pass").addClass("form-field-error");
              }
              else {
                 $("#confirm_pass").removeClass("form-field-error"); 
              } 
        }
        // Elder younger validation
         var noofBro = document.getElementById("prependedInput1").value;
 		var noofMarBro = document.getElementById("prependedInput5").value;
 		var noofSister = document.getElementById("prependedInput3").value;
 		var noofMarSister = document.getElementById("prependedInput7").value;
 		 var noofyBro = document.getElementById("prependedInput2").value;
 		var noofyMarBro = document.getElementById("prependedInput6").value;
 		var noofySister = document.getElementById("prependedInput4").value;
 		var noofyMarSister = document.getElementById("prependedInput8").value;
 		// var firstNumber = $('.first').val();
 		// var secondNumber = $('.second').val();
        if(error == '' ) {
             if(!((noofBro >= noofMarBro) && (noofSister >= noofMarSister) && (noofyBro >= noofyMarBro) && (noofySister >= noofyMarSister))){
                  error = 1;
                  message = "Married brother or sister less than Brother or sister";
                  $("#prependedInput1").addClass("form-field-error");
              }
              else {
                 $("#prependedInput1").removeClass("form-field-error"); 
              } 
        }
        // if(error == '' ) {
             // if(!(noofBro >= noofMarBro)){
                  // error = 1;
                  // message = "It should be less than  brothers";
                  // $("#prependedInput1").addClass("form-field-error");
                  // // alert("podaga");
              // }
              // else {
                 // $("#prependedInput1").removeClass("form-field-error"); 
              // } 
        // }
        // if(error == '' ) {
             // if(!(noofBro >= noofMarBro)){
                  // error = 1;
                  // message = "It should be less than  brothers";
                  // $("#prependedInput1").addClass("form-field-error");
                  // // alert("podaga");
              // }
              // else {
                 // $("#prependedInput1").removeClass("form-field-error"); 
              // } 
        // }
        
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
            formData.append('removed_images', image_array);
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
            if($('#rasi_name option').length > 0){
                $('#rasi_name option').each(function(){
                    rasi.push({'key':$(this).val(),'value':0});
                });
            }
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
            if($('#asham_name option').length > 0){
                $('#asham_name option').each(function(){
                    amsam.push({'key':$(this).val(),'value':0});
                });
            }
            // alert(JSON.stringify(amsam));
            formData.append('amsam', JSON.stringify(amsam));

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
                      // alert(res.output);
                      // $('.val_error').html("<i class='icon-ok-sign'></i>  "+res.status);
                      $('.customer_edit_form').html(res.output);
                      $('html, body').animate({scrollTop:0},500);
                      // $('.val_error').fadeIn(500);
                      // $('.val_error').fadeOut(5000);
                      $('.db_status').fadeOut(10000);
                  }
                }
            });
        }
    });

    /*Admin customer user edit form End*/

    $("#usertype_act").on("change",function(){
      var usertype = $('option:selected',this).val();
      if(usertype == "simple")
        $(".online_user_field").hide();
      else
        $(".online_user_field").show();

    });
    $(".period_monthact").on("change",function(){
      var period_month = $(this).val();
      // alert(period_month);
      // var today = $.datepicker.formatDate('dd/mm/yy', new Date());
      if(period_month == 3){
        var today = new Date();
        var after_threemonth = new Date();
        // var after_threemonth = new Date(today.setMonth(today.getMonth() + 3));
        var after_threemonth = $.datepicker.formatDate('yy-mm-dd', new Date(after_threemonth.setMonth(today.getMonth() + 3)));
        // alert($.datepicker.formatDate('dd/mm/yy', today));
        // alert(after_threemonth);
        $("#cus_paymentstartdate").val($.datepicker.formatDate('yy-mm-dd', today));
        $("#cus_paymentenddate").val(after_threemonth);
        $("#cus_totprofile").val(60);
      }
      else if(period_month == 6){
        var today = new Date();
        var after_sixmonth = new Date();
        // var after_threemonth = new Date(today.setMonth(today.getMonth() + 3));
        var after_sixmonth = $.datepicker.formatDate('yy-mm-dd', new Date(after_sixmonth.setMonth(today.getMonth() + 6)));
        // alert($.datepicker.formatDate('dd/mm/yy', today));
        // alert(after_sixmonth);
        $("#cus_paymentstartdate").val($.datepicker.formatDate('yy-mm-dd', today));
        $("#cus_paymentenddate").val(after_sixmonth);
        $("#cus_totprofile").val(120);
      }
    });
    $(".paymentmode_act").on("change",function(e){
      var paymentmode = $('option:selected',this).val();
      if($('.payment_mode').val() =="not_paid" && paymentmode == "renewal"){
        alert("Could not able to renewal because still this customer is not paid");
        // alert($(this).find("option[value='']").text());
        $(this).find("option[value='']").attr('selected', true);
        $(this).find("option[value='']").siblings("option").removeAttr("selected");
      }
    });
    $(".paymenttype_act").on("change",function(){
      // alert("yes");
      var paymenttype = $(this).val();
      // alert(paymenttype);
    });

  $(".income-box").keyup(function (e) {
    var inc =$(".income-box");
    var key = String.fromCharCode( e.charCode || e.which);
    var income =parseInt($(this).val());
    var come = (inc.get(0).selectionStart - 1);
     $(this).val($(this).val().replace(/[^\d]+/, ""));
      if ( income == '0') {
             $(this).val($(this).val().substr(0, 0));
               
            }
    if(come == '0' && key == '0'){
          $(this).val($(this).val().substr(0, 0));
                    return false;
          }
     if($(this).val().length >= 8) {
        $(this).val($(this).val().slice(0, 8));
        return false;
    }     
  });  
    //get id and store in array for removed images while edit profile
    var image_array = [];
    $('.remove_act').on('click', function(){
        var image_id = $(this).parents("li").find('.cus_img').data('id');
        if ($.inArray(image_id.toString(), image_array) != 0)
            image_array.push(image_id);
    });
       
    $(".bro_sis,.mob_num,.valli_id,.man_id,.age_reg,.only_num").keypress(function (e) {
    // var income =$(this).val();
    // var income =parseInt($(this).val());
    // var s = e.which;
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        return false;
       }
       // var income =$(this).val();
       // if (income<0 && income>100){
       //  return false;
       // }
       // alert(income)   
});
$(".income-box").keypress(function (e) {
		    var inc =$(".income-box");
		    var key = String.fromCharCode( e.charCode || e.which);
		    var come = (inc.get(0).selectionStart - 0);
		    if(come == '0' && key == '0'){
		                    return false;
		       }
		        $(this).val($(this).val().slice(0, 7));
		       	    
		});
$(".ph_num").keyup(function (e) {
		    $(this).val($(this).val().replace(/[^\d , -]+/, ""));
		});
// $('.mob_num,.income-box').keypress(function() {
     
//      check for 3 or greater than 3 characters.
//      If you check for only greater than 3, then it will let
//      you write the fourth character because just before writing,
//      it is not greater than three.
     
//      if($(this).val().length >= 10) {
//         $(this).val($(this).val().substr(0, 10));
//         return false;
//     }
// });
$(".alp").keypress(function(event){
         var ew = event.which;
        if(ew == 32)
            return true;
        if(65 <= ew && ew <= 90)
            return true;
        if(97 <= ew && ew <= 122)
            return true;
        if( ew == 8 || ew == 46 )
        	return true;
        return false;
    });

// var max_chars = 2;
$('.bro_sis,.age_reg').keypress( function(e){
    if ($(this).val().length >= 1) { 
        $(this).val($(this).val().substr(0, 1));
    }
});
$('.mob_num').keypress( function(e){
    if ($(this).val().length >= 10) { 
        $(this).val($(this).val().substr(0, 9));
    }
});
     
    //To find height in feet for selected height in cms
    $('.height_act').on('change', function(){
        height_cms = $('.height_act :selected').text();
        $('.feet_act option[data-heightcms*="' + height_cms + '"]').attr("selected","selected");       
    });  

});

