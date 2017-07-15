<?php 
    include('include/header.php');
?>      
        <?php 
             include('include/menu.php');
        ?>  
        <!--================Slider Reg Area (selva)=================-->
        <section class="slider_area">
            <div class="slider_inner">
                <div class="rev_slider"  data-version="5.3.0.2" id="home-slider">
                    <ul> 
                       <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="img/slider-img/slider-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="img/slider-img/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        
                    </ul> 
                </div><!-- END REVOLUTION SLIDER -->
            </div>
            <div class="registration_form_area"><!--Ravichandran Adding fields -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                        <form action="registration.php" class="reg_form">
                            <div class="registration_form_s">
                                <span class="val_status" style="display: block;">
                                    <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                                </span>
                                <h4>Registration</h4>
                                <!-- <div class="form-group">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <span data-bind="label">Registered By</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                                    </button>
                                                    <ul class="dropdown-menu form_inputs" role="menu">
                                                        <li><a href="index.php#">Self</a></li>
                                                        <li><a href="index.php#">Friend</a></li>
                                                        <li><a href="index.php#">Brother</a></li>
                                                        <li><a href="index.php#">Sister</a></li>
                                                    </ul>
                                                </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="row controls">
                                            <div class="col-sm-9">
                                                <div class="search_option">
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active"> 
                                                            <div class="height_item">
                                                                <select class="selectpicker form_inputs" name="registered_by">
                                                                    <option value="">Registered By</option>
                                                                    <option value="0">Self</option>
                                                                    <option value="1">Friend</option>
                                                                    <option value="2">Brother</option>
                                                                    <option value="3">Sister</option>
                                                                    <option value="4">Parent</option>
                                                                </select>
                                                            </div>
                                                        </div> 
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                                <input type="text" class="form-control form_inputs" id="reg_Name" placeholder="Name" name="username">
                                            </div>
                                    <div class="form-group">
                                        <input type="text" name="religion" class="form-control form_inputs" id="reg_Religion" placeholder="Religion">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mobile_no" class="form-control form_inputs mobile_value" id="reg_Mobile" placeholder="Mobile">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email_id" class="form-control form_inputs email_value" id="reg_email2" placeholder="Email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form_inputs" id="reg_pass2" placeholder="Password">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                        <!-- <div class="form-group">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="index.php#">Male</a></li>
                                                        <li><a href="index.php#">Female</a></li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                        <div class="search_option">
                                                            <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane active"> 
                                                                    <div class="height_item">
                                                                        <select class="selectpicker form_inputs" name="gender">
                                                                            <option value="">Gender</option>
                                                                            <option value="0">Male</option>
                                                                            <option value="1">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div> 
                                                             </div>
                                                        </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="datepicker">
                                                    <input type='text' name="birthday" class="form-control datetimepicker4 form_inputs" placeholder="Birthday" />
                                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reg_chose form-group">
                                        <button type="submit" value="LogIn" herf="#" class="btn form-control login_btn"> Register</button>
                                    </div>
                            </div>
                        </form>                            
                        </div>
                        <!--<div class="col-sm-6">
                            <div class="form_man">
                                <img src="img/registration-man.png" alt="">
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
                    <img src="img/w-title-b.png" alt="">
                    
                </div>
                <div class="row">
                    <div class="col-sm-9">
                            <div class="search_option">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active"> 
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
                                <a href="search.php" class="register_angkar_btn">Search</a>
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
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="row m0">
                    <div class="blog_grid_inner sticky_slider">
                        <div class="item">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="img/blog/stories/stories-1.jpg" alt="">
                                    <div class="author_name">
                                        <h4>Maria & Kavin</h4>
                                    </div>
                                </div>
                                <!--<div class="blog_grid_content">
                                    <h3>Your Blog title here</h3>
                                    <div class="blog_grid_date">
                                        <a href="stories.php#">By David</a>
                                        <a href="stories.php#">03 Sep, 2016</a>
                                        <a href="stories.php#">Dating</a>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has a more-or-less like readable English. </p>
                                    <a href="stories.php#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="img/blog/stories/stories-2.jpg" alt="">
                                    <div class="author_name">
                                        <h4>Rocky Ahmed</h4>
                                    </div>
                                </div>
                                <!--<div class="blog_grid_content">
                                    <h3>Your Blog title here</h3>
                                    <div class="blog_grid_date">
                                        <a href="stories.php#">By David</a>
                                        <a href="stories.php#">03 Sep, 2016</a>
                                        <a href="stories.php#">Dating</a>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has a more-or-less like readable English. </p>
                                    <a href="stories.php#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="img/blog/stories/stories-3.jpg" alt="">
                                    <div class="author_name">
                                        <h4>Maria & Kavin</h4>
                                    </div>
                                </div>
                                <!--<div class="blog_grid_content">
                                    <h3>Your Blog title here</h3>
                                    <div class="blog_grid_date">
                                        <a href="stories.php#">By David</a>
                                        <a href="stories.php#">03 Sep, 2016</a>
                                        <a href="stories.php#">Dating</a>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has a more-or-less like readable English. </p>
                                    <a href="stories.php#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="img/blog/stories/stories-4.jpg" alt="">
                                    <div class="author_name">
                                        <h4>Rocky Ahmed</h4>
                                    </div>
                                </div>
                                <!--<div class="blog_grid_content">
                                    <h3>Your Blog title here</h3>
                                    <div class="blog_grid_date">
                                        <a href="stories.php#">By David</a>
                                        <a href="stories.php#">03 Sep, 2016</a>
                                        <a href="stories.php#">Dating</a>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has a more-or-less like readable English. </p>
                                    <a href="stories.php#">Read More <i class="fa fa-angle-double-right"></i></a>
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
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="img/shop/product-1.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="myprofile.php"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="img/shop/product-2.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="myprofile.php"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="img/shop/product-3.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="myprofile.php"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="img/shop/product-4.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="myprofile.php"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="img/shop/product-1.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="myprofile.php"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="img/shop/product-2.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="myprofile.php"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="img/shop/product-3.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>
                                        <li><a href="myprofile.php"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product_item">
                            <div class="product_img">
                                <img src="img/shop/product-4.jpg" alt="">
                                <div class="hover_icon">
                                    <ul>S
                                        <li><a href="myprofile.php"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
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