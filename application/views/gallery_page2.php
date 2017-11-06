<?php 
    include('include/header.php');
?> 
       <?php 
            include('include/menu.php');
        ?> 
        
        <!--================Banner Area =================Ravichandran-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Gallery"><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">Gallery<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.html">Home</a>
                    <a href="blog.html">Gallery</a>
                    <a href="blog.html">Gallery Full Width</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog grid Area =================Ravichandran-->
        <section class="blog_grid_area stories_area">
            <div class="container">
                <div class="welcome_title">
                    <h3> Our Galley</h3>
                    <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <form>
                <div class="row">                    
                     <div class="form-group pull-right">
                        <div class="btn-group ">
                             <button type="button" class=" pull-right btn btn-default dropdown-toggle " data-toggle="dropdown">
                                <span data-bind="label">Selected</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                 <li><a href="index.html#">Pondicherry</a></li>
                                  <li><a href="index.html#">Chethpet</a></li>
                                  <li><a href="index.html#">Villupuram</a></li>
                                  <li><a href="index.html#">Thiruvanamalai</a></li>
                            </ul>
                        </div>
                    </div>                    
                </div>
                </form>
                <div class="row">
                    <div class="blog_grid_inner">
                        <div class="col-md-3 col-sm-6">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo media_url(); ?>assets/img/valli/new_9651Image-(14).jpg" alt="">
                                </div>
                            </div>
                        </div>
                       <div class="col-md-3 col-sm-6">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo media_url(); ?>assets/img/valli/new_9399IMG_3835.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo media_url(); ?>assets/img/valli/new_8783IMG_3841.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo media_url(); ?>assets/img/valli/new_8338IMG_3840.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo media_url(); ?>assets/img/valli/new_6628IMG_0823.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img class="lightbox" src="<?php echo media_url(); ?>assets/img/valli/new_3201IMG_3827.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo media_url(); ?>assets/img/valli/new_2276IMG_3857.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="blog_grid_item">
                                <div class="blog_grid_img">
                                    <img src="<?php echo media_url(); ?>assets/img/valli/new_1327IMG_3868.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination_area">
                    <a class="prev" href="stories.html#">Previous</a>
                    <a class="arrow_left" href="#"><i class="fa fa-angle-left"></i></a>
                    <a class="arrow_right" href="#"><i class="fa fa-angle-right"></i></a>
                    <a class="next" href="stories.html#">Next</a>
                </div>
            </div>
        </section>
        <!--================End Blog grid Area =================Ravichandran-->
        
<?php 
    include('include/footer.php');
?> 
    </body>
</html>