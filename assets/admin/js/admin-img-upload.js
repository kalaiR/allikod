/*Image upload in reg page*/
(function($) {
     $('.img_view').click(function(){
          $(".edit_img").show();
          $(".btn-nav").hide();
    });
    var names = [];
    $('.edit-mult-img').on('change', '.picupload', function(event) {
        var getAttr = $(this).attr('click-type');
        var files = event.target.files;
        var output = document.getElementById("media-list");
        var z = 0
        var height = '';
        var width = '';
         var file_size = $("#picupload")[0].files[0].size;

                    var fileExtension = ['jpeg', 'jpg','png','gif'];
                    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                       
                        $('#spanFileName').html("Only jpeg,jpg,png,gif formats are allowed.");
                    }
          // $(".edit-mult-img").on('change',function(){
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
            if (width > 350 || height > 300) {
                        // message = "Upload image height and width below 300 X 350";
                        // $("#uploadedfile").addClass("form-field-error");
                 $('#spanFileName').html("Upload image height and width below 300 X 350");       
                    }
                 else {
                        $('#spanFileName').html("");
                    }
            if (file_size >1000000) {
                        // error = 1;
                        // message = "Upload image size less than 1 MB";
                        // $("#uploadedfile").addClass("form-field-error");
                         $('#spanFileName').html("Upload image size less than 1 MB");       
                    }
            else {
                        $('#spanFileName').html("");
                    }        
            if (getAttr == 'type1') {
            $('#media-list').html('');
            $('#media-list').html('<li class="myupload"><span><i class="icon32 icon-plus" aria-hidden="true"></i><input type="file" click-type="type2" id="picupload" class="picupload" multiple style="margin-top: 35px;"></span></li>');
            $('#hint_brand').modal('show');
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                // names.push($(this).get(0).files[i].name);
                if (file.type.match('image')) {
                    var picReader = new FileReader();
                    picReader.fileName = file.name
                    picReader.addEventListener("load", function(event) {
                        var picFile = event.target;

                        var div = document.createElement("li");


                        div.innerHTML = "<img src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/><div  class='post-thumb'><div class='inner-post-thumb'><a href='javascript:void(0);' data-id='" + event.target.fileName + "' class='remove-pic'><i class='icon icon-color icon-close' aria-hidden='true'></i></a><div></div>";

                        $("#media-list").prepend(div);


                    });
                } 
                picReader.readAsDataURL(file);
            }
            console.log(names);
        }     
      if (getAttr == 'type2') {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                // names.push($(this).get(0).files[i].name);
                if (file.type.match('image')) {

                    var picReader = new FileReader();
                    picReader.fileName = file.name
                    picReader.addEventListener("load", function(event) {

                        var picFile = event.target;

                        var div = document.createElement("li");

                        div.innerHTML = "<img src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/><div  class='post-thumb'><div class='inner-post-thumb'><a href='javascript:void(0);' data-id='" + event.target.fileName + "' class='remove-pic'><i class='icon icon-color icon-close' aria-hidden='true'></i></a><div></div>";

                        $("#media-list").prepend(div);

                    });
                } 
                picReader.readAsDataURL(file);

            }
            // return array of file name
            console.log(names);
        }          
            };
          }
        }
        else {
                        $('#spanFileName').html("");
                    }    

    });

    $('.edit-mult-img').on('click', '.remove-pic', function() {
        $(this).parent().parent().parent().remove();
        var removeItem = $(this).attr('data-id');
        var yet = names.indexOf(removeItem);

        if (yet != -1) {
            names.splice(yet, 1);
        }
        // return array of file name
        console.log(names);
      });

}(jQuery));
 /* End Image upload in edit page*/

