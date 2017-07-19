<?php 
    include('include/header.php');
    include('include/menu.php');
?> 
        
        <!--================Slider Reg Area (selva)=================-->
        <section class="slider_area">
            <div class="slider_inner">
                <div class="rev_slider"  data-version="5.3.0.2" id="home-slider">
                    <ul> 
                       <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url(); ?>assets/img/slider-img/slider-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url(); ?>assets/img/slider-img/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        
                    </ul> 
                </div><!-- END REVOLUTION SLIDER -->
            </div>
            <div class="registration_form_area"><!--Ravichandran Adding fields -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="registration_form_s">
                                <h4>Registration</h4>
                                <form method="post" action="index" name="index_reg" id="index_reg">
                                    <div class="form-group">
                                                <div class="form-group">
                                                    <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <span data-bind="label">Registered By</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                                    </button> -->
                                                    <!-- <ul class="dropdown-menu" role="menu">
                                                        <li><a href="<?php echo base_url(); ?>#">Self</a></li>
                                                        <li><a href="<?php echo base_url(); ?>#">Friend</a></li>
                                                        <li><a href="<?php echo base_url(); ?>#">Brother</a></li>
                                                        <li><a href="<?php echo base_url(); ?>#">Sister</a></li>
                                                    </ul> -->
                                                    <span data-bind="label" class="text-font">Registered By</span>
                                                    <select class="form-control customize_plan" name="register_by[]" id="register_by" placeholder="RegisterBy-Name">
                                                        <option value="">Select</option>
                                                        <?php
                                                        if(!empty($register)) :
                                                            foreach ($register as $cls_val) {
                                                                echo "<option value='" . $cls_val['registeredby_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                            }
                                                        endif;
                                                        ?>
                                                    </select>
                                                </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="reg_Name" placeholder="Name" name="reg_Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="reg_age" placeholder="Age" name="reg_age">
                                    </div>
                                        
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control" id="reg_Religion" name="reg_Religion"placeholder="Religion"> -->
                                        <span data-bind="label" class="text-font">Marital Status</span>
                                        <select class="form-control customize_plan" name="marital_status[]">
                                            <option value="">Select</option>
                                                <?php 
                                                if(!empty($martial_status)) :
                                                foreach ($martial_status as $cls_val) {
                                                echo "<option value='" . $cls_val['maritalcategory_id'] . "'>" . ucfirst($cls_val['marital_name']) . "</option>";
                                                }
                                                endif;
                                                ?>
                                        </select>  

                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="text" class="form-control" id="reg_Mobile" name="reg_Mobile" placeholder="Mobile">
                                    </div> -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="reg_email2" name="reg_email2" placeholder="Email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="reg_pass2" name="reg_pass2" placeholder="Password">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span data-bind="label" class="text-font">Gender</span>
                                                <select class="form-control customize_plan" name="gender[]" id="gender">
                                                        <option value="">Select</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="datepicker">
                                                    <input type='text' class="form-control datetimepicker4" placeholder="Birthday" name="dob" id="dob" />
                                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                    <div class="reg_chose form-group">
                                        <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!--<div class="col-sm-6">
                            <div class="form_man">
                                <img src="<?php echo base_url(); ?>assets/img/registration-man.png" alt="">
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </section>
        <!--================End Slider Reg Area =================-->
         <!--================Advanced Search Area (selva)=================-->
         <section class="advanced_search_area search_area2">
            <div class="container">
                <div class="welcome_title">
                    <h3>Quick Search</h3>
                    <img src="<?php echo base_url(); ?>assets/img/w-title-b.png" alt="">
                    
                </div>
                <div class="row">
                    <div class="col-sm-9">
                            <div class="search_option">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="height_item">
                                            <h4>Looking for a</h4>
                                            <select class="selectpicker">
                                                <option>Bride</option>
                                                <option>Groom</option>
                                            </select>
                                        </div>
                                        <div class="height_item">
                                            <h4>From (age)</h4>
                                                <select class="selectpicker">
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                </select>
                                        </div>
                                        <div class="height_item">
                                            <h4>To (age)</h4>
                                            <select class="selectpicker">
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                            </select>     
                                        </div>
                                    </div> 
                                 </div>
                            </div>
                     </div>
                        <div class="col-sm-3">
                            <div class="search_btn">
                                <a href="<?php echo base_url(); ?>search_result" class="register_angkar_btn">Search</a>
                            </div>
                        </div>
                 </div> 
            </div>               
        </section>
        <!--================End Advanced Search Area (selva)=================-->
       
       <!--================Blog grid Area (selva) =================-->
        <section class="blog_grid_area sticky_story_area">
            <div class="container">
                <div class="welcome_title">
                    <h3>Success Stories</h3>
                    <img src="<?php echo base_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="row m0">
                    <div class="blog_grid_inner sticky_slider">
                        <div class="item">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo base_url(); ?>assets/img/blog/stories/stories-1.jpg" alt="">
                                    <div class="author_name">
                                        <h4>Maria & Kavin</h4>
                                    </div>
                                </div>
                                <!--<div class="blog_grid_content">
                                    <h3>Your Blog title here</h3>
                                    <div class="blog_grid_date">
                                        <a href="stories.html#">By David</a>
                                        <a href="stories.html#">03 Sep, 2016</a>
                                        <a href="stories.html#">Dating</a>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has a more-or-less like readable English. </p>
                                    <a href="stories.html#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo base_url(); ?>assets/img/blog/stories/stories-2.jpg" alt="">
                                    <div class="author_name">
                                        <h4>Rocky Ahmed</h4>
                                    </div>
                                </div>
                                <!--<div class="blog_grid_content">
                                    <h3>Your Blog title here</h3>
                                    <div class="blog_grid_date">
                                        <a href="stories.html#">By David</a>
                                        <a href="stories.html#">03 Sep, 2016</a>
                                        <a href="stories.html#">Dating</a>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has a more-or-less like readable English. </p>
                                    <a href="stories.html#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo base_url(); ?>assets/img/blog/stories/stories-3.jpg" alt="">
                                    <div class="author_name">
                                        <h4>Maria & Kavin</h4>
                                    </div>
                                </div>
                                <!--<div class="blog_grid_content">
                                    <h3>Your Blog title here</h3>
                                    <div class="blog_grid_date">
                                        <a href="stories.html#">By David</a>
                                        <a href="stories.html#">03 Sep, 2016</a>
                                        <a href="stories.html#">Dating</a>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has a more-or-less like readable English. </p>
                                    <a href="stories.html#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo base_url(); ?>assets/img/blog/stories/stories-4.jpg" alt="">
                                    <div class="author_name">
                                        <h4>Rocky Ahmed</h4>
                                    </div>
                                </div>
                                <!--<div class="blog_grid_content">
                                    <h3>Your Blog title here</h3>
                                    <div class="blog_grid_date">
                                        <a href="stories.html#">By David</a>
                                        <a href="stories.html#">03 Sep, 2016</a>
                                        <a href="stories.html#">Dating</a>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has a more-or-less like readable English. </p>
                                    <a href="stories.html#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog grid Area (selva)=================-->
        <section class="shop_area">
            <div class="container">
                <div class="welcome_title">
                    <h3> Featured Profiles</h3>
                    <img src="<?php echo base_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?php echo base_url(); ?>assets/img/shop/product-1.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>full_view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?php echo base_url(); ?>assets/img/shop/product-2.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>full_view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?php echo base_url(); ?>assets/img/shop/product-3.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>full_view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?php echo base_url(); ?>assets/img/shop/product-4.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>full_view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?php echo base_url(); ?>assets/img/shop/product-1.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>full_view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?php echo base_url(); ?>assets/img/shop/product-2.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>full_view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?php echo base_url(); ?>assets/img/shop/product-3.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>full_view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="<?php echo base_url(); ?>assets/img/shop/product-4.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>full_view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="pagination_area">
                        <a class="prev" href="#">Previous</a>
                        <a class="arrow_left" href="#"><i class="fa fa-angle-left"></i></a>
                        <a class="arrow_right" href="#"><i class="fa fa-angle-right"></i></a>
                        <a class="next" href="#">Next</a>
                     </div>-->
                </div>
            </div>   
        </section>
        
<?php 
    include('include/footer.php');
?>  
 </body>
</html>