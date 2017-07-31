<?php 
    include('include/header.php');
?>      <?php 
            include('include/menu.php');
        ?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="img/banner/t-left-img.png" alt="">Success Stories<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
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
                    <div class="col-sm-8 aline-center-box">
                            <div class="single_blog_image">
                                <h3>Post your success stories here !</h3>          
                            </div>
                            <form action="post.php" class="post_success_form">
                                <div class="registration_form_area" id="registration_form_are">
                                     <span class="val_status" style="display: block;">
                                    <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                                    </span>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="registration_form_s" id="registration_form_s">
                                                    <h4>Post Your Story</h4> 
                                                <div class="col-sm-8 text-box">
                                                    <div class="form-group">
                                                        <div class="col-sm-8 text-box">
                                                            <input type="text" name="bride" class="form-control form_inputs" id="bride_name" placeholder="Bride Name" >
                                                        </div>  
                                                    </div>                
                                                </div>
                                                 <div class="col-sm-8 text-box">       
                                                    <div class="form-group">                              
                                                         <input type="text" name="groom" class="form-control form_inputs" id="groom_name" placeholder="Groom Name">  
                                                    </div>
                                                </div> 
                                                <div class="col-sm-8 text-box">   
                                                    <div class="form-group"> 
                                                            <input type="text" name="vallikodi_id" class="form-control form_inputs" id="vallikodi_id" placeholder="Vallikodi ID">  
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 text-box">    
                                                    <div class="form-group">
                                                            <input type="text" name="email_id" class="form-control form_inputs email_value" id="email_id" placeholder="Email">
                                                    </div>
                                                </div>    
                                                <div class="col-sm-8 text-box">
                                                    <div class="form-group">
                                                        <div class="datepicker">
                                                            <input type='text' name="marriage_date" class="form-control form_inputs datetimepicker4" placeholder="Marriage" />
                                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 text-box upload_box">
                                                    <div class="form-group">
                                                            <input id="image_couple" class="btn form-control login_btn_1 image_act" type="file" value="LogIn" name="cand_pic" placeholder="Upload Image">
                                                    </div>
                                                </div>
                                                <div class="comment_form_area">
                                                    <div class="row">
                                                        <div class="form_inner">
                                                            <div class="form-group col-md-12">
                                                                <textarea id="comment" placeholder="Comment" rows="1"></textarea>
                                                            </div>
                                                        </div>          
                                                    </div>
                                                </div>    
                                                <div class="reg_chose form-group">
                                                    <button type="submit" herf="#" value="LogIn" class="btn form-control login_btn">Post</button>
                                                </div>     
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form_man">
                                                <!-- <img src="img/registration-man.png" alt=""> -->
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </form>            
                    </div>
                   <!-- <div class="col-md-3 right_side">
                    </div>-->
                </div>
            </div>
        </section>
        <!--================End post grid Area =================-->
<?php 
    include('include/footer.php');
?>  
    </body>
</html>