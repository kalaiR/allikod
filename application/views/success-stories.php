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
	                    	foreach ($results as $value){ 
	                    	 		$prefix = '';
                                    $prefix_one = 'th_';
                                    $prefix_two = 'new_';                                    
                                    if(!empty($value['image'])){
                                        $prefix_one_status = file_exists(FCPATH."assets/img/uploads/success/".$prefix_one.$value['image']);
                                        $prefix_two_status = file_exists(FCPATH."assets/img/uploads/success/".$prefix_two.$value['image']);
                                    }
		                            if(!empty($prefix_one_status))
                                        $prefix = $prefix_one;
                                    else if(!empty($prefix_two_status))
                                        $prefix = $prefix_two;
	                    	?>
				            <div class="row sucess"> 
				            	<div class="col-sm-12 suc_border_box det_border">       				            	
		                            <div class="col-sm-3 col-xs-12 sucess-box pad_bor">
		                            
		                             <img src="<?php 
                                            if(!empty($value['image'])): 
                                             echo media_url()."assets/img/uploads/success/".$prefix.$value['image']; 
                                            else:
                                             	echo media_url()."assets/img/no_image.jpg"; 
                                            endif; 
	                                 ?>" alt="Image not loaded" style="width:170px;height:170px;">

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
			                                <p>: <?php echo $value['male_name'];?></p>
			                                </div>
			                                <div class="col-sm-4 col-xs-6">	
			                                	<p>Groom Name</p>
			                                </div>
			                                <div class="col-sm-6 col-xs-6">	
			                                	<p>: <?php echo $value['female_name'];?></p>
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
									                     <?php
				                                           	$patterns = array("/\s+/", "/\s([?.!])/");
											                  $replacer = array(" ","$1");
											                  $str = preg_replace( $patterns, $replacer, $value['description'] ); 
											                                         
						                                   ?>
		                                    			<textarea id="comment" placeholder="No Comments" rows="1" disabled="disabled"><?php echo $str;?></textarea>
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
            			

						<?php
							if(!empty($links)) :
								echo "<div class='col-md-8 nopadding pull-right '>
								<div class='pagination-box clearfix'>" .$links . "
								</div>
								</div>";
							endif;
						?> 
            	</div>	
        </section>
<!--================End Blog grid Area =================-->
<?php 
    include('include/footer.php');
?>    
