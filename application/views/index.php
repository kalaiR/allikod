<?php 
    include('include/header.php');
    include('include/menu.php');
	$user_session = $this->session->userdata("login_status");
    $user_session_data = $this->session->userdata("login_session");
?> 
        
        <!--================Slider Reg Area (selva)=================-->
        <section class="slider_area scroll_icon">        	
            <div class="slider_inner">
                <div class="rev_slider"  data-version="5.3.0.2" id="home-slider">
                    <ul> 
                       <!-- <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <img src="<?php //echo media_url(); ?>assets/img/slider-img/slider-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                          
                        </li> -->
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo media_url(); ?>assets/img/slider-img/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <?php  if($user_session){ ?>
                            <a href="#" class="scroll-down" address="true"></a>
                            <?php } ?>
                        </li>                        
                    </ul> 
                </div><!-- END REVOLUTION SLIDER -->
            </div>
            <div class="registration_form_area"><!--Ravichandran Adding fields -->
            	<!-- <a href="#" class="scroll-down" address="true"></a> -->            
                <div class="container">
                <marquee overflow="hidden"><img src="<?php echo media_url(); ?>assets/img/scroll_text.png"></marquee>
                    <div class="row">
                    <!-- <marquee overflow="hidden"><img src="<?php //echo media_url(); ?>assets/img/scroll_text.png"></marquee> -->
                        <div class="col-sm-6">
                        	<?php 
                            // if(empty($this->session->userdata("login_status"))){ 
                            // $user_session = $this->session->userdata("login_status");
                            // $user_session_data = $this->session->userdata("login_session");
                            if (empty($user_session)){
                        ?>
                            <div class="registration_form_s" style="background-color:rgba(255,255,255,0.9)">
                                <h4>Registration</h4>                                	
                                <form method="post" action="<?php echo base_url(); ?>index" name="index_reg" id="" class="reg_formss">
                                <!-- <span class="val_status"></span> -->
                                 <p class='val_error val_status'></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span data-bind="label" class="text-font">Registered By *</span>
                                         </div>
                                        <div class="col-md-6">  
                                            <div class="form-group">
                                                    <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <span data-bind="label">Registered By</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                                    </button> -->
                                                    <!-- <ul class="dropdown-menu" role="menu">
                                                        <li><a href="<?php //echo base_url(); ?>#">Self</a></li>
                                                        <li><a href="<?php //echo base_url(); ?>#">Friend</a></li>
                                                        <li><a href="<?php //echo base_url(); ?>#">Brother</a></li>
                                                        <li><a href="<?php //echo base_url(); ?>#">Sister</a></li>
                                                    </ul> -->
                                                    
                                                    <select class="form-control customize_plan form_inputs" name="register_by[]" id="register_by" data-message="Registered By"  placeholder="RegisterBy-Name">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font">Name *</span>
                                         </div>
                                        <div class="col-md-6">  
                                            <div class="form-group">
                                                <input type="text" class="form-control form_inputs" id="reg_Name" value="" data-message="User Name" placeholder="Your Name" name="reg_Name" value="">
                                            </div>
                                        </div>    
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font">Age *</span>  
                                         </div>
                                        <div class="col-md-6">     
                                            <div class="form-group">
                                                <input type="text" class="form-control form_inputs age_regs age_regss" id="reg_age" data-message="Age" placeholder="Your Age" name="reg_age" value="">
                                            </div>
                                        </div>    
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span data-bind="label" class="text-font">Country *</span>
                                         </div>
                                        <div class="col-md-6">    
                                            <div class="form-group">
                                                <select class="form-control customize_plan form_inputs country" name="country[]" data-message="Country" id="country" placeholder="Country Name" value="">
                                                        <option value="">Select</option>
                                                        <?php
                                                        if(!empty($country)) :
                                                            foreach ($country as $cls_val) {
                                                                if(strtolower($cls_val['name']) == "india" )
                                                                    echo "<option value='" . $cls_val['name'] . "' selected>" . ucfirst($cls_val['name']) . "</option>";    
                                                                else
                                                                    echo "<option value='" . $cls_val['name'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                            }
                                                        endif;
                                                        ?>
                                                    </select>
                                                    
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 box">
                                           <span data-bind="label" class="text-font">Mother Tongue *</span>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                                                
                                                <select class="form-control customize_plan form_inputs mother_tongue" name="mother_tongue[]" data-message="Mother Tongue" id="mother_tongue" placeholder="MotherTongue" value="">
                                                        <option value="">Select</option>
                                                        <?php
                                                        if(!empty($mother_tongue)) :
                                                            foreach ($mother_tongue as $cls_val) {
                                                                if(strtolower($cls_val['name']) == "tamil" )
                                                                    echo "<option value='" . $cls_val['mothertongue_id'] . "' selected>" . ucfirst($cls_val['name']) . "</option>";    
                                                                else
                                                                    echo "<option value='" . $cls_val['mothertongue_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                            }
                                                        endif;
                                                        ?>
                                                    </select>
                                                    
                                            </div>
                                        </div>         
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font">Mobile *</span>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form_inputs mob_num mobile_value" id="reg_Mobile" data-message="Mobile" name="reg_Mobile" placeholder="Mobile Number" value="">
                                               
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                         <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font">Email *</span>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form_inputs email_value" id="reg_email2" name="reg_email2" data-message="Email"  placeholder="Email Id" value="">
                                               
                                            </div>
                                         </div>   
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font"> Password *</span>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control form_inputs reg_pass2" id="reg_pass2" data-message="Password" name="reg_pass2" placeholder="Password" value="">
                                
                                            </div>
                                        </div>   
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span data-bind="label" class="text-font">Gender *</span>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control customize_plan form_inputs gender" name="gender[]" data-message="Gender" id="gender" value="">
                                                        <option value="">Select</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="datepicker">
                                                    <input type='text' class="form-control datetimepicker4 form_inputs" placeholder="Birthday" name="dob" id="dob" />
                                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                    <div class="reg_chose form-group">
                                        <!--  Here popup-with-zoom-anim class required for registration popup successful -->
                                        <!-- <button type="submit" value="LogIn" class="btn form-control login_btn popup-with-zoom-anim" href="#reg_form">Register</button> -->
                                        <button type="submit" value="LogIn" class="btn form-control form_inputs login_btn" href="#reg_form">Register</button>
                                    </div>
                                      <!-- <div id="simpleModals" class="modals modalqreg_act">
											<div class="modals-content">
												  <p class="edit_error"></p>
													<a href="<?php echo base_url(); ?>myprofile" class="btn form-control edit_btn pull-right">Ok</a>
											</div>		
									</div> -->  
                                </form>
                            </div>
                            <?php }?>
                        </div>
                        <div class="col-sm-6">
                            <div class="form_man">
                                <img src="<?php echo media_url(); ?>assets/img/offer.jpg" alt="">
                            </div>
                        </div>
                        <!-- <div class="home_ban_text text-center blink-image">
                            <p>மருத்துவர் ஐயா அவர்களின் பிறந்த நாளை முன்னிட்டு வள்ளிக்கொடியில் சிறப்பு சலுகை கட்டணம் - 25 ஜூலை 2018 முதல் 31 ஜூலை 2018 வரை</p>
                            <p>இணையதளத்தில் பதிவு - 3-மாதம் - <span style="text-decoration: line-through;">Rs: 2500/-</span> Rs: 1500/-</p>
                            <p>இணையதளத்தில் பதிவு - 6-மாதம் - <span style="text-decoration: line-through;">Rs: 4000/-</span> Rs: 3000/-</p>
                            <div><img class="blink-image    " src="<?php //echo media_url(); ?>assets/img/special.png" width="150px"alt=""/></div>
                        </div> -->
                        <!-- <div class="home_ban_text text-center blink-image">
                            <h3>Special Offer</h3>
                            <p>*Online registration 3 months - <span style="text-decoration: line-through;">Rs: 2500/-</span> -> 1500/- only   </p>
                            <p>*Online registration 6 months - <span style="text-decoration: line-through;">Rs: 4000/-</span> -> 3000/- only</p>
                            <p class="offerdate">From 25th - 31st july 2018 </p>
                        </div> -->
                    </div>
                </div>
            </div>
           <section></section>
        </section>
        <!--================End Slider Reg Area =================-->
         <!--================Advanced Search Area (selva)=================-->
        <section class="advanced_search_area search_area2 ok">
            <div class="container">
                <div class="welcome_title">
                    <h3>Quick Search</h3>
                    <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                    
                </div>
                <form method="post" class="box basic_search" action="<?php echo base_url(); ?>search_result" id="quick_search" name="quick_search" >
                <div class="row">
                    <div class="col-sm-9">
                            <div class="search_option">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="height_item">
                                            <h4>Looking for a</h4>
                                            <select class="selectpicker" name="gender[]" id="gender" >
                                                <option value="2">Bride</option>
                                                <option value="1">Groom</option>
                                            </select>
                                        </div>
                                        <div class="height_item">
                                            <h4>From (age)</h4>
                                                <select class="selectpicker" name="search_age_from[]" id="search_age_from">
                                                                                <?php 
                                                                                for($i=18;$i<=60;$i++){ ?>
                                                                                <option <?php if($i==18){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                                <?php
                                                                                } ?>
                                                                                </select>
                                        </div>
                                        <div class="height_item">
                                            <h4>To (age)</h4>
                                            <select class="selectpicker" name="search_age_to[]" id="search_age_to">
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
                     </div>
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                     <input type="hidden" name="search_type" value="quick_search" id="quick_search"/>
                        <div class="col-sm-3">
                            <div class="search_btn">                                
                                <button type="submit" value="" class="btn form-control login_btn">Search</button>
                            </div>
                        </div>
                 </div> 
                 </form>
            </div>               
        </section>
    <!--================Advanced Search Area (selva)=================--> 
    <!--================Success (selva)=================--> 
    <!-- <section class="register_members_slider">
            <div class="container">
                <div class="welcome_title">
                    <h3>Success Stories</h3>
                     <img src="<?php// echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="row">
                        <div class="r_members_inner">
                            <?php //print_r($success_stories); 
                                //if(!empty($success_stories)) :
                                //foreach ($success_stories as $suc) :
                            ?>
                                <div class="product_div">
                                    <img src="<?php //if(!empty($suc['image'])) echo media_url()."assets/img/uploads/success/".$suc['image']; else echo media_url()."assets/img/no_image.jpg" ?>"class="product_div" alt="Image">
                                        <div class="overlay">
                                            <div class="success-text"><?php //echo $suc['male_name']."&". $suc['female_name'] ?></div>
                                     </div>
                                </div>       
                            <?php
                             // endforeach;
                             //endif;
                            ?>
                        </div>
                </div>    
            </div>
    </section>  -->
     <!-- <section class="adms_slider_area">
            <div class="container">
            	<div class="welcome_title">
                    <h3>Success Stories</h3>
                    <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="adms_inners">
                    <div class="adms_slider_inners">
                        <div class="slider_adms_active team_inner_area">                            
                             <?php //print_r($success_stories); 
                                if(!empty($success_stories)) :
                                foreach ($success_stories as $suc) :
                            ?>
                            <div class="item">
                                <div class="test_div product_test_div">
                                        <img src="<?php if(!empty($suc['image'])) echo media_url()."assets/img/uploads/success/th_".$suc['image']; else echo media_url()."assets/img/no_image.jpg" ?>"class="img_divs owl-lazy" alt="Image">
                                        <div class="overlay">
                                            <div class="success-text"><p><?php echo $suc['male_name']."&". $suc['female_name'] ?></p>
                                            </div>
                                        </div> 
                               </div>    
                            </div>
                            <?php
                              endforeach;
                              endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="adms_slider_area">
            <div class="container">
            	<div class="welcome_title">
                    <h3>Success Stories</h3>
                    <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="adms_inners">
                    <div class="adms_slider_inners">
                        <div class="slider_adms_active team_inner_area">                            
                             <?php //print_r($success_stories); 
                                if(!empty($success_stories)) :
                                foreach ($success_stories as $suc) :
                            ?>
                            <div class="item">
                                <div class="team_items">
                                    <div class="product_div">
                                        <img src="<?php if(!empty($suc['image'])) echo media_url()."uploads/success/th_".$suc['image']; else echo media_url()."assets/img/no_image.jpg" ?>"class="product_div" alt="Image">
                                        <div class="overlay">
                                            <div class="success-text"><?php echo $suc['male_name']."&". $suc['female_name'] ?>
                                            </div>
                                        </div> 
                                    </div>    
                                </div>
                            </div>
                            <?php
                              endforeach;
                              endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--================ End Success (selva)=================--> 
    <!--================ Featured (selva)=================--> 
   <!-- <section class="register_members_slider">
            <div class="container">
                <div class="welcome_title">
                    <h3>Featured Profiles</h3>
                     <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-10 aline-center-box">
                        <div class="r_members_inner">
                            <?php                             
                            if(!empty($recent_profile['bride'])) :                                
                              foreach ($recent_profile['bride']as $rec) :
                                $prefix = '';
                                $prefix_one = 'th_';
                                $prefix_two = 'new_';
                                $current_images = explode(',', $rec['images'] );
                                $latest_images = end($current_images);                       
                                if(!empty($rec['images'])){
                                    $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$latest_images);
                                    $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$latest_images);
                                    $prefix_latest_images = file_exists(FCPATH."uploads/profile/".$latest_images); 
                                }
                                if($prefix_one_status || $prefix_two_status || $prefix_latest_images):
                            ?>
                            <?php if($rec['user_gender'] == 2): ?>
                                <?php //echo FCPATH."uploads/profile/".$value['images']; 
                                        if(!empty($prefix_one_status))
                                            $prefix = $prefix_one.$latest_images;
                                        else if(!empty($prefix_two_status))
                                            $prefix = $prefix_two.$latest_images;
                                        else if(!empty($prefix_latest_images))
                                            $prefix = $prefix_latest_images;
                            ?>
                            <?php
                                $user_session = $this->session->userdata("login_status");
                                if(!empty($user_session)){ ?>
                                    <div class="item">
                                    	<div class="test_div">
	                                        <a href="<?php echo base_url()."viewdetail/".$rec['userdetail_id'];?>"><img src="<?php 
	                                            if(!empty($prefix)): 
	                                                echo media_url()."uploads/profile/".$prefix; 
	                                            else:
	                                                echo media_url()."assets/img/no_image.jpg"; 
	                                            endif; 
	                                        ?>" alt="Image not loaded" class ="img_div">
	                                        </a> -->
                                        <!-- updated by kalai on sept 30th (closing div missing in server) -->
                                        <!-- </div>
                                    </div>
                                <?php }else{ ?>
                                    <div class="item">
                                    		<div class="test_div">
                                        <a href="<?php echo base_url()."viewfeatureprofile/".$rec['userdetail_id'];?>">
                                        <img src="<?php 
                                        if(!empty($prefix)): 
                                        echo media_url()."uploads/profile/".$prefix; 
                                        else:
                                        echo media_url()."assets/img/no_image.jpg"; 
                                        endif; 
                                        ?>" alt="Image not loaded" class ="img_div">
                                        </a>
                                       </div> 
                                    </div>
                                <?php } ?>
                            <?php endif; ?>
                                        <?php
                                    endif;
                               endforeach;
                              endif;
                            ?>
                        </div>
                    </div>
                </div>    
                <div class="row featured-box">
                     <div class="col-sm-10 aline-center-box">
                        <div class="r_members_inner">
                            <?php //print_r($recent_profile); 
                                if(!empty($recent_profile['groom'])) :
                                  foreach ($recent_profile['groom']as $rec) :
                                    $prefix = '';
                                    $prefix_one = 'th_';
                                    $prefix_two = 'new_';
                                    $current_images = explode(',', $rec['images'] );
                                    $latest_images = end($current_images);    
                                    if(!empty($rec['images'])){
                                        $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$latest_images);
                                        $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$latest_images);
                                        $prefix_latest_images = file_exists(FCPATH."uploads/profile/".$latest_images); 
                                    }
                                    if($prefix_one_status || $prefix_two_status || $prefix_latest_images):
                            ?>
                            <?php if($rec['user_gender'] == 1): ?>
                            <?php //echo FCPATH."uploads/profile/".$value['images']; 
                                    if(!empty($prefix_one_status))
                                        $prefix = $prefix_one.$latest_images;
                                    else if(!empty($prefix_two_status))
                                        $prefix = $prefix_two.$latest_images;
                                    else if(!empty($prefix_latest_images))
                                            $prefix = $prefix_latest_images;
                            ?>                            
                            <?php 
                                $user_session = $this->session->userdata("login_status");
                                if(!empty($user_session)){ ?>
                                    <div class="item">
                                    		<div class="test_div">
                                        <a href="<?php echo base_url()."viewdetail/".$rec['userdetail_id'];?>"><img src="<?php 
                                            if(!empty($prefix)): 
                                                echo media_url()."uploads/profile/".$prefix; 
                                            else:
                                                echo media_url()."assets/img/no_image.jpg"; 
                                            endif; 
                                        ?>" alt="Image not loaded" class="img_div">
                                        </a>
                                       </div> 
                                    </div>
                                <?php }else{ ?>
                                    <div class="item">
                                    	<div class="test_div">
                                        <a href="<?php echo base_url()."viewfeatureprofile/".$rec['userdetail_id'];?>">
                                        <img src="<?php 
                                        if(!empty($prefix)): 
                                        echo media_url()."uploads/profile/".$prefix; 
                                        else:
                                        echo media_url()."assets/img/no_image.jpg"; 
                                        endif; 
                                        ?>" alt="Image not loaded" class ="img_div">
                                        </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php endif; ?>
                                        <?php
                                    endif;
                               endforeach;
                              endif;
                            ?>
                        </div>
                    </div>    
                </div>  
            </div>
        </section>  -->
         <section class="register_members_slider">
            <div class="container">
                <div class="welcome_title">
                    <h3>Featured Profiles</h3>
                     <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-10 aline-center-box">
                        <div class="r_members_inner">
                            <?php                             
                            if(!empty($recent_profile['bride'])) :                                
                              foreach ($recent_profile['bride']as $rec) :
                                $prefix = '';
                                $prefix_one = 'th_';
                                $prefix_two = 'new_';
                                $current_images = explode(',', $rec['images'] );
                                $latest_images = end($current_images);                       
                                if(!empty($rec['images'])){
                                    $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$latest_images);
                                    $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$latest_images);
                                    $prefix_latest_images = file_exists(FCPATH."uploads/profile/".$latest_images); 
                                }
                                if($prefix_one_status || $prefix_two_status || $prefix_latest_images):
                            ?>
                            <?php if($rec['user_gender'] == 2): ?>
                                <?php //echo FCPATH."uploads/profile/".$value['images']; 
                                        if(!empty($prefix_one_status))
                                            $prefix = $prefix_one.$latest_images;
                                        else if(!empty($prefix_two_status))
                                            $prefix = $prefix_two.$latest_images;
                                        else if(!empty($prefix_latest_images))
                                            $prefix = $prefix_latest_images;
                            ?>
                            <?php
                                $user_session = $this->session->userdata("login_status");
                                if(!empty($user_session)){ ?>
                                    <div class="item">
                                        <a href="<?php echo base_url()."viewdetail/".$rec['userdetail_id'];?>"><img src="<?php 
                                            if(!empty($prefix)): 
                                                echo media_url()."uploads/profile/".$prefix; 
                                            else:
                                                echo media_url()."assets/img/no_image.jpg"; 
                                            endif; 
                                        ?>" alt="Image not loaded" class ="featured_div">
                                        </a>
                                    </div>
                                <?php }else{ ?>
                                    <div class="item">
                                        <a href="<?php echo base_url()."viewfeatureprofile/".$rec['userdetail_id'];?>">
                                        <img src="<?php 
                                        if(!empty($prefix)): 
                                        echo media_url()."uploads/profile/".$prefix; 
                                        else:
                                        echo media_url()."assets/img/no_image.jpg"; 
                                        endif; 
                                        ?>" alt="Image not loaded" class ="featured_div">
                                        </a>
                                    </div>
                                <?php } ?>
                            <?php endif; ?>
                                        <?php
                                    endif;
                               endforeach;
                              endif;
                            ?>
                        </div>
                    </div>
                </div>    
                <div class="row featured-box">
                     <div class="col-sm-10 aline-center-box">
                        <div class="r_members_inner">
                            <?php //print_r($recent_profile); 
                                if(!empty($recent_profile['groom'])) :
                                  foreach ($recent_profile['groom']as $rec) :
                                    $prefix = '';
                                    $prefix_one = 'th_';
                                    $prefix_two = 'new_';
                                    $current_images = explode(',', $rec['images'] );
                                    $latest_images = end($current_images);    
                                    if(!empty($rec['images'])){
                                        $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$latest_images);
                                        $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$latest_images);
                                        $prefix_latest_images = file_exists(FCPATH."uploads/profile/".$latest_images); 
                                    }
                                    if($prefix_one_status || $prefix_two_status || $prefix_latest_images):
                            ?>
                            <?php if($rec['user_gender'] == 1): ?>
                            <?php //echo FCPATH."uploads/profile/".$value['images']; 
                                    if(!empty($prefix_one_status))
                                        $prefix = $prefix_one.$latest_images;
                                    else if(!empty($prefix_two_status))
                                        $prefix = $prefix_two.$latest_images;
                                    else if(!empty($prefix_latest_images))
                                            $prefix = $prefix_latest_images;
                            ?>                            
                            <?php 
                                $user_session = $this->session->userdata("login_status");
                                if(!empty($user_session)){ ?>
                                    <div class="item">
                                        <a href="<?php echo base_url()."viewdetail/".$rec['userdetail_id'];?>"><img src="<?php 
                                            if(!empty($prefix)): 
                                                echo media_url()."uploads/profile/".$prefix; 
                                            else:
                                                echo media_url()."assets/img/no_image.jpg"; 
                                            endif; 
                                        ?>" alt="Image not loaded" class ="featured_div">
                                        </a>
                                    </div>
                                <?php }else{ ?>
                                    <div class="item">
                                        <a href="<?php echo base_url()."viewfeatureprofile/".$rec['userdetail_id'];?>">
                                        <img src="<?php 
                                        if(!empty($prefix)): 
                                        echo media_url()."uploads/profile/".$prefix; 
                                        else:
                                        echo media_url()."assets/img/no_image.jpg"; 
                                        endif; 
                                        ?>" alt="Image not loaded" class ="featured_div">
                                        </a>
                                    </div>
                                <?php } ?>
                            <?php endif; ?>
                                        <?php
                                    endif;
                               endforeach;
                              endif;
                            ?>
                        </div>
                    </div>    
                </div>  
            </div>
        </section>
        <!-- STATIC CODE FOR FEATURED PROFILE -->
        <!-- <section class="register_members_slider">
            <div class="container">
                <div class="welcome_title">
                    <h3>Featured Profiles</h3>
                     <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-10 aline-center-box">
                        <div class="r_members_inner">
                            <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/4.jpg" class="featured_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/22282561-99.jpg" class="featured_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/96441610-73(P).jpg" class="featured_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/defalt_male.jpg" class="featured_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/1590-1.jpg" class="featured_div">
          							</div>
                            </div>
                            
                        </div>
                    </div>    
                </div>
                <div class="row featured-box">
                    <div class="col-sm-10 aline-center-box">
                        <div class="r_members_inner">
                            <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/1590-1.jpg" class="featured_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/60352199-77(P).jpg" class="featured_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/defalt_female.jpg" class="featured_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/60352199-77(P).jpg" class="featured_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/uploads/profile/defalt_female.jpg" class="featured_div">
          							</div>
                            </div>
                            
                        </div>
                    </div>    
                </div>    
            </div>
        </section>  --> 
<!--================ End Featured (selva)=================-->
               
  <!--================ test img code (selva)=================-->       
        <!-- <section class="adms_slider_area">
            <div class="container">
            	<div class="welcome_title">
                    <h3>Success Stories</h3>
                    <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="adms_inners">
                    <div class="adms_slider_inners">
                        <div class="slider_adms_active team_inner_area">                            
                            <div class="item">
                                       <div class="test_div product_test_div">
            								<img src="<?php echo media_url(); ?>assets/img/1134Balamurugan-weds-Rajavandhi.jpg" class="img_divs">
            								<div class="overlay">
                                            	<div class="success-text">
                                            		<p>asdfghjk@qwertyui</p>
                                                </div>
                                        	</div> 
          							</div>
                            </div>
                            <div class="item">
                                       <div class="test_div product_test_div">
            								<img src="<?php echo media_url(); ?>assets/img/uploads/success/1440588269.jpg" class="img_divs">
            								<div class="overlay">
                                            	<div class="success-text">
                                            		<p>asdfghjk@qwertyui dsgdfgdfh</p>
                                                </div>
                                        	</div>
          							</div>
                                </div>
                            <div class="item">
                                       <div class="test_div product_test_div">
            								<img src="<?php echo media_url(); ?>assets/img/uploads/success/3.jpg" class="img_divs">
            								<div class="overlay">
                                            	<div class="success-text">
                                            		<p>asdfgui</p>
                                                </div>
                                        	</div>
          							</div>
                            </div>
                            <div class="item">
                                       <div class="test_div product_test_div">
            								<img src="<?php echo media_url(); ?>assets/img/uploads/success/27arulselvan-weds-jayanthi.jpg" class="img_divs">
            								<div class="overlay">
                                            	<div class="success-text">
                                            		<p>asdfghjk@qwgfdhdhdfhdfhdfhertyui</p>
                                                </div>
                                        	</div>
          							</div>
                            </div>
                            <div class="item">
                                       <div class="test_div product_test_div">
            								<img src="<?php echo media_url(); ?>assets/img/uploads/success/6763Anandhakumar-weds-Rajeswari.jpg" class="img_divs">
            								<div class="overlay">
                                            	<div class="success-text">
                                            		<p>atyui</p>
                                                </div>
                                        	</div>
          							</div>
                            </div>
                            <div class="item">
                                       <div class="test_div product_test_div">
            								<img src="<?php echo media_url(); ?>assets/img/1134Balamurugan-weds-Rajavandhi.jpg" class="img_divs">
            								<div class="overlay">
                                            	<div class="success-text">
                                            		<p>asdfghjk@qwertyui</p>
                                                </div>
                                        	</div>
          							</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
 <!-- <section class="register_members_slider">
            <div class="container">
                <div class="welcome_title">
                    <h3>Featured Profiles</h3>
                     <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-10 aline-center-box">
                        <div class="r_members_inner">
                            <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/1134Balamurugan-weds-Rajavandhi.jpg" class="img_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/img1.png" class="img_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/reg-img.jpg" class="img_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/download_bg.jpg" class="img_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/283output.jpg" class="img_div">
          							</div>
                            </div>
                            
                        </div>
                    </div>    
                </div>
                <div class="row featured-box">
                    <div class="col-sm-10 aline-center-box">
                        <div class="r_members_inner">
                            <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/1134Balamurugan-weds-Rajavandhi.jpg" class="img_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/img1.png" class="img_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/reg-img.jpg" class="img_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/download_bg.jpg" class="img_div">
          							</div>
                            </div>
                             <div class="item">
                            	 <div class="test_div">
            							<img src="<?php echo media_url(); ?>assets/img/283output.jpg" class="img_div">
          							</div>
                            </div>
                            
                        </div>
                    </div>    
                </div>    
            </div>
        </section> -->  
        <!--================ End test img code (selva)=================-->          
<?php 
    include('include/footer.php');
?>  
 </body>
</html>