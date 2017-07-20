<?php 
include('include/header.php');
include('include/menu.php');
?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="<?php echo base_url(); ?>assets/img/banner/t-left-img.png" alt="">Search People Here<img class="right_img" src="<?php echo base_url(); ?>assets/img/banner/t-right-img.png" alt="">
                    </h3>
                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <section class="advanced_search_area">
            <div class="container">
                <div class="welcome_white_title">
                    <h3>Search People Here</h3>
                    <img src="<?php echo base_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="search_option">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="search.html#base" aria-controls="bases" role="tab" data-toggle="tab">Basic Search</a></li>
                         <li role="presentation" class="#"><a href="search.html#advanced-search" aria-controls="advanced-search" role="tab" data-toggle="tab">Advanced Search</a></li>
                        <li role="presentation" class="#"><a href="search.html#vallikodi" aria-controls="vallikodi" role="tab" data-toggle="tab">Search By Vallikodi ID</a></li>
                        <li role="presentation" class="#"><a href="search.html#manual-id" aria-controls="manual-id" role="tab" data-toggle="tab"> Search By Manual ID</a></li>
                         <li role="presentation" class="#"><a href="search.html#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab"> Search By Dhosham</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="base">
                            <div class="registration_form_are">
                        	 	 <div class="row">
                        	 	 	<div class="col-sm-12 aline-center-box">
                        	 	 		<div class="registration_form_s form-box aline-center-box">
                        	 	 			 <div class="col-sm-2 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3 id="white">Basic Search</h3>
                                                </div>    
                                             </div>
                                             <!-- Basic Search -->
                        	 	 			 <form method="post" class="box" action="search_result" id="basic_search" name="basic_search" >                                              
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Gender</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="col-sm-5 box">
                                                                    <select class="form-control" name="gender[]" id="gender">
                                                                        <option value="">Select</option>
                                                                        <option value="1">Male</option>
                                                                        <option value="2">Female</option>
                                                                    </select>
                                                                </div>
                                                                 <span id="gender_error" class="registration-error"></span>
                                                            </div>
                                                        </div>        
                                                </div>	
                        	 	 		        <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Age</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="col-sm-5 box">
                                                                   
                                                                    <select class="form-control" name="search_age_from[]" id="search_age_from">
                                                                                <option value="">Select</option>
                                                                                <?php 
                                                                                for($i=18;$i<=60;$i++){ ?>
                                                                                <option <?php if($i==18){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                                <?php
                                                                                } ?>
                                                                                </select>
                                                                    </div>
                                                                    <div class="col-sm-5 box">            
                                                                        <select class="form-control" name="search_age_to[]" id="search_age_to">
                                                                                        <option value="">Select</option>
                                                                                        <?php 
                                                                                        for($i=18;$i<=60;$i++){
                                                                                        ?>
                                                                                        <option  <?php if($i==34){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                        </select>
                                                                    </div>
                                                                    <span id="search_age_from_error" class="registration-error"></span>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Height</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="col-sm-5 box">
                                                                    <select class="form-control" name="height_in_cms[]" id="height_in_cms">
                                                                                <option value="">Select</option>
                                                                                <?php 
                                                    for($i=137;$i<=213;$i++){
                                                    ?>
                                                    <option  <?php if($i==137){?> selected="selected" <?php } ?>  value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                                            </select>
                                                                </div>
                                                                 <div class="col-sm-5 box">            
                                                                    <select class="form-control" name="height_in_feets[]" id="height_in_feets">
                                                                                <option value="">Select</option>
                                                                               <?php 
                                                    for($i=137;$i<=213;$i++){
                                                    ?>
                                                    <option  <?php if($i==213){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                                            </select>
                                                                </div>
                                                                 <span id="height_in_cms_error" class="registration-error"></span>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Marital Status</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="col-sm-5 box">
                                                                     <select class="form-control customize_plan" name="marital_status[]" id="marital_status">                    
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
                                                                <span id="marital_status_error" class="registration-error"></span>
                                                            </div>
                                                        </div>        
                                                </div>
                                                 <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Mother Tongue</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                 <div class="col-sm-5 box">
                                                                    <select class="form-control customize_plan" name="mother_tongue[]" id="mother_tongue">
                                                                              <option value="">Select</option>
                                                                        <?php 
                                                                                    if(!empty($mother_tongue)) :
                                                                                    foreach ($mother_tongue as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['mothertongue_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                                                    }
                                                                                endif;
                                                                                ?>
                                                                        </select> 
                                                                </div>
                                                                <span id="mother_tongue_error" class="registration-error"></span>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Education</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="col-sm-5 box">
                                                                    <select class="form-control" name="education[]" id="education">
                                                                               <option value="">Select</option>
                                                                                <?php 
                                                                                    if(!empty($education)) :
                                                                                    foreach ($education as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['education_id'] . "'>" . ucfirst($cls_val['edu_name']) . "</option>";
                                                                                    }
                                                                                endif;
                                                                                ?>
                                                                    </select>
                                                                </div>
                                                                <span id="education_error" class="registration-error"></span>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Show Profile</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                 <div class="col-sm-5 box">
                                                                    <select class="form-control" name="" id="show_profile">
                                                                        <option value="">Select</option>
                                                                        <option value="both">Both</option>
                                                                        <option value="with_photo">With Photo</option>
                                                                        <option value="without_photo">Without Photo</option>
                                                                    </select>
                                                                </div>
                                                                <span id="show_profile_error" class="registration-error"></span>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                                <input type="hidden" name="search_type" value="basicsearch" id="search_type"/>

                                                <div class="search_btn">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn" id="basic_search">Search</button>
                                                </div>
                        	 	 			 </form>
                                            
                                             <!-- Basic Search -End Here--> 
                        	 	 		</div>
                        	 	 	</div>
                        	 	 </div>
                        	 </div>  
        			     </div>
                            <div role="tabpanel" class="tab-pane fade in" id="advanced-search">
                                <div class="registration_form_are">
                                 <div class="row">
                                    <div class="col-sm-12 aline-center-box">
                                        <div class="registration_form_s form-box aline-center-box">
                                             <div class="col-sm-3 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3  id="white">Advanced Search</h3>
                                                </div>    
                                             </div>
                                             <form class="box" action="<?php echo base_url(); ?>search_result">
                                              
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Gender</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Male</option>
                                                                        <option>Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Location</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>India</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Ocuppation</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Admin</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Physical Status</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Normal</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>   
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Age</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>18</option>
                                                                        <option>20</option>
                                                                    </select>
                                                                    <select class="selectpicker">
                                                                        <option>21</option>
                                                                        <option>24</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Height</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>180 Cm</option>
                                                                        <option>200 Cm</option>
                                                                    </select>
                                                                    <select class="selectpicker">
                                                                        <option>210 Cm</option>
                                                                        <option>240 Cm</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Marital Status</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="form-control">
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
                                                            </div>
                                                        </div>        
                                                </div>
                                                 <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Mother Tongue</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                     <option value="">Select</option>
                                                                        <?php 
                                                                                    if(!empty($mother_tongue)) :
                                                                                    foreach ($mother_tongue as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['mothertongue_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                                                    }
                                                                                endif;
                                                                                ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Education</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option value="">Select</option>
                                                                                <?php 
                                                                                    if(!empty($education)) :
                                                                                    foreach ($education as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['education_id'] . "'>" . ucfirst($cls_val['edu_name']) . "</option>";
                                                                                    }
                                                                                endif;
                                                                                ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Show Profile</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Both</option>
                                                                        <option>With Photo</option>
                                                                        <option>Without Photo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                    <div class="search_btn">
                                                        <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                    </div>
                                             </form>
                                        </div>
                                    </div>
                                 </div>
                             </div>       	            	
            	           </div>
                           <div role="tabpanel" class="tab-pane fade in" id="vallikodi">
                                <div class="registration_form_are">
                                    <div class="row">
                                        <div class="col-sm-12 aline-center-box">
                                            <div class="registration_form_s form-box aline-center-box">
                                                <div class="col-sm-3 aline-center-box box">
                                                    <div class="height_item">      
                                                        <h3  id="white">Search By Vallikodi ID</h3>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <form method="post" class="box" action="search_result" id="search_id" name="search_id" >
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box" id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="searchby_id" name="searchby_id" placeholder="" value="">      
                                                            </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 butn-box">
                                                <div class="reg_chose form-group ">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                </div>
                                            </div>                                           
                                        </div>
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                        <input type="hidden" name="search_type" value="search_id" id="search_type"/>
                                    </form>        
                                </div>     
                           </div>
                           <div role="tabpanel" class="tab-pane fade in" id="manual-id">
                                <div class="registration_form_are">
                                    <div class="row">
                                        <div class="col-sm-12 aline-center-box">
                                            <div class="registration_form_s form-box aline-center-box">
                                                <div class="col-sm-3 aline-center-box box">
                                                    <div class="height_item">      
                                                        <h3  id="white">Search By Manual ID</h3>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <form  action="<?php echo base_url(); ?>search_result">
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box" id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="bride_name" placeholder="">      
                                                            </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 butn-box">
                                                <div class="reg_chose form-group ">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </form>        
                                </div>     
                           </div>
                            
                            <div role="tabpanel" class="tab-pane fade in" id="dh-id">
                                <div class="registration_form_are">
                                    <div class="row">
                                        <div class="col-sm-12 aline-center-box">
                                            <div class="registration_form_s form-box aline-center-box">
                                                <div class="col-sm-3 aline-center-box box">
                                                    <div class="height_item">      
                                                        <h3  id="white"> Search By Dhosham</h3>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <form  action="<?php echo base_url(); ?>search_result">
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box" id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                             <div class="col-sm-6 ">
                                                                    <div class="height_item">
                                                                        <select class="selectpicker">
                                                                            <option>Naga Dhosam</option>
                                                                            <option>Chevvai Dhosam</option>
                                                                            <option>Raghu Kedhu Dhosam</option>
                                                                        </select>
                                                                    </div>
                                                                </div>     
                                                            </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 butn-box">
                                                <div class="reg_chose form-group ">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                </div>
                                            </div>                                           
                                        </div> 
                                    </form>       
                                </div>     
                           </div>
                    </div>
            </div>        	    
					 
        </section>           
                    
<?php 
    include('include/footer.php');
?> 
    </body>
</html>