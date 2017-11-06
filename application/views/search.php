<?php 
include('include/header.php');
include('include/menu.php');
?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Search People"><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">Search People Here<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <section class="advanced_search_area">
            <div class="container">
                <div class="welcome_white_title">
                    <h3>Search People Here</h3>
                    <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
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
                                            <div class="col-sm-3 aline-center-box box">
                                                <div class="height_item">      
                                                <h3 id="white">Basic Search</h3>
                                                </div>    
                                            </div>
                                            <!-- Basic Search -->
                                            <form method="post" class="box basic_search" action="search_result" id="basic_search" name="basic_search" >
                                            <span class="val_status">
                                            </span>
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
                                                                <option value="2">Female</option>
                                                                <option value="1">Male</option>
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
                                                        <div class="col-sm-5 box">                    
                                                            <select class="form-control" name="search_age_from[]" id="search_age_from">
                                                            <?php 
                                                            for($i=18;$i<=60;$i++){ ?>
                                                            <option <?php if($i==18){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                            <?php
                                                            } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-5 box">            
                                                            <select class="form-control" name="search_age_to[]" id="search_age_to">
                                                                            <?php 
                                                                            for($i=18;$i<=60;$i++){
                                                                            ?>
                                                                            <option  <?php if($i==34){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                            <?php
                                                                            }
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
                                                    <h4>Height</h4>
                                                </div>    
                                                </div>
                                                    <div class="col-sm-6 box">
                                                        <div class="col-sm-5 box">
                                                            <select class="form-control" name="height_in_cms[]" id="height_in_cms">
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
                                                                       <?php 
                                                        for($i=137;$i<=213;$i++){
                                                        ?>
                                                        <option  <?php if($i==213){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php
                                                        }
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
                                                            <h4>Marital Status</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-6 box">
                                                        <div class="col-sm-5 box">
                                                             <select class="form-control customize_plan" name="marital_status[]" id="marital_status">
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
                                                         <div class="col-sm-5 box">
                                                            <select multiple style="width:300px;" tabindex="4" class="chosen-select form-control customize_plan form_inputs" data-message="Mother Tongue" data-placeholder="Please Select" name="mother_tongue[]" id="mother_tongue">
                                                                <?php 
                                                                            if(!empty($mother_tongue)) :
                                                                            foreach ($mother_tongue as $cls_val) {
                                                                                if($cls_val['mothertongue_id'] == '1') {
                                                                                    echo "<option value='" . $cls_val['mothertongue_id'] . "' selected>" . ucfirst($cls_val['name']) . "</option>";
                                                                                }else{
                                                                                     echo "<option value='" . $cls_val['mothertongue_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                                                }    
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
                                                        <div class="col-sm-5 box">
                                                            <select multiple style="width:300px;" tabindex="4" class="chosen-select form-control" data-message="Education" data-placeholder="Please Select" name="education[]" id="education second">
                                                            <?php 
                                                            if(!empty($education_category)) :
                                                                foreach ($education_category as $cls_val) {
                                                                    if($cls_val['educationcategory_id'] == '13') {
                                                                        echo "<option value='" . $cls_val['educationcategory_id'] . "' selected>" . ucfirst($cls_val['cat_name']) . "</option>";
                                                                    }else{ 
                                                                        echo "<option value='" . $cls_val['educationcategory_id'] . "'>" . ucfirst($cls_val['cat_name']) . "</option>";
                                                                    }
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
                                                        <div class="col-sm-5 box">
                                                            <select class="form-control" id="show_profile" name="images[]">
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
                                        <form method="post" class="box basic_search" action="<?php echo base_url();?>search_result" id="advance_search_form" name="advance_search_form" >
                                        <span class="val_status"></span>
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
                                                            <option value="2">Female</option>
                                                            <option value="1">Male</option>
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
                                                    <div class="col-sm-5 box">
                                                        <select class="form-control customize_plan" name="country[]" id="country" placeholder="Country Name">
                                                        <option value="">Select</option>
                                                        <?php
                                                        if(!empty($country)) :
                                                        foreach ($country as $cls_val) {
                                                            if($cls_val['country_id']=='93'){
                                                            echo "<option value='".$cls_val['country_id']."' selected>". ucfirst($cls_val['name'])."</option>";  
                                                            }else{
                                                            echo "<option value='" . $cls_val['country_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                            }            
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
                                                        <h4>Occupation</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-6 box">
                                                    <div class="col-sm-5 box">
                                                        <select class="form-control" name="occupation[]"  id="occupation">
                                                            <option value="">Select</option>
                                                            <?php 
                                                                if(!empty($occupation_category)) :
                                                                foreach ($occupation_category as $cls_val) {
                                                                echo "<option value='" . $cls_val['occ_category_id'] . "'>" . ucfirst($cls_val['occupation_name']) . "</option>";
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
                                                        <h4>Physical Status</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-6 box">
                                                    <div class="col-sm-5 box">
                                                        <select class="form-control" name="phy_status[]" id="phy_status">      
                                                            <option value="1" selected>Normal</option>
                                                            <option value="2">Physically challenged</option>
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
                                                    <div class="col-sm-6 box">
                                                       
                                                        <select class="form-control" name="search_age_from[]" id="search_age_from">
                                                                    <?php 
                                                                    for($i=18;$i<=60;$i++){ ?>
                                                                    <option <?php if($i==18){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                    <?php
                                                                    } ?>
                                                                    </select>
                                                        </div>
                                                        <div class="col-sm-6 box">            
                                                            <select class="form-control" name="search_age_to[]" id="search_age_to">
                                                                            <?php 
                                                                            for($i=18;$i<=60;$i++){
                                                                            ?>
                                                                            <option  <?php if($i==34){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                            <?php
                                                                            }
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
                                                        <h4>Height</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-6 box">
                                                    <div class="col-sm-6 box">
                                                        <select class="form-control" name="height_in_cms[]" id="height_in_cms">
                                                                    <?php 
                                                    for($i=137;$i<=213;$i++){
                                                    ?>
                                                    <option  <?php if($i==137){?> selected="selected" <?php } ?>  value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                                </select>
                                                    </div>
                                                     <div class="col-sm-6 box">            
                                                        <select class="form-control" name="height_in_feets[]" id="height_in_feets">
                                                                   <?php 
                                                    for($i=137;$i<=213;$i++){
                                                    ?>
                                                    <option  <?php if($i==213){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php
                                                    }
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
                                                        <h4>Marital Status</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-6 box">
                                                    <div class="col-sm-5 box">
                                                         <select class="form-control customize_plan" name="marital_status[]" id="marital_status">
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
                                                     <div class="col-sm-5 box">
                                                        <select multiple style="width:300px;" tabindex="4" class="chosen-select form-control customize_plan form_inputs" data-message="Mother Tongue" data-placeholder="Please Select" name="mother_tongue[]" id="mother_tongue second">
                                                            <?php 
                                                                        if(!empty($mother_tongue)) :
                                                                        foreach ($mother_tongue as $cls_val) {
                                                                                if($cls_val['mothertongue_id'] == '1') {
                                                                                    echo "<option value='" . $cls_val['mothertongue_id'] . "' selected>" . ucfirst($cls_val['name']) . "</option>";
                                                                                }else{
                                                                                    echo "<option value='" . $cls_val['mothertongue_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                                                }    
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
                                                    <div class="col-sm-5 box">                          

                                                        <select multiple style="width:300px;" tabindex="4" class="chosen-select form-control" data-message="Education" data-placeholder="Please Select" name="education[]" id="education second">
                                                        <?php 
                                                        if(!empty($education_category)) :
                                                            foreach ($education_category as $cls_val) {
                                                                if($cls_val['educationcategory_id'] == '13') {
                                                                    echo "<option value='" . $cls_val['educationcategory_id'] . "' selected>" . ucfirst($cls_val['cat_name']) . "</option>";
                                                                }else{ 
                                                                    echo "<option value='" . $cls_val['educationcategory_id'] . "'>" . ucfirst($cls_val['cat_name']) . "</option>";
                                                                }
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
                                                     <div class="col-sm-5 box">
                                                        <select class="form-control" id="show_profile" name="images[]">
                                                            <option value="both">Both</option>
                                                            <option value="with_photo">With Photo</option>
                                                            <option value="without_photo">Without Photo</option>
                                                        </select>
                                                    </div>
                                                <span id="show_profile_error" class="registration-error"></span>
                                                </div>
                                            </div>        
                                        </div> 
                                        <input type="hidden" name="search_type" value="advance_search" id="search_type"/>
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" /> 
                                        <div class="search_btn">
                                        <button type="submit" value="LogIn" class="btn form-control login_btn" id="search_type" name="" value="search_type">Search</button>
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
                                <form method="post" class="box basic_search" action="search_result" id="search_id" name="search_id" >
                                	<span class="val_status"></span>
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box" id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control valli_id form_inputs" data-message="vallikodi ID"  id="searchby_id" name="searchby_id" placeholder="" value="">      
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
                                    <form method="post" class="box basic_search" action="search_result" id="search_manual" name="search_manual" >
                                    	<span class="val_status"></span>
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box " id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control man_id form_inputs" data-message="manual ID" id="search_manual_id" name="search_manual_id" placeholder="">      
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
                                        <input type="hidden" name="search_type" value="search_manual_type" id="search_manual_type" value="search_manual_type" />
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
                                    <form action="<?php echo base_url(); ?>search_result" class="box basic_search" method="post" id="search_dhosham" name="search_dhosham">
                                    	<span class="val_status"></span>
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box" id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                             <div class="col-sm-6 ">
                                                                    <div class="height_item">
                                                                     <select class="selectpicker form_inputs form-field-error" data-message="dhosham" name="dhosham[]" id="dhosham">
                                                                           <option value="">Select</option>
                                                                               <?php 
                                                                                if(!empty($dhosham)) :
                                                                                    foreach ($dhosham as $cls_val) {
                                                                                        echo "<option value='" . $cls_val['dhosham_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                                                    }
                                                                                endif;
                                                                                ?>
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
                                            <!-- <div class="col-sm-6 aline-center-box ">
                                                <div class="col-sm-6 ">
                                                    <form>
                                                        <div class="col-sm-6 ">
                                                            <input style="width: 160px" type="text" name="" class="form-control">
                                                        </div>     
                                                    </form>
                                                </div>                                                    
                                            </div>  -->                                          
                                        </div> 
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                        <input type="hidden" name="search_type" id="search_dhosham" value="search_dhosham" />
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
