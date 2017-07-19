<?php 
    include('include/header.php');
?> 
       
       <?php 
            include('include/menu.php');
        ?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="<?php echo base_url(); ?>assets/img/banner/t-left-img.png" alt="">Success Stories<img class="right_img" src="<?php echo base_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
                    <!--<a href="index.html">Home</a>
                    <a href="shop-cart.html">Pricing</a>-->
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
                                    <form action="<?php echo base_url();?>success_stories">
                                        <div class="col-sm-8">
                                            <div class="registration_form_s" id="registration_form_s">
                                                    <h4>Post Your Story</h4>
                                                    <div class="form-group">
                                                            <input type="text" class="form-control" id="bride_name" placeholder="Bride Name">      
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="datepicker">
                                                            <input type="text" class="form-control" id="groom_name" placeholder="Groom Name">
                                                        </div>    
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="vallikodi_id" placeholder="Vallikodi ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="email_id" placeholder="Email">
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <div class="datepicker">
                                                                            <input type='text' class="form-control datetimepicker4" placeholder="Marriage" />
                                                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>    
                                                                        </div>      
                                                                    </div>
                                                            </div>
                                                                <div class="col-md-5 upload_box">
                                                                    <div class="form-group col-md-12">
                                                                        <button type="file" value="LogIn" class="btn form-control login_btn">Upload Image</button>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                </form>            
                                                    <div class="comment_form_area">
                                                        <div class="row">
                                                            <form action="#" class="form_inner">
                                                                <div class="form-group col-md-12">
                                                                    <textarea id="comment" placeholder="Comment" rows="1"></textarea>
                                                                </div>
                                                            </form>          
                                                        </div>
                                                    </div>    
                                                        <div class="reg_chose form-group">
                                                            <button type="submit" value="LogIn" class="btn form-control login_btn">Post</button>
                                                        </div>     
                                            </div>
                                        </div>
                                    </form>    
                                            <div class="col-sm-4">
                                                <div class="form_man">
                                                    <!-- <img src="<?php echo base_url(); ?>assets/img/registration-man.png" alt=""> -->
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
                    <img src="<?php echo base_url(); ?>assets/img/map-persion.png" alt="">
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
    </body>
</html>