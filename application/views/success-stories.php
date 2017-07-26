<?php 
include('include/header.php');
include('include/menu.php');
?> 
<!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">Success Stories<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
                    <!--<a href="index.html">Home</a>
                    <a href="shop-cart.html">Pricing</a>-->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <!--================Blog grid Area =================-->
        <section class="blog_grid_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 aline-center-box">
                    	<div class="col-sm-12">
	                        <div class="blog_details_content">
	                            <div class="single_blog_image">
	                                <h3>Post your success stories here !</h3>
	                            </div>    
	                        </div>        
	                    </div>
	                    	<?php 
	                    	if(!empty($results)){	                    		                    	
	                    	foreach ($results as $value) { ?>
				            <div class="row sucess"> 
				            	<div class="col-sm-12">        
		                            <div class="col-sm-3 col-xs-12 sucess-box">
			                             <img src="<?php echo media_url(); ?>assets/img/sucess/stories-4.jpg" class="img-thumbnail image-box " alt="">   
		                             </div>
		                             	<div class="col-sm-5 text-box">
		                                	<div class="col-sm-4 col-xs-6">
			                                	<p>Vallikodi ID</p>
			                                </div>
			                                <div class="col-sm-6 col-xs-6">
			                                	<p>: <?php echo $value['vallikodi_id'];?></p>
			                                </div>
			                                <div class="col-sm-4 col-xs-6">		
			                                	<p>Bride Name </p>
			                                </div>
			                                <div class="col-sm-6 col-xs-6">
			                                <p>: <?php echo $value['female_name'];?></p>
			                                </div>
			                                <div class="col-sm-4 col-xs-6">	
			                                	<p>Groom Name</p>
			                                </div>
			                                <div class="col-sm-6 col-xs-6">	
			                                	<p>: <?php echo $value['male_name'];?></p>
		                             		</div>
		                             		<div class="col-sm-4 col-xs-6">
			                                	<p>Marriage Date</p>
		                             		</div>
		                             		<div class="col-sm-6 col-xs-6">
			                                <p>: <?php echo $value['marriage_date'];?></p>
		                             		</div>
		                             		
		                             	</div>
		                             <div class="col-sm-4 text-box">
		                              	<div class="comment_form_area">
		                              		<div class="row">
		                              			<form action="<?php echo base_url(); ?>success_stories"class=" form_inner">
			                              			<div class="form-group col-md-12 sucess-box">
		                                    			<textarea id="comment" placeholder="Comment" rows="1" disabled="disabled"><?php echo $value['description'];?></textarea>
		                                    			<!-- <div class="form-group col-md-5 sucess-box  ">
	                                    					 <button type="submit" value="LogIn" class="btn form-control login_btn">Submit</button> 
	                                					</div> -->
		                                			</div>		
		                                		</form>	
		                              		</div>
		                             	</div>	
		                        	</div>
		                        </div>	
	                		</div>
	                		<?php 
	                		}
	                	}
	                	?>	
            		</div>
            			<!-- <div class="row">
            				<div class="pagination_area">
	                            <a class="prev" href="<?php echo base_url();?>success_stories">Previous</a>
	                            <a class="arrow_left" href="<?php echo base_url();?>success_stories"><i class="fa fa-angle-left"></i></a>
	                            <a class="arrow_right" href="<?php echo base_url(); ?>success_stories"><i class="fa fa-angle-right"></i></a>
	                            <a class="next" href="<?php echo base_url(); ?>success_stories">Next</a>
                        	</div>
            			</div> -->
            	</div>	
        </section>
<!--================End Blog grid Area =================-->
<?php 
    include('include/footer.php');
?>    
