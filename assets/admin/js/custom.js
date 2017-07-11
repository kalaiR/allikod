$(document).ready(function() {
	//************ Start ***********
    $(document).delegate('.form_submit','submit',function(e){
        // test code
        // form_data = $(this).serializeArray();
        // alert(JSON.stringify(form_data));
        //disable the default form submission
        e.preventDefault();
        //grab all form data  
        var form_data = new FormData($(this)[0]);
        $.ajax({
           type: "POST",
           url: $(this).attr('action'),
           data: form_data,
           async: false,
           // cache: false,
           contentType: false,
           processData: false,
           // dataType: 'json',  
           context: this, 
           success: function(data) {  
            // $('.box-content').html(data);
            // simplefilepreview_function();
            // if($(this).attr('id') == "edit_giftproduct"){
            //     image_after_window_ajax_load();
            // }
            // if($('.attribute_check_status').val() == '1'){
            //     $('.attribute_main_block').show();
            //     $('.price_group,.items_group').hide();
            //     $('.attribute_status').attr("checked",true);
            // }
            // multiselect();
           }
        });
        // return false;
    });
    //************ End *************
});