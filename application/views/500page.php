<?php 
    include('include/header.php');
    include('include/menu.php');
?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Success Stories"><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">500 Error<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================--> 
         <section class="error_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="error_text">
                            <h6>Error</h6>
                            <h3>500</h3>
                            <h5>Page Not Found</h5>
                            <a class="register_angkar_btn" href="<?php echo base_url(); ?>">Go to Home Page</a>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section> 
        
<?php 
    include('include/footer.php');
?>
