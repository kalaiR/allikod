<?php 
    include('include/header.php');
    include('include/menu.php');
?> 
        
        <!--================Slider Reg Area (selva)=================-->
        <section class="slider_area">
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
                        </li>
                        
                    </ul> 
                </div><!-- END REVOLUTION SLIDER -->
            </div>
            <div class="registration_form_area"><!--Ravichandran Adding fields -->            
                <div class="container">
                <marquee overflow="hidden"><img src="<?php echo media_url(); ?>assets/img/scroll_text.png"></marquee>
                    <div class="row">
                    <!-- <marquee overflow="hidden"><img src="<?php //echo media_url(); ?>assets/img/scroll_text.png"></marquee> -->
                        <div class="col-sm-6">
                            <div class="registration_form_s">
                                <h4>Registration</h4>
                                <form method="post" action="<?php echo base_url(); ?>index" name="index_reg" id="index_reg" class="reg_form">
                                <span class="val_status" style="display: block;">
                                    <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                                </span>
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
                                                    
                                                    <select class="form-control customize_plan form_inputs" name="register_by[]" id="register_by" placeholder="RegisterBy-Name">
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
                                                <input type="text" class="form-control form_inputs alphaonly" id="reg_Name" placeholder="Your Name" name="reg_Name">
                                            </div>
                                        </div>    
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font">Age *</span>
                                         </div>
                                        <div class="col-md-6">     
                                            <div class="form-group">
                                                <input type="text" class="form-control form_inputs age_reg" id="reg_age" placeholder="Your Age" name="reg_age">
                                            </div>
                                        </div>    
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span data-bind="label" class="text-font">Country *</span>
                                         </div>
                                        <div class="col-md-6">    
                                            <div class="form-group">
                                                <select class="form-control customize_plan form_inputs" name="country[]" id="country" placeholder="Country Name">
                                                        <option value="">Select</option>
                                                        <?php
                                                        if(!empty($country)) :
                                                            foreach ($country as $cls_val) {
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
                                                <select class="form-control customize_plan form_inputs" name="mother_tongue[]" id="mother_tongue" placeholder="MotherTongue">
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
                                    <div class="row">
                                        <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font">Mobile *</span>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form_inputs mob_num" id="reg_Mobile" name="reg_Mobile" placeholder="Mobile Number">
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                         <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font">Email *</span>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control form_inputs" id="reg_email2" name="reg_email2" placeholder="Email Id">
                                            </div>
                                         </div>   
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6 box">
                                            <span data-bind="label" class="text-font"> Password *</span>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control form_inputs" id="reg_pass2" name="reg_pass2" placeholder="Password">
                                            </div>
                                        </div>   
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span data-bind="label" class="text-font">Gender *</span>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control customize_plan form_inputs" name="gender[]" id="gender">
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
                                        <button type="submit" value="LogIn" class="btn form-control login_btn popup-with-zoom-anim" href="#reg_form">Register</button>
                                    </div>
                                    <div class="login_form_inner zoom-anim-dialog mfp-hide" id="reg_form">
                                        <div class="box first_reg">
                                            <p>First level registraion has been successfully completed !!!</p>
                                        </div>
                                        <div class="low_pad">
                                            <button type="submit" value="LogIn" class="btn form-control login_btn pull-right" name="user-submit" id="user_submit">Ok</button>
                                            <img class="mfp-close" src="<?php echo media_url(); ?>assets/img/close-btn.png" alt="">
                                        </div>
                                    </div>    
                                </form>
                            </div>
                        </div>
                        <!--<div class="col-sm-6">
                            <div class="form_man">
                                <img src="<?php //echo media_url(); ?>assets/img/registration-man.png" alt="">
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
     <section class="adms_slider_area">
            <div class="container">
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
                                        <img src="<?php if(!empty($suc['image'])) echo media_url()."assets/img/uploads/success/th_".$suc['image']; else echo media_url()."assets/img/no_image.jpg" ?>"class="product_div" alt="Image">
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
                                        $prefix = $prefix_one;
                                    else if(!empty($prefix_two_status))
                                        $prefix = $prefix_two;
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
<!--================ End Featured (selva)=================-->       
 
<?php 
    include('include/footer.php');
?>  
 </body>
</html>