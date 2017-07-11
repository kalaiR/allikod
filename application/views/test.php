<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="icon" href="img/fav-icon.png" type="image/x-icon" />-->
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Vallikodi</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="vendors/image-dropdown/dd.css" rel="stylesheet">
        <link href="vendors/image-dropdown/flags.css" rel="stylesheet">
        <link href="vendors/image-dropdown/skin2.css" rel="stylesheet">
        <link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/bs-tooltip/jquery.webui-popover.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-links.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       
       <div class="login_form_inner zoom-anim-dialog mfp-hide" id="small-dialog">
           <h4>User Login</h4>
           <form>
               <input type="text" placeholder="Username">
               <input type="password" placeholder="Password">
               <div class="login_btn_area">
                   <button type="submit" value="LogIn" class="btn form-control login_btn">LogIn</button>
                   <div class="login_social">
                       <h5>Login With</h5>
                       <ul>
                           <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                       </ul>
                   </div>
               </div>
           </form>
           <img class="mfp-close" src="img/close-btn.png" alt="">
        </div>
       
        <div class="register_form_inner zoom-anim-dialog mfp-hide" id="register_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="registration_man">
                        <img src="img/Registration_man.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registration_form_s">
                        <h4>Registration</h4>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="reg_email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_first" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="reg_pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.html#">Male</a></li>
                                        <li><a href="index.html#">Female</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="datepicker">
                                    <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
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
                        <img class="mfp-close" src="img/close-btn.png" alt="">
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
                    <a class="navbar-brand" href="http://shtheme.com/html/verodate/index.html"><img src="img/logo1.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling (selva) -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown submenu ">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="http://shtheme.com/html/verodate/index.html">Home 01</a></li>
                                <li><a href="http://shtheme.com/html/verodate/index-2.html">Home 02</a></li>
                                <li><a href="http://shtheme.com/html/verodate/index-3.html">Home 03</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown submenu">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="http://shtheme.com/html/verodate/blog.html">Blog</a></li>
                                <li><a href="http://shtheme.com/html/verodate/blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="http://shtheme.com/html/verodate/blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="http://shtheme.com/html/verodate/single-blog-fullwidth.html">Blog Single Fullwidth</a></li>
                                <li><a href="http://shtheme.com/html/verodate/single-blog-left-sidebar.html">Blog Single left sidebar</a></li>
                                <li><a href="http://shtheme.com/html/verodate/single-blog-right-sidebar.html">Blog Single right sidebar</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown submenu">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="http://shtheme.com/html/verodate/community.html">Community</a></li>
                                <li><a href="http://shtheme.com/html/verodate/members.html">Members</a></li>
                                <li><a href="http://shtheme.com/html/verodate/members-detail.html">Members Details</a></li>
                                <li><a href="http://shtheme.com/html/verodate/discussions.html">Discussions</a></li>
                                <li><a href="http://shtheme.com/html/verodate/forums.html">Forums</a></li>
                                <li><a href="http://shtheme.com/html/verodate/groups.html">Groups</a></li>
                                <li><a href="http://shtheme.com/html/verodate/matches.html">Matches</a></li>
                                <li><a href="http://shtheme.com/html/verodate/quick.html">Quick</a></li>
                                <li><a href="http://shtheme.com/html/verodate/search.html">Search</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown submenu">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="http://shtheme.com/html/verodate/shop.html">Shop</a></li>
                                <li><a href="http://shtheme.com/html/verodate/shop-left.html">Shop Left</a></li>
                                <li><a href="http://shtheme.com/html/verodate/shop-right.html">Shop Right</a></li>
                                <li><a href="http://shtheme.com/html/verodate/product-details.html">Product Details</a></li>
                                <li><a href="http://shtheme.com/html/verodate/shop-cart.html">Shop Cart</a></li>
                                <li><a href="http://shtheme.com/html/verodate/checkout.html">Checkout</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown submenu">
                            <a href="success-stories.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Success Stories</a>
                            <ul class="dropdown-menu">
                                <li><a href="post.html">Post Your Story</a></li>
                                <!--<li><a href="http://shtheme.com/html/verodate/pricing.html">Pricing</a></li>
                                <li><a href="http://shtheme.com/html/verodate/stories.html">Stories</a></li>
                                <li><a href="http://shtheme.com/html/verodate/why-us.html">Why us</a></li>
                                <li><a href="http://shtheme.com/html/verodate/404.html">Error</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Vanniyar</a>
                        </li>
                        <li class="dropdown submenu ">
                            <a href="payment.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payments</a>
                         </li>
                         <li class="dropdown submenu ">  
                            <a href="payment.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="popup-with-zoom-anim" href="index.html#small-dialog"><i class="mdi mdi-key-variant"></i>Login</a></li>
                        <li><a href="index.html#register_form" class="popup-with-zoom-anim"><i class="fa fa-user-plus"></i>Registration</a></li>
                       <!-- <li class="flag_drop">
                            <div class="selector">
                                <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                  <option value='yt' data-image="img/country-aus.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="img/country-bang.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                  <option value='yt' data-image="img/country-aus.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="img/country-bang.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                </select>
                            </div>
                        </li>-->
                    </ul>
                    </div><!-- /.navbar-collapse (selva) -->
                </div><!-- /.container-fluid  (selva)-->
            </nav>
        </header>
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="img/banner/t-left-img.png" alt="">Search Result<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <!--<a href="index.html">Home</a>
                    <a href="shop-cart.html">Pricing</a>-->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <!--================search_reslut grid Area =================-->
        <section class="shop_area shop_left_sidebar_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="product_item more-box">
                                    <div class="product_img">
                                        <img src="img/shop/product-1.jpg" alt=""> 
                                    </div>
                                    <h5>More Images</h5>
                                </div>
                            </div>
                             <div class="col-md-8 col-sm-6">
                                <div class="product_item">
                                    <div class="product_img">
                                         <h5>Vallikodi ID : VM68492</h5>
                                    </div>
                                        <table class="table ">
                                            <tr> 
                                              <td>Name</td>
                                              <td>:</td>
                                              <td>Priya</td>
                                            </tr>
                                            <tr> 
                                              <td>DOB / Age</td>
                                              <td>:</td>
                                              <td>1993-01-23 / 23</td>
                                            </tr>
                                            <tr> 
                                              <td>Star</td>
                                              <td>:</td>
                                              <td> Uttarapalguni / uthram Uuttarashda / uthrodam</td>
                                            </tr>
                                            <tr> 
                                              <td>Religion</td>
                                              <td>:</td>
                                              <td> Hindhu</td>
                                            </tr>
                                            <tr> 
                                              <td>Education</td>
                                              <td>:</td>
                                              <td>M Sc</td>
                                            </tr>
                                            <tr> 
                                              <td>Occupation</td>
                                              <td>:</td>
                                              <td>Others</td>
                                            </tr>
                                            <tr> 
                                                <td> </td>
                                                <td> </td>
                                                <td> <a href="#">View Full Details</a></td>
                                            </tr>
                                        </table>  
                                    
                                    </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="product_item more-box">
                                    <div class="product_img">
                                        <img src="img/shop/product-1.jpg" alt=""> 
                                    </div>
                                    <h5>More Images</h5>
                                </div>
                            </div>
                             <div class="col-md-8 col-sm-6">
                                <div class="product_item">
                                    <div class="product_img">
                                         <h5>Vallikodi ID : VM68492</h5>
                                    </div>
                                        <table class="table ">
                                            <tr> 
                                              <td>Name</td>
                                              <td>:</td>
                                              <td>Priya</td>
                                            </tr>
                                            <tr> 
                                              <td>DOB / Age</td>
                                              <td>:</td>
                                              <td>1993-01-23 / 23</td>
                                            </tr>
                                            <tr> 
                                              <td>Star</td>
                                              <td>:</td>
                                              <td> Uttarapalguni / uthram Uuttarashda / uthrodam</td>
                                            </tr>
                                            <tr> 
                                              <td>Religion</td>
                                              <td>:</td>
                                              <td> Hindhu</td>
                                            </tr>
                                            <tr> 
                                              <td>Education</td>
                                              <td>:</td>
                                              <td>M Sc</td>
                                            </tr>
                                            <tr> 
                                              <td>Occupation</td>
                                              <td>:</td>
                                              <td>Others</td>
                                            </tr>
                                            <tr> 
                                                <td> </td>
                                                <td> </td>
                                                <td> <a href="#">View Full Details</a></td>
                                            </tr>
                                        </table>  
                                    
                                    </div>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="product_item more-box">
                                    <div class="product_img">
                                        <img src="img/shop/product-1.jpg" alt=""> 
                                    </div>
                                    <h5>More Images</h5>
                                </div>
                            </div>
                             <div class="col-md-8 col-sm-6">
                                <div class="product_item">
                                    <div class="product_img">
                                         <h5>Vallikodi ID : VM68492</h5>
                                    </div>
                                        <table class="table ">
                                            <tr> 
                                              <td>Name</td>
                                              <td>:</td>
                                              <td>Priya</td>
                                            </tr>
                                            <tr> 
                                              <td>DOB / Age</td>
                                              <td>:</td>
                                              <td>1993-01-23 / 23</td>
                                            </tr>
                                            <tr> 
                                              <td>Star</td>
                                              <td>:</td>
                                              <td> Uttarapalguni / uthram Uuttarashda / uthrodam</td>
                                            </tr>
                                            <tr> 
                                              <td>Religion</td>
                                              <td>:</td>
                                              <td> Hindhu</td>
                                            </tr>
                                            <tr> 
                                              <td>Education</td>
                                              <td>:</td>
                                              <td>M Sc</td>
                                            </tr>
                                            <tr> 
                                              <td>Occupation</td>
                                              <td>:</td>
                                              <td>Others</td>
                                            </tr>
                                            <tr> 
                                                <td> </td>
                                                <td> </td>
                                                <td> <a href="#">View Full Details</a></td>
                                            </tr>
                                        </table>  
                                    
                                    </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <div class="s_title">
                                    <h4>Categories</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt="">Design</a></li>
                                    <li><a href="#"><img src="img/categories-list.png" alt="">Business</a></li>
                                    <li class="active"><a href="#"><img src="img/categories-list.png" alt="">Dating</a></li>
                                    <li><a href="#"><img src="img/categories-list.png" alt="">Web Design</a></li>
                                    <li><a href="#"><img src="img/categories-list.png" alt="">Featured</a></li>
                                    <li><a href="#"><img src="img/categories-list.png" alt="">Technology</a></li>
                                    <li><a href="#"><img src="img/categories-list.png" alt="">Photography</a></li>
                                </ul>
                            </aside>
                            <aside class="s_widget price_widget">
                                <div class="s_title">
                                    <h4>Select Price</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <div id="price_select"></div>
                                <div class="price_inner">
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    <a href="#">$50</a>
                                    <a href="#">$350</a>
                                </div>
                            </aside>
                            <aside class="s_widget color_widget">
                                <div class="s_title">
                                    <h4>Color</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li class="active"><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li class="active"><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </aside>
                            <aside class="s_widget l_product_widget">
                                <div class="s_title">
                                    <h4>Latest Products</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/shop/l-product/l-product-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/shop/l-product/l-product-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/shop/l-product/l-product-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/shop/l-product/l-product-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/shop/l-product/l-product-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/shop/l-product/l-product-6.jpg" alt=""></a></li>
                                </ul>
                            </aside>
                            <aside class="s_widget tags_widget tags_2">
                                <div class="s_title">
                                    <h4>Tags</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#">E Commerce</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Corporate</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="pagination_area">
                    <a class="prev" href="#">Previous</a>
                    <a class="arrow_left" href="#"><i class="fa fa-angle-left"></i></a>
                    <a class="arrow_right" href="#"><i class="fa fa-angle-right"></i></a>
                    <a class="next" href="#">Next</a>
                </div>
            </div>
        </section>
        <!--================End search_reslut grid Area =================-->

        <!--================Footer Area (selva)=================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row">
                        <!--<div class="col-md-3">
                            <aside class="f_widget">
                                <div class="vero_widget">
                                    <h4><span>Vero</span>Date</h4>
                                    <p>There are many variations of passag-es of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything .</p>
                                </div>
                            </aside>
                        </div>-->
                        <!--<div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Information</h3>
                                </div>
                                <div class="information_widget">
                                    <ul>
                                        <li><a href="stories.html#">About us</a></li>
                                        <li><a href="stories.html#">Contact us</a></li>
                                        <li><a href="stories.html#">Membership</a></li>
                                        <li><a href="stories.html#">Private Policy</a></li>
                                        <li><a href="stories.html#">Forum Support</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>-->
                        <!--<div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Recent posts</h3>
                                </div>
                                <div class="recent_post_widget">
                                    <ul>
                                        <li><a href="stories.html#">Blog Standard Post <span>14 Sep, 2016</span></a></li>
                                        <li><a href="stories.html#">Blog Image Post <span>12 Sep, 2016</span></a></li>
                                        <li><a href="stories.html#">BlogVideo Post <span>08 Sep, 2016</span></a></li>
                                        <li><a href="stories.html#">Blog Audio  Post <span>03 Sep, 2016</span></a></li>
                                        <li><a href="stories.html#">Blog Standard Post <span>16 Aug, 2016</span></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>-->
                        <!--<div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Newsletter Signup</h3>
                                </div>
                                <div class="newsletter_widget">
                                    <p>Get Alert Directly Into Your Inbox After Each Post.</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your email">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </aside>
                        </div>-->
                        <div class="col-sm-9 col-xs-20 footer_links">
                        <ul id="footer_list">
                            <li id="links_list"><a href="index.html">Home</a></li>
                            <li id="links_list"><a href="about.html">Registration</a></li>
                            <li id="links_list"><a href="matches.html">Search</a></li>
                            <li id="links_list"><a href="contact.html">Gallery</a></li>
                            <li id="links_list"><a href="contact.html">Success Stories</a></li>
                            <li id="links_list"><a href="contact.html">My Vanniyar</a></li>
                            <li id="links_list"><a href="contact.html">Payments</a></li>
                            <li id="links_list"><a href="contact.html">Contact</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="copyright_left">
                    <div class="copyright_text">
                        <h4>Copyright © 2012. <a href="index.html#"> Vallikodi Vanniar Matrimonial.</a> </h4>
                    </div>
                </div>
                <div class="copyright_right">
                    <div class="copyright_social">
                        <ul>
                            <li><a href="stories.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="stories.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="stories.html#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="stories.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="stories.html#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="stories.html#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                            <li><a href="stories.html#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            <li><a href="stories.html#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area (selva)=================-->
        
        
        
        <div id="largeContent" style="display:none;">
            <div class="media tool_content">
                <div class="media-left">
                    <img src="img/map-persion.png" alt="">
                </div>
                <div class="media-body">
                    <h3>Sandi Williams</h3>
                    <h5>21 years old</h5>
                    <h5>From Paris</h5>
                    <h5>Distance 16 km</h5>
                </div>
            </div>
        </div>
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!--RS5.0 Extensions-->
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  
        <!-- Extra plugin js -->
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="vendors/animate-css/wow.min.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootstrap-datepicker/js/moment-with-locales.js"></script>
        <script src="vendors/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/counter-up/waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>

        
        <!--<script src="js/video_player.js"></script>-->
        <script src="js/theme.js"></script>
    </body>
</html>