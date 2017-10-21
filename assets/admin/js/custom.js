// Remove the Result array Values for Horoscope //
function remove(array, property, value) {
  var i,
      j,
      cur;
  for ( i = array.length - 1; i >= 0; i--) {
    cur = array[i];
    if (cur[property] === value) {
      array.splice(i, 1);
    }
  }
}

$(document).ready(function() {
  // Show and Hide Search Div
 $(function(){
  $('.search_customer').click(function() {
  	$(".drop_reset")[0].selectedIndex = 0;
  	$(".drops_reset")[0].selectedIndex = 0;
  	$('.dropdrop').val('').trigger('liszt:updated');
  	 $('.focused,.dob_admin').val('');
    $('.slidingDiv').show('slow');
         
  });
 
  $('.hide_search').click(function(){  
  		var f_age =$('.f_age').val();
        var t_age =$('.t_age').val();
		  if(!f_age && !t_age)
		  {
		  	return true;
		  	
		  }
		  else
		  {
		    if(!f_age )
		    {
		  		alert("please select From age");
		  		return false;
		  	}
		  	else if (!t_age )
		  	{
		  		alert("please select To age");
		  		return false;
		  	}
		  	else if (f_age > t_age)
		  	{
		  		alert("From age must be less than To age");
		  		return false;
		  	}
		  }
		     
  	});
  $('.slidingDivs').click(function(){  
  	$('.slidingDiv').hide('slow'); 
  	});
  	
});
	$(".focused").blur(function (e){
		 if($(this).hasClass('v_id')) {   
		   $('.pro_id').val('');
		   $('.file_id').val('');
		   }
	    if($(this).hasClass('pro_id')) {   
	      $('.v_id').val('');
	      $('.file_id').val('');
	      }
	      if($(this).hasClass('file_id')) {   
	        $('.pro_id').val('');
	        $('.v_id').val('');   
	      }            
});
	$('.filter_act').on('change',function(){
		$('.slidingDiv').hide('slow');
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
	$('img').remove();
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
    $('.customer_edit_form,.add_customer_user').on('submit',function(e) {
        e.preventDefault();
        var error = '';
        var error_msg = $(this).find('.val_error');
        var message = '';
        // Validate Password comparison
        if(error == '' ) {
              if($("#new_pass").val() != $("#confirm_pass").val()) {
                  error = 1;
                  message = "<i class='icon-remove-sign'></i> Confirm password did not match with new password";
                  $("#confirm_pass").addClass("form-field-error");
              }
              else {
                 $("#confirm_pass").removeClass("form-field-error"); 
              } 
        }
        // Elder younger validation
 			  var noofBro =$('#prependedInput1').val();
      	var noofMarBro =$('#prependedInput5').val();
      	var noofSister =$('#prependedInput3').val();
      	var noofMarSister =$('#prependedInput7').val();
      	var noofyBro =$('#prependedInput2').val();
      	var noofyMarBro =$('#prependedInput6').val();
      	var noofySister =$('#prependedInput4').val();
      	var noofyMarSister =$('#prependedInput8').val();
     		// var firstNumber = $('.first').val();
     		// var secondNumber = $('.second').val();
        if(error == '' ) {
             if(!((noofBro >= noofMarBro) && (noofSister >= noofMarSister) && (noofyBro >= noofyMarBro) && (noofySister >= noofyMarSister))){
                  error = 1;
                  message = "<i class='icon-remove-sign'></i> Married brother or sister less than Brother or sister";
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
                      $('.success_result').html(res.output);
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
	$(".dob_admin").keypress(function(event) {
		event.preventDefault();
	});
	
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
       
    $(".income-box,.bro_sis,.mob_num,.valli_id,.man_id,.age_reg,.only_num").keypress(function (e) {
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
$('.bro_sis,.age_reg').keyup( function(e){
    if ($(this).val().length >= 2) { 
        $(this).val($(this).val().substr(0, 2));
    }
});
$('.mob_num').keyup( function(e){
    if ($(this).val().length >= 10) { 
        $(this).val($(this).val().substr(0, 10));
    }
});
     
    //To find height in feet for selected height in cms
    $('.height_act').on('change', function(){
        height_cms = $('.height_act :selected').text();
        $('.feet_act option[data-heightcms*="' + height_cms + '"]').attr("selected","selected");       
    });  

    // Rasi Horoscope - Start //
    var results_array = [];
    // Add the Rasi
    $('#rasi_cont').on('click', '#add_rasi', function() {
      if ($('#rasi_name option').length > 0) {
        var srasi_val = $('#rasi_name :selected').val();
        var srasi_text = $('#rasi_name :selected').text();
        var sres = $('#box_id :selected').val();
        var data = {};
        $('.third-row').each(function() {
          var id = $(this).data('id');
          var res = id.split("_");
          if (res[1] == sres) {
            img = media_url + 'assets/admin/img/rasi/' + srasi_val + '.png';
            $("#" + id).append("<img src=" + img + " data-id=" + srasi_val + " />");
            data.key = srasi_val;
            data.value = res[1];
            data.text = srasi_text;
            data.boxid = id;
          }
        });
        results_array.push(data);
        $("#rasi_name option[value='" + srasi_val + "']").remove();
        $("#crasi_name").append('<option value="' + data.key + '" data-id="' + data.boxid + '">' + data.text + '</option>');
        // alert(JSON.stringify(results_array));
      }
    });

    // Remove the Rasi
    $('#rasi_cont').on('click', '#remove_rasi', function() {
      if ($('#crasi_name option').length > 0) {
        var crasi_name = $('#crasi_name :selected').data('id');
        var crasi_val = $('#crasi_name :selected').val();
        // alert(crasi_val);

        var cres = crasi_name.split("_");
        var removeid;
        //var data={};
        // alert(JSON.stringify(results_array));
        //results_array.forEach(function(e){
        $('.third-row').each(function() {
          var id = $(this).data('id');
          var res = id.split("_");
          if (cres[1] == res[1]) {
            // alert($("#"+id).find('[data-id=r_' + res[1] + ']').attr('src'));
            $("#" + id).find('[data-id=' + crasi_val + ']').remove();
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
      }
    });
    // Rasi Horoscope - End //

    // ASHAM Horoscope - Start //
    var results_array_asham = [];
    // Add the ASHAM
    $('#asham_cont').on('click', '#add_asham', function() {
      if ($('#asham_name option').length > 0) {
        var srasi_val = $('#asham_name :selected').val();
        var srasi_text = $('#asham_name :selected').text();
        var sres = $('#ashambox_id :selected').val();
        var data = {};
        $('.asham-row').each(function() {
          var id = $(this).data('id');
          var res = id.split("_");
          if (res[1] == sres) {
            img = media_url + 'assets/admin/img/rasi/' + srasi_val + '.png';
            $("#" + id).append("<img src=" + img + " data-id=" + srasi_val + " />");
            data.key = srasi_val;
            data.value = res[1];
            data.text = srasi_text;
            data.boxid = id;
          }
        });
        results_array_asham.push(data);
        $("#asham_name option[value='" + srasi_val + "']").remove();
        $("#casham_name").append('<option value="' + data.key + '" data-id="' + data.boxid + '">' + data.text + '</option>');
        // alert(JSON.stringify(results_array));
      }
    });

    // Remove the ASHAM
    $('#asham_cont').on('click', '#remove_asham', function() {
      if ($('#casham_name option').length > 0) {
        var crasi_name = $('#casham_name :selected').data('id');
        var crasi_val = $('#casham_name :selected').val();

        var cres = crasi_name.split("_");
        var removeid;
        //var data={};
        // alert(JSON.stringify(results_array));
        //results_array.forEach(function(e){
        $('.asham-row').each(function() {
          var id = $(this).data('id');
          var res = id.split("_");
          if (cres[1] == res[1]) {
            // alert($("#"+id).find('[data-id=r_' + res[1] + ']').attr('src'));
            $("#" + id).find('[data-id=' + crasi_val + ']').remove();
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
      }
    });
    
    $(document).on('click','.delete_record',function(e){
      $('.delete_act').attr("data-id",$(this).data("id"));
    });
    $(document).on('click','.delete_act',function(e){
      // e.preventDefault();
      var id =$(this).data('id');
      $.ajax({
          type : "POST",
          url : admin_baseurl+"delete_customer_user",
          data : "rid="+id+'&'+csrf_name+'='+csfrData[csrf_name] ,
          dataType : 'json',
          success: function(res) {
            $('#myModal1,.modal,.modal-backdrop,.fade').hide();
            if(res.error==1) {
                $('.val_error').html("<i class='icon-remove-sign'></i>  "+res.status);
                $('html, body').animate({scrollTop:0},500);
                $('.val_error').fadeIn(500);
                $('.val_error').fadeOut(5000);
            }
              else if(res.error==2) {
                alert("Vallikodi ID "+id+" has been deleted");
                location.reload();
            }
          }
      });
    });
    $(document).on('click','.btn-setting',function(e){
      e.preventDefault();
      $('#myModal').modal('show');
    });

});

  
