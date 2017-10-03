 $(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('section.ok').offset().top }, 'slow');
      return false;
    });
  });
var calculateAge = function(birthday) {
	var now = new Date();
	var past = new Date(birthday);
	var nowYear = now.getFullYear();
	var pastYear = past.getFullYear();
	var age = nowYear - pastYear;
	return age;
};
// function mailcheckuser(){
// if($("#reg_email2").val()){
// var data = {};
// data[csrf_name] = csfrData[csrf_name];
// data['email'] = $("#reg_email2").val();
// $.ajax({
// url: baseurl+"register_mailcheck",
// data: data,
// type: "post",
// async: false,
// success: function(results_array){
// // alert(JSON.stringify(results_array));
// if(results_array!="1"){
// ajx_output = 1;
// // alert("ajax-fasle");
// $("#register_email-error").html(" Email Already Registered ");
// return ajx_output;
// }else{
// ajx_output = 0;
// // alert("ajax-true");
// return ajx_output;
// }
// }
// });
// return ajx_output;
// }
// }

function reg_mailcheckuser() {
	if ($("#register_email").val()) {
		// alert('here');
		var data = {};
		data[csrf_name] = csfrData[csrf_name];
		data['email'] = $("#register_email").val();
		data['userid'] = $("#quickregister_id").val();
		// alert(data);
		$.ajax({
			url : baseurl + "register_mailcheck",
			data : data,
			type : "post",
			async : false,
			success : function(results_array) {
				// alert(JSON.stringify(results_array));
				if (results_array != "1") {
					ajx_output = false;
					// alert("ajax-fasle");
					// $("#register_email_error").html(" Email Already Registered ");
					//updated above line by kalai on sept 29th
					$("#register_email-error").html(" Email Already Registered ");
					return ajx_output;
				} else {
					ajx_output = true;
					// alert("ajax-true");
					return ajx_output;
				}
			}
		});
		return ajx_output;
	}
}


function reg_validate() {
	var output = true;
	$(".registration-error").html('');
	if ($("#userdetails-field").css('display') != 'none') {
		if (!($("#register_email").val())) {
			output = false;
			$("#register_email_error").html("Required");
			$("#register_email").focus();
		}
		if ($("#register_email").val()) {
			if (!$("#register_email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
				// $("#register_email_error").html("Invalid Email Id");
				//changes the above line by kalai
				$("#register_email-error").html("Invalid Email Id");
				output = false;
				$("#register_email").focus();

			}
		}
		if (!($("#reg_pass1").val() )) {
			output = false;
			$("#reg_passed_error").html("Required");
			$("#reg_pass1").focus();

		}
		if (!($("#reg_con_pass2").val())) {
			output = false;
			$("#reg_con_error").html("Required");
			$("#reg_con_pass2").focus();
		}

		if ($("#reg_pass1").val() != $("#reg_con_pass2").val()) {
			output = false;
			$("#reg_con_error").html("Password doesn't match");
			$("#reg_pass1").focus();

		}

		if (!($("#register_by").val())) {
			output = false;
			$("#reg_error").html("Required");
			$("#register_by").focus();
		}

		if (!($("#reg_Nam").val())) {
			output = false;
			$("#reg_nam_error").html("Required");
			$("#reg_Nam").focus();
		}
		if (!($("#gender").val())) {
			output = false;
			$("#gender_error").html("Required");
			$("#gender").focus();
		}
		if (!($("#dob").val())) {
			output = false;
			$("#dob_error").html("Required");
			$("#dob").focus();
		}
		if (!($("#marital").val())) {
			output = false;
			$("#marital_error").html("Required");
			$("#marital").focus();
		}

	}

	if ($("#ethnicity-field").css('display') != 'none') {

		if (!($("#reg_tim").val())) {
			output = false;
			$("#tim_error").html("Required");
			$("#reg_tim").focus();
		}
		if (!($("#reg_tim").val())) {
			output = false;
			$("#tim_error").html("Required");
			$("#reg_tim").focus();
		}
		if (!($("#mother").val())) {
			output = false;
			$("#mother_error").html("Required");
			$("#mother").focus();
		}
		if (!($("#nakshathra").val())) {
			output = false;
			$("#nakshathra_error").html("Required");
			$("#nakshathra").focus();
		}
		if (!($("#zodiac_sign").val())) {
			output = false;
			$("#zodiac_sign_error").html("Required");
			$("#zodiac_sign").focus();
		}
	}
	if ($("#education-field").css('display') != 'none') {

		if (!($("#edu").val())) {
			output = false;
			$("#edu_error").html("Required");
			$("#edu").focus();
		}
		if (!($("#education_detail").val())) {
			output = false;
			$("#education_detail_error").html("Required");
			$("#education_detail").focus();
		}
		if (!($("#occupation").val())) {
			output = false;
			$("#occupation_error").html("Required");
			$("#occupation").focus();
		}
		if (!($("#occupationdetail").val())) {
			output = false;
			$("#occupationdetail_error").html("Required");
			$("#occupationdetail").focus();
		}
		if (!($("#employed_in").val())) {
			output = false;
			$("#employed_in_error").html("Required");
			$("#employed_in").focus();
		}
		// if(!($("#reg_income").val())) {
		// output = false;
		// $("#reg_income_error").html("Required");
		// }
	}
	if ($("#com-field").css('display') != 'none') {
		var mobile = $("#reg_mobile").val();
		if (!(/^([0-9-+]{10})+$/.test(mobile)) && mobile.length != 10) {
			output = false;
			$("#reg_mobile_error").html("Invalid Number");
			$("#reg_mobile").focus();
		}
		if (!($("#reg_fname").val())) {
			output = false;
			$("#reg_fname_error").html("Required");
			$("#reg_fname").focus();
		}
		if (!($("#reg_mname").val())) {
			output = false;
			$("#reg_mname_error").html("Required");
			$("#reg_mname").focus();
		}
		if (!($("#reg_femployment").val())) {
			output = false;
			$("#reg_femployment_error").html("Required");
			$("#reg_femployment").focus();
		}
		if (!($("#reg_memployment").val())) {
			output = false;
			$("#reg_memployment_error").html("Required");
			$("#reg_memployment").focus();
		}
		if (!($("#family_status").val())) {
			output = false;
			$("#family_status_error").html("Required");
			$("#family_status").focus();
		}
		if (!($("#family_type").val())) {
			output = false;
			$("#family_type_error").html("Required");
			$("#family_type").focus();
		}
		if (!($("#reg_EBrother").val() >= $("#reg_MEBrother").val())) {	
			output = false;
			$("#reg_EBrother_error").html("It should be less than  brothers");
			// $("#reg_EBrother").focus();
		}
		if (!($("#reg_ESister").val() >= $("#reg_MESister").val())) {	
			output = false;
			// alert("selva");
			$("#reg_ESister_error").html("It should be less than sister");
			$("#reg_ESister").focus();
		}
		if (!($("#reg_YBrother").val() >= $("#reg_MYBrother").val())) {	
			output = false;
			$("#reg_EBrother_error").html("It should be less than younger brothers");
			// $("#family_type").focus();
		}
		if (!($("#reg_YSister").val() >= $("#reg_MYSister").val())) {	
			output = false;
			$("#reg_ESister_error").html("It should be less than  younger sister");
			// $("#family_type").focus();
		}
	}
	// if ($("#exceptation-field").css('display') != 'none') {
// 
		// if (!($("#food").val())) {
			// output = false;
			// $("#food_error").html("Required");
			// $("#food").focus();
		// }
		// if (!($("#search_age_from").val())) {
			// output = false;
			// $("#search_age_from_error").html("Required");
			// $("#search_age_from").focus();
		// }
// 
	// }
	// if ($("#horoscope-field").css('display') != 'none') {
		// if (!($("#crasi_name").val())) {
			// output = false;
			// $("#crasi_name_error").html("Required");
			// $("#crasi_name").focus();
		// }
	// }
	return output;
}

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
	 $('.position_images').css('display','none');
	// reg page validation //
	$(".income-box,.bro_sis,.mob_num,.valli_id,.man_id,.age_reg").keypress(function(e) {
		// var income =$(this).val();
		// var income =parseInt($(this).val());
		// var s = e.which;
		var charCode = e.which || e.keyCode;

		if (charCode > 31 && (charCode < 48 || charCode > 57)) {

			return false;
		}

		// var income =$(this).val();
		// if (income<0 && income>100){
		//  return false;
		// }
		// alert(income)
	});
	$(".income-box").keypress(function(e) {
		var inc = $(".income-box");
		var key = String.fromCharCode(e.charCode || e.which);
		var come = (inc.get(0).selectionStart - 0);
		if (come == '0' && key == '0') {
			return false;
		}
		$(this).val($(this).val().slice(0, 7));

	});
	$(".ph_num").keyup(function(e) {
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
	// $(".alphaonly").keypress(function(event){
	// var ew = event.which;
	// if(ew == 32)
	// return true;
	// if(65 <= ew && ew <= 90)
	// return true;
	// if(97 <= ew && ew <= 122)
	// return true;
	// return false;
	// });
	//
	// $(".income-box").blur(function (e) {
	//      var income =parseInt($(this).val());
	//        if (income<0 || income>100){
	//         // return false;
	//         $(this).val('');
	//        }
	//        // alert(income);
	// });
	// var max_chars = 2;
	$('.bro_sis,.age_reg').keypress(function(e) {
		if ($(this).val().length >= 1) {
			$(this).val($(this).val().substr(0, 1));
		}
	});
	$('.mob_num').keypress(function(e) {
		if ($(this).val().length >= 10) {
			$(this).val($(this).val().substr(0, 9));
		}
	});
	// end reg page validation //
	$('.long').hide();
	// Rasi Horoscope - Start //
	var results_array = [];
	// Add the Rasi on registration Page
	$('#rasi_cont').on('click', '#add_rasi', function() {
		//added if condition only by kalai
		// alert($('#rasi_name option').length);
		if ($('#rasi_name option').length > 0) {
			var srasi_val = $('#rasi_name :selected').val();
			var srasi_text = $('#rasi_name :selected').text();
			var sres = $('#box_id :selected').val();
			var data = {};
			$('.third-row').each(function() {
				var id = $(this).data('id');
				var res = id.split("_");
				if (res[1] == sres) {
					img = media_url + 'assets/img/rasi/' + srasi_val + '.png';
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

	// Remove the Rasi from Registration Page
	$('#rasi_cont').on('click', '#remove_rasi', function() {
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
	});
	// Rasi Horoscope - End //

	// ASHAM Horoscope - Start //
	var results_array_asham = [];
	// Add the ASHAM on registration Page
	$('#asham_cont').on('click', '#add_asham', function() {
		//added if condition only by kalai
		// alert($('#asham_name option').length);
		if ($('#asham_name option').length > 0) {
			var srasi_val = $('#asham_name :selected').val();
			var srasi_text = $('#asham_name :selected').text();
			var sres = $('#ashambox_id :selected').val();
			var data = {};
			$('.asham-row').each(function() {
				var id = $(this).data('id');
				var res = id.split("_");
				if (res[1] == sres) {
					img = media_url + 'assets/img/rasi/' + srasi_val + '.png';
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

	// Remove the ASHAM from Registration Page
	$('#asham_cont').on('click', '#remove_asham', function() {
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

	$("#dob").blur(function() {
		var $birthday = $('#dob').val();
		var age = calculateAge($birthday);
		$('#user_age').val(age);
		$('#display_age').val(age);
	});

	$('.search_btn').on('click', '#finish', function() {
		$("#result_horoscope_rasi").val(JSON.stringify(results_array));
		$("#result_horoscope_asham").val(JSON.stringify(results_array_asham));
	});

	// Show and Hide Search Div
	$(".slidingDiv").hide();
	$('.view_communication').click(function() {
		if ($('.slidingDiv').length != 0) {
			var data = {};
			var url = window.location.href;
			var profile_id = url.split('viewdetail/');
			data[csrf_name] = csfrData[csrf_name];
			data['user_id'] = log_userid;
			data['profile_id'] = profile_id[1];
			// alert(JSON.stringify(data));
			$.ajax({
				url : baseurl + "countprofile_viewed",
				data : data,
				type : "post",
				dataType : 'json',
				success : function(res) {
					// alert(JSON.stringify(res));
					if (res['status'] == 'hide')
						alert("You have already viewed profile or credit limit exceeded");
					else
						$(".slidingDiv").slideToggle();
				},
				error : function(jqXHR, textStatus, errorThrown) {
					// console.log("The following error occured: "+ textStatus, errorThrown);
					// $('#register_email-error').html(response);
					//     return false;
				}
			});

			// if($('.check_payment_status').val() == 1)
			//     alert("Please renew your account at vallikodimatrimonial.in");
			// else
			//     alert("Please pay at vallikodimatrimonial.in");
		} else {
			// $(".slidingDiv").slideToggle();
			alert("Please contact vallikodimatrimonial.in");
		}

	});
	// $('#q-reg').click(function(){
	// var out = qreg_validate();
	// if(out == false){
	//
	// return false;
	// }
	//
	// });

	$("#next, #finish").click(function() {

		// var count = $('#userdetails-field #reg_passed_error').length;
		// alert(count);
		var ajx_output;
		var output = reg_validate();
		// ajx_output = reg_mailcheckuser();
		//updated above line by kalai on sept 29th
		if(output)
			ajx_output = reg_mailcheckuser();
		// alert('end-ajax-control'+ajx_output);
		//updated below line by kalai on sept 29th
		if ((output) && (ajx_output)) {
			// if(output) {
			var current = $(".highlight");
			var next = $(".highlight").next("li");
			if (next.length > 0) {
				$("#" + current.attr("id") + "-field").hide();
				$("#" + next.attr("id") + "-field").show();
				$("#back").show();
				$("#finish").hide();
				$(".highlight").removeClass("highlight");
				next.addClass("highlight");
				if ($(".highlight").attr("id") == 'horoscope') {
					$("#next").hide();
					$("#finish").show();
				}
			}
			$('.nav-tabs > .active').next('li').find('a').trigger('click');
		}
	});
	$("#back").click(function() {
		var current = $(".highlight");
		var prev = $(".highlight").prev("li");
		if (prev.length > 0) {
			$("#" + current.attr("id") + "-field").hide();
			$("#" + prev.attr("id") + "-field").show();
			$("#next").show();
			$("#finish").hide();
			$(".highlight").removeClass("highlight");
			prev.addClass("highlight");
			if ($(".highlight").attr("id") == 'userdetails') {
				$("#back").hide();
			}
		}
		$('.nav-tabs > .active').prev('li').find('a').trigger('click');
	});

	$('form#userlogin').submit(function() {
		if ($(this).find('.bootstrap-select').hasClass('form_inputs')) {
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
			if (this_val == '') {
				// alert($(this).attr('name'));
				error = 1;
				message = "Please fill " + $(this).data('message');
				$(this).focus();
				// alert(message);
				// alert($(this).attr('name'));
				$(this).addClass('form-field-error');
				return false;
			} else {
				$(this).removeClass('form-field-error');
			}
		});
		/* Validate mobile*/
		if (error == '') {
			var mobile = $(this).find('.mobile_value');
			if ((/^([0-9-+]{10})+$/.test(mobile.val())) && mobile.length > 0) {
				mobile.removeClass("form-field-error");
				// alert("mobile validation");
			} else if (mobile.length > 0) {
				error = 1;
				message = "Enter Valid Mobile Number!";
				mobile.addClass("form-field-error");
			}
		}
		if (error == '') {
			var email = $(this).find('.email_value');
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if ((!emailReg.test(email.val()))) {
				error = 1;
				message = "Enter Valid Email Address!";
				email.addClass("form-field-error");
			} else {
				email.removeClass("form-field-error");
			}
		}

		// /* Validate email exits */
		if (error == '') {
			var email1 = $(this).find('#reg_email2');
			var email = mailcheckuser();
			if (email) {
				error = 1;
				message = "Email Already Registered !";
				email1.addClass("form-field-error");
			} else {
				email.removeClass("form-field-error");
				// alert("false=>");
			}
		}
		if ($(this).find('input,select,textarea').hasClass('form-field-error')) {
			// if(message == '') {
			// message ="Please fill "+data('message');
			// }
			$('html, body').animate({
				scrollTop : 0
			}, 500);
			error_msg.html(message).fadeIn(350);
			return false;
		} else {
			error = 0;
			error_msg.fadeOut('fast').html('');
			// alert("success3");
			return true;
		}
		var formData = new FormData(this);
		var this_status = $(this).find('.val_error');
		$.ajax({
			type : "POST",
			url : 'login_ajax',
			data : formData,
			async : false,
			success : function(res) {
				if (res != 'login_success') {
					this_status.html("<i class='icon-remove-sign' id='admin_error_login'></i>  " + res);
					this_status.fadeIn(500);
					window.location.href = "base/index";
				} else {
					window.location.href = "base/index";
				}
			}
		});
		return false;
	});

	// Tab Toggle
	// Active Tab Change
	//      $('#next').click(function(){
	//   $('.nav-tabs > .active').next('li').find('a').trigger('click');
	// });
	//   $('#back').click(function(){
	//   $('.nav-tabs > .active').prev('li').find('a').trigger('click');
	// });
	// Active Tab Change ends

	/*End user customer user edit form Start*/
	$('.customer_edit_form').on('submit', function(e) {
		e.preventDefault();
		if ($(this).find('.bootstrap-select').hasClass('form_inputs')) {
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
			if (this_val == '') {
				// alert($(this).attr('name'));
				error = 1;
				message = "Please fill " + $(this).data('message');
				$(this).focus();
				// alert(message);
				// alert($(this).attr('name'));
				$(this).addClass('form-field-error');
				return false;
			} else {
				$(this).removeClass('form-field-error');
			}
		});
		/* Validate mobile*/
		if (error == '') {
			var mobile = $(this).find('.mobile_value');
			if ((/^([0-9-+]{10})+$/.test(mobile.val())) && mobile.length > 0) {
				mobile.removeClass("form-field-error");
				alert("mobile validation");
			} else if (mobile.length > 0) {
				error = 1;
				message = "Enter Valid Mobile Number!";
				mobile.addClass("form-field-error");
			}
		}
		// Validate Password comparison
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
		if ($(this).find('input,select,textarea').hasClass('form-field-error')) {
			// if(message == '') {
			//     message ="Please fill "+data('message');
			// }
			$('html, body').animate({
				scrollTop : 0
			}, 500);
			error_msg.html(message).fadeIn(350);
			return false;
		} else {
			error = 0;
			error_msg.fadeOut('fast').html('');
			var formData = new FormData($(this)[0]);
			// formData[csrf_name] = csfrData[csrf_name];
			formData.append(csrf_name, csfrData[csrf_name]);
			formData.append('action', "update");
			formData.append('rid', $(this).data('id'));
			formData.append('removed_images', image_array);
			// alert(image_array);
			// var formData = $(this).serialize();
			// alert(JSON.stringify(formData)); // It returns empty when stringify json data, but data has been passed
			rasi = [];
			$('.horo_row div').each(function() {
				if ($(this).find('img').length) {
					value = $(this).text();
					// formData.append('rasi', $(this).text());
					$(this).find('img').each(function() {
						rasi.push({
							'key' : $(this).data('id'),
							'value' : value
						});
					})
				}
			});
			if ($('#rasi_name option').length > 0) {
				$('#rasi_name option').each(function() {
					rasi.push({
						'key' : $(this).val(),
						'value' : 0
					});
				});
			}
			// alert(JSON.stringify(rasi));
			formData.append('rasi', JSON.stringify(rasi));

			amsam = [];
			$('.asham_horo_row div').each(function() {
				if ($(this).find('img').length) {
					value = $(this).text();
					// formData.append('rasi', $(this).text());
					$(this).find('img').each(function() {
						amsam.push({
							'key' : $(this).data('id'),
							'value' : value
						});
					})
				}
			});
			if ($('#asham_name option').length > 0) {
				$('#asham_name option').each(function() {
					amsam.push({
						'key' : $(this).val(),
						'value' : 0
					});
				});
			}
			// alert(JSON.stringify(amsam));
			formData.append('amsam', JSON.stringify(amsam));

			$.ajax({
				type : "POST",
				url : baseurl + $(this).attr('action'),
				data : formData,
				async : false,
				contentType : false,
				processData : false,
				dataType : 'json',
				beforeSend: function () 
				{ // traitements JS à faire AVANT l'envoi
                    // $('.customer_edit_form');
                    $("#overlay").show();
                },
				success : function(res) {
					if (res.error == 1) {
						$('.val_error').html("<i class='icon-remove-sign'></i>  " + res.status);
						$('html, body').animate({
							scrollTop : 0
						}, 500);
						$('.val_error').fadeIn(500);
						$('.val_error').fadeOut(5000);
					} else if (res.error == 2) {
						$(".loader_holder").hide();
						// $('.val_error').html("<i class='icon-ok-sign'></i>  " + res.status);
						$('.edit_error').html("<i class='icon-ok-sign'></i>  " + res.status);
						 $(".modals").show();
						$(this).html(res.output);
						$('html, body').animate({
							scrollTop : 0
						}, 500);
						$('.val_error').fadeIn(500);
						$('.val_error').fadeOut(5000);
						// $('.db_status').fadeIn(500);
						// $('.db_status').fadeOut(5000);
					}
				}
			});
		}
	});

	/*End user customer user edit form End*/
	$(".find_age,#cus_age").keypress(function(event) {
		event.preventDefault();
	});
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
    //get id and store in array for removed images while edit profile
    var image_array = [];
    $('.remove_act').on('click', function(){
        var image_id = $(this).parents("li").find('.cus_img').data('id');
        if ($.inArray(image_id.toString(), image_array) != 0)
            image_array.push(image_id);
    });   
    //To find height in feet for selected height in cms
    $('.height_act').on('change', function(){
        height_cms = $('.height_act :selected').text();
        $('.feet_act option[data-heightcms*="' + height_cms + '"]').attr("selected","selected");       
    });  
});

// $(window).load(function(){
//   var height = $('.img-pane').height();
//      var width = $('.img-pane').width();
//      $('.img-pane').css({
//          'margin-top': -height / 2 + "px",
//          'margin-left': -width / 2 + "px"
//      });
// });
	/*image center and loader*/ 
// $(window).load(function()
// {
    // $('.position_images').css('display','none');
    // $('.home_category_image').addClass('product_loader');
	// centerContent();
// });
// $(window).resize(function()
// {
    // $('.position_images,').css('display','none');
    // $('.home_category_image').addClass('product_loader');
	// centerContent();
// });
// function centerContent()
// {   
    // setTimeout(function(){ 
        // $('.home_category_image').removeClass('product_loader');
    	// $('.position_images,.product_position,.home_product_images').each(function(){
    		// $(this).css("margin-left", -($(this).width())/2);
    		// $(this).css("margin-top", -($(this).height())/2);
            // $(this).fadeIn(200);
    	// });
    // },1000);
// }
/* End image center and loader*/ 
