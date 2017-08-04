<?php 
    include('include/header.php');
    include('include/menu.php');
?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Success Stories"><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">Success Stories<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <!--================post grid Area =================-->
        <section class="blog_grid_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 aline-center-box">
                            <div class="single_blog_image">
                                <h3>Post your success stories here !</h3>          
                            </div>
                            <div class="registration_form_area" id="registration_form_are">
                                    <div class="row">
                                    <form action="success_stories" class="post_success_form" method="post" name="success_stories" id="success_stories" enctype="multipart/form-data">
                                        <div class="col-md-8">
                                            <div class="registration_form_s" id="registration_form_s">
                                                    <!-- <h2>Post Your Story</h2> -->
                                                    <span class="val_status" style="display: block;">
                                    <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                                    </span>
                                                    <div class="form-group base-box">
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control form_inputs" id="bride_name" placeholder="Bride Name (Female) *" name="bride_name">
                                                        </div>
                                                         <div class="tooltips" style="display: inline-block;">
                                                         <i class="fa fa-info-circle text-box"></i><span class="tooltiptext">Type the name of the Girl</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control form_inputs" id="groom_name" placeholder="Groom Name (Male) *" name="groom_name">
                                                        </div>    
                                                        <div class="tooltips" style="display: inline-block;">
                                                            <i class="fa fa-info-circle text-box"></i><span class="tooltiptext">Type the name of the Boy</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="vallikodi_id" placeholder="Vallikodi ID" name="vallikodi_id">
                                                        </div>   
                                                        <div class="tooltips" style="display: inline-block;">
                                                            <i class="fa fa-info-circle text-box"></i><span class="tooltiptext">Mention the Vallikodi ID of the Bride or Groom</span>
                                                        </div> 
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-10">
                                                            <input type="email" class="form-control" id="email_id" placeholder="Email" name="email_id">
                                                        </div>
                                                        <div class="tooltips" style="display: inline-block;">
                                                            <i class="fa fa-info-circle text-box"></i><span class="tooltiptext">Enter your E-mail ID</span>
                                                        </div>    
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12">
                                                                            <div class="datepicker">
                                                                                <input type='text' class="form-control datetimepicker4" placeholder="Marriage" name="mariage_date" id="mariage_date"/>
                                                                                <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>    
                                                                            </div>
                                                                        </div>         
                                                                    </div>
                                                            </div>
                                                            </div>
                                                                <!-- <div class="col-md-6 upload_box next-box">
                                                                   <div>
                                                                        <input type="file" id="uploadedfile" name="uploadedfile" class="form_inputs" class="next-box" />
                                                                    </div>
                                                                </div> -->
                                                            <div class="col-md-10 base-box">
                                                            <div class="imageupload panel panel-default">
                                                                <div class="panel-heading clearfix">
                                                                    <h3 class="panel-title">Upload Image *</h3>
                                                                    <span id="upimg_error" class="registration-error"></span>
                                                                </div>
                                                                <div class="file-tab panel-body">
                                                                    <label class="btn btn-default btn-file">
                                                                        <span>Browse</span>
                                                                         <input type="file" id="uploadedfile" name="uploadedfile" class="form_inputs" />
                                                                    </label>
                                                                 </div>
                                                                <!-- <input type="button" id="upload_post" value="upload" name ="upload_post"> -->
                                                            </div>
                                                        </div>   
                                                    <div class="comment_form_area next-box">
                                                        <textarea id="comment" class="form-control" name="comment" placeholder="Comment" rows="5"></textarea>
                                                    </div>    
                                                   <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                                    <div class="reg_chose form-group">
                                                            <!-- <input type="submit" value="LogIn" id="post_submit" name="post_submit" class="btn form-control login_btn"> -->
                                                        <div class="reg_chose form-group">
                                                            <button type="submit" value="LogIn" class="btn login_btn" name="submit">Post</button>
                                                        </div> 
                                                    </div>     
                                            </div>
                                        </div>                                         
                                    </form>    
                                            <div class="col-sm-4">
                                                <div class="form_man">
                                                    <!-- <img src="<?php echo media_url(); ?>assets/img/registration-man.png" alt=""> -->
                                                </div>
                                            </div>
                                    </div>
                            </div>        
                    </div>
                   <!-- <div class="col-md-3 right_side">
                    </div>-->
                </div>
            </div>
        </section>
        <!--================End post grid Area =================-->
       
        <div id="largeContent" style="display:none;">
            <div class="media tool_content">
                <div class="media-left">
                    <img src="<?php echo media_url(); ?>assets/img/map-persion.png" alt="">
                </div>
                <div class="media-body">
                    <h3>Sandi Williams</h3>
                    <h5>21 years old</h5>
                    <h5>From Paris</h5>
                    <h5>Distance 16 km</h5>
                </div>
            </div>
        </div>
<?php 
    include('include/footer.php');
?>
