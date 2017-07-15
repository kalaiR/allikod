<div class="login_form_inner zoom-anim-dialog mfp-hide" id="small-dialog">
   <h4>User Login</h4>
   <form method="post" action="<?php echo base_url(); ?>">
       <input type="text" placeholder="Username">
       <input type="password" placeholder="Password">
       <div class="login_btn_area">
           <button type="submit" value="LogIn" class="btn form-control login_btn">LogIn</button>
           <div class="login_social">
              <h5>Not yet?</h5>
              <a href="<?php echo base_url(); ?>registration">Register</a>
               <!-- <ul>  
                   <li><a href="index.html"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="index.html"><i class="fa fa-google-plus"></i></a></li>
               </ul> -->
           </div>
       </div>
   </form>
   <img class="mfp-close" src="<?php echo base_url(); ?>assets/img/close-btn.png" alt="">
</div>
       
        <div class="register_form_inner zoom-anim-dialog mfp-hide" id="register_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="registration_man">
                        <img src="<?php echo base_url(); ?>assets/img/Registration_man.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registration_form_s">
                        <h4>Registration</h4>
                         <form method="post" action="<?php echo base_url(); ?>registration">
                             <div class="form-group">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span data-bind="label">Registered By</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo base_url(); ?>#">Self</a></li>
                                        <li><a href="<?php echo base_url(); ?>#">Friend</a></li>
                                        <li><a href="<?php echo base_url(); ?>#">Brother</a></li>
                                        <li><a href="<?php echo base_url(); ?>#">Sister</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_Name" placeholder="Name">
                            </div>
                                <!--
                            <div class="form-group">
                                <input type="password" class="form-control" id="reg_con_pass2" placeholder=" Confirm Password">
                            </div>-->
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_Religion" placeholder="Religion">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_Mobile" placeholder="Mobile">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="reg_email" placeholder="Email">
                            </div>                                   
                            <div class="form-group">
                                <input type="password" class="form-control" id="reg_pass" placeholder="Password">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo base_url(); ?>#">Male</a></li>
                                                <li><a href="<?php echo base_url(); ?>#">Female</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="datepicker">
                                            <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reg_chose form-group">
                                <div class="reg_check_box">
                                    <input type="radio" id="s-option" name="selector">
                                    <label for="s-option">I`m Not Robot</label>
                                    <div class="check"><div class="inside"></div></div>
                                </div>
                                <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                            </div>
                        </form>
                        <img class="mfp-close" src="<?php echo base_url(); ?>assets/img/close-btn.png" alt="">
                    </div>
                </div>
            </div>
        </div>
       
        <!--================Frist Main hader Area (selva)=================-->
         <header class="header_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display (selva)-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo1.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling (selva) -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li id="home"><a href="<?php echo base_url(); ?>">Home</a></li>
                            
                        <li id="reg"><a href="<?php echo base_url(); ?>registration">Registration</a></li>
                         <li id="search"><a href="<?php echo base_url(); ?>search">Search</a></li>
                         <li id="gallery"><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                         <li id="stories" class="dropdown submenu">
                            <a href="<?php echo base_url(); ?>success_stories">Success Stories</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>post_success">Post Your Story</a></li>
                                <!-- <li><a href="http://shtheme.com/html/verodate/shop-left.html">Shop Left</a></li>
                                <li><a href="http://shtheme.com/html/verodate/shop-right.html">Shop Right</a></li>
                                <li><a href="http://shtheme.com/html/verodate/product-details.html">Product Details</a></li>
                                <li><a href="http://shtheme.com/html/verodate/shop-cart.html">Shop Cart</a></li>
                                <li><a href="http://shtheme.com/html/verodate/checkout.html">Checkout</a></li> -->
                            </ul>
                        </li>
                        <li id="vanniyar"><a href="<?php echo base_url(); ?>vanniyar">My Vanniyar</a></li>
                         <li id="payment"><a href="<?php echo base_url(); ?>payment">Payment</a></li>
                        <li id="contact"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                        <!-- <li class="dropdown submenu">
                            <a href="success-stories.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, Madhi <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>mymatches">Matches</a></li>
                                <li><a href="<?php echo base_url(); ?>myprofile">My Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>">Logout</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li id="login"><a class="popup-with-zoom-anim" href="#small-dialog"><i class="mdi mdi-key-variant"></i>Login</a></li>
                        <li id="register"><a href="#register_form" class="popup-with-zoom-anim"><i class="fa fa-user-plus"></i>Registration</a></li>
                    </ul>
                    </div><!-- /.navbar-collapse (selva) -->
                </div><!-- /.container-fluid  (selva)-->
            </nav>
        </header>
        <!--================Frist Main hader Area (selva)=================-->