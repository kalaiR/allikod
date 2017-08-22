<?php 
include('include/header.php');
include('include/menu.php');

// echo '<pre>';
// print_r($results);
// echo '</pre>';
// exit();


$session_search = $this->session->all_userdata();
if(!empty($session_search['search_inputs']['offset'])){
    $curr_offset = $session_search['search_inputs']['offset'];
}elseif(!empty($session_search['search_quick']['offset'])){
    $curr_offset = $session_search['search_quick']['offset'];
}elseif(!empty($session_search['search_dhoshamid']['offset'])){
    $curr_offset = $session_search['search_dhoshamid']['offset'];
}elseif(!empty($session_search['advance_search_sess']['offset'])){
    $curr_offset = $session_search['advance_search_sess']['offset'];
}else{
    $curr_offset = '';
}

?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">View<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
                    <!--<a href="index.html">Home</a>
                    <a href="shop-cart.html">Pricing</a>-->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <!--================search_reslut grid Area =================-->
        <section class="blog_grid_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pad">
                            <a href="<?php echo base_url();?>search_result/<?php echo $curr_offset;?>" class="register_angkar_btn login_btn pull-right">Back</a>
                        </div> 
                    <div class="members_profile_inners">
                            <div class="members_about_box">
                                <div class="heads">
                                <h3 id="hcolor">Image</h3>
                                </div>
                                <div></div>
                                <div class="profile_list">                                    
                                        <?php //echo "<pre>";print_r($results);echo "</pre>"; ?>
                                          <!-- <img src="<?php //if(!empty($results['image'])) echo base_url()."assets/img/uploads/success/".$suc['image']; else echo base_url()."assets/img/no_image.jpg" ?>" alt="No Image" style="vertical-align:bottom;width:170px;height:170px;"> -->
                                            <?php //echo FCPATH."uploads/profile/".$value['images']; 
                                                $prefix = '';
                                                $prefix_one = 'th_';
                                                $prefix_two = 'new_';
                                                $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$results['images']);
                                                $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$results['images']);
                                                if($prefix_one_status)
                                                    $prefix = $prefix_one;
                                                else if($prefix_two_status)
                                                    $prefix = $prefix_two;
                                            ?>
                                            <ul>
                                            <li><a href="#lightbox" data-toggle="modal"> 
                                                    <img src="<?php 
                                                        if(!empty($results['images'])): 
                                                            echo media_url()."uploads/profile/".$prefix.$results['images']; 
                                                        else:
                                                            echo media_url()."assets/img/no_image.jpg"; 
                                                        endif; 
                                                    ?>" alt="Image not loaded" style="width:170px;height:170px;">
                                            </a></li>
                                            </ul>
                                            <div class="modal fade and carousel slide lig" id="lightbox">
                                                <div class="modal-dialog ">
                                                    <div class="modal-body">
                                                          <ol class="carousel-indicators">
                                                           <?php 
                                                            if(!empty($slider_images)){
                                                            foreach($slider_images as $key => $value) { ?>
                                                                <li data-target="#lightbox" data-slide-to="<?php echo $key;?>"></li>
                                                           <?php } }?>
                                                          </ol>
                                                          <div class="carousel-inner">
                                                            <?php 
                                                                if(!empty($slider_images)){
                                                                foreach ($slider_images as $key => $value) { 
                                                                if($key!=0){?>
                                                                <div class="item">
                                                                        <div class="numbertext"><?php echo $key+1;?> / <?php echo count($slider_images);?></div>
                                                                        <img class="lig-box"src="<?php echo media_url()."uploads/profile/".$prefix.$value['images'];?>" alt="First slide">
                                                                </div>
                                                                <?php }else{?>
                                                                     <div class="item active">
                                                                        <div class="numbertext"><?php echo $key+1;?> / <?php echo count($slider_images);?></div>
                                                                        <img class="lig-box"src="<?php echo media_url()."uploads/profile/".$prefix.$value['images'];?>" alt="First slide">
                                                                        </div>
                                                                <?php }
                                                            }
                                                           } ?>
                                                          </div>
                                                          <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                                          </a>
                                                          <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                          </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                            <li><a>Name</a></li>
                                            <li><a>Vallikodi ID</a></li>
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['user_fname']; ?></a></li>
                                            <li><a><?php echo $results['userdetail_id']; ?></a></li>
                                        </ul>                                        
                                    </div>                  
                                </div>
                                 <div class="members_about_box">                                    
                                    <h3 id="hcolor">Communication Detail</h3>
                                    <div class="profile_list"> 
                                    <p><b>Click the button to view the contact details</b>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" value="View" class="btn form-control login_btn view_communication">View</button></p><br>
                                    <input type="hidden" class="check_payment_status" value="<?php echo $this->session->userdata("login_status"); ?>">
                                    <!-- <a href="search.html" class="register_angkar_btn">View</a> -->
                                    <!-- <?php 
                                        $user_session = $this->session->userdata("login_session");
                                        // print_r($user_session);  
                                        //if($user_session['payment_status'] == 1 && $user_session['no_of_profiles_viewed'] < $user_session['totalno_of_profile']):
                                    ?> -->
                                        <div class="slidingDiv">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-6 col-xs-6">
                                                        <p>Residence</p>
                                                        </div>
                                                        <div class="col-md-6 col-xs-6 dark">
                                                            <p><?php if(!empty($results['comm_residence'])) echo $results['comm_residence']; else echo "--"; ?></p>
                                                        </div>
                                                    </div>
                                                     <div class="col-xs-12">
                                                        <div  class="col-md-6 col-xs-6">
                                                        <p>Current Country</p>
                                                        </div>
                                                        <div class="col-md-6 col-xs-6 dark">
                                                            <p><?php if(!empty($results['comm_current_countrycountry'])) echo $results['comm_current_countrycountry']; else echo "--"; ?></p>
                                                        </div >
                                                    </div>
                                                     <div class="col-xs-12">
                                                        <div class="col-md-6 col-xs-6">
                                                        <p>Current City</p>
                                                        </div>
                                                        <div class="col-md-6 col-xs-6 dark">
                                                            <p><?php if(!empty($results['comm_current_city'])) echo $results['comm_current_city']; else echo "--"; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="col-md-6 col-xs-6 ">
                                                        <p>District</p>
                                                        </div>
                                                        <div class="col-md-6 col-xs-6 dark">
                                                            <p><?php if(!empty($results['comm_current_district'])) echo $results['comm_current_district']; else echo "--"; ?></p>
                                                        </div>
                                                    </div>                          
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-6 col-xs-6 ">
                                                        <p>Communication Address</p>
                                                        </div>
                                                        <div class="col-md-4 col-xs-4 dark">
                                                            <p class="text_short"><?php if(!empty($results['comm_communication_address'])) echo $results['comm_communication_address']; else echo "--"; ?></p>
                                                        </div>
                                                        <div class="col-md-1 col-xs-1 tooltips long">
                                                            <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php if(!empty($results['comm_communication_address'])) echo $results['comm_communication_address']; else echo "--"; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div  class="col-md-6 col-xs-6 ">
                                                        <p>Phone Number</p>
                                                        </div>
                                                        <div class="col-md-6 col-xs-6 dark">
                                                            <p><?php if(!empty($results['comm_phone_no'])) echo $results['comm_phone_no']; else echo "--"; ?></p>
                                                        </div >
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="col-md-6 col-xs-6">
                                                        <p>Mobile Number</p>
                                                        </div>
                                                        <div class="col-md-6 col-xs-6 dark">
                                                            <p><?php if(!empty($results['comm_mobile_no'])) echo $results['comm_mobile_no']; else echo "--"; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6">
                                                    <p><a href="#">Am Interested</a></p>
                                                    </div>                                     
                                                </div>
                                            </div>  <!-- row ends -->             
                                         </div> 
                                    <?php // endif; ?>
                                    </div>                                                           
                                </div>                  
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Profile Details</h3>
                                    </div>
                                    <div class="profile_list">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Registered By</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['registered_by_name']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Gender</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['user_gender'] != 2 ? 'Male':'Female'; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="col-xs-12">              
                                                <div class="col-md-6 col-xs-6">
                                                <p>DOB/Age</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['user_dob']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Marital Status</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['marital_name']; ?></p>
                                                </div>
                                            </div>                                       
                                        </div>
                                    </div>                                  
                                </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Religion & Ethnicity</h3>
                                </div>
                                <div class="profile_list">
                                     <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Time of Birth</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['rel_timeofbirth']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Mother Tongue</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['mother_tongue_name']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Dhosham</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php 
                                                            if(!empty($results['rel_dhosham'])) echo $results['rel_dhosham']; else echo "--"; ?>
                                                        </p>                         
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Nakshathra</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">               
                                                        <p><?php 
                                                        if(!empty($results['nakshathra_name'])) echo $results['nakshathra_name']; else echo "--"; ?>
                                                        </p> 
                                                    </div>
                                                </div>                                         
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-xs-12">              
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Luknam</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">                
                                                        <p><?php 
                                                        if(!empty($results['lukhnam_name'])) echo $results['lukhnam_name']; else echo "--"; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Gothra</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['rel_gothra']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Zodiac Sign</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['zodiac_name']; ?></p>
                                                    </div>
                                                </div>                          
                                            </div>
                                        </div>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Education & Occupation</h3>
                                </div>
                                <div class="profile_list">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Education</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['edu_name']; ?></p>
                                                </div >
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6 ">
                                                <p>Education in Detail</p>
                                                </div>
                                                <div class="col-md-4 col-xs-4 dark">
                                                    <p class="text_short"><?php echo $results['edu_educationdetails']; ?></p>
                                                </div>
                                                <div class="col-md-1 col-xs-1 tooltips long">
                                                    <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php echo $results['edu_educationdetails']; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Occupation</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['occupation_name']; ?></p>
                                                </div>
                                            </div>                                 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6 ">
                                                <p>Occupation in Detail</p>
                                                </div>
                                                <div class="col-md-4 col-xs-4 dark">
                                                    <p class="text_short"><?php echo $results['edu_occupationdetail']; ?></p>
                                                </div>
                                                <div class="col-md-1 col-xs-1 tooltips long">
                                                    <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php echo $results['edu_occupationdetail']; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6 ">
                                                <p>Employed In</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['empin_name']; ?></p>
                                                </div >
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Monthly Income</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['edu_montlyincome']; ?></p>
                                                </div>
                                            </div>                                     
                                        </div>
                                    </div>                                 
                                    </div>                                             
                                </div>
                            <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Family</h3>
                                </div>                            
                                <div class="profile_list">    
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Father's Name</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_father_name']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6 ">
                                                <p>Mother's Name</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_mother_name']; ?></p>
                                                </div >
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Father's Occupation</p>
                                                </div>
                                                <div class="col-md-4 col-xs-4 dark">
                                                    <p class="text_short"><?php echo $results['comm_father_employment']; ?></p>
                                                </div>
                                                <div class="col-md-1 col-xs-1 tooltips long">
                                                    <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php echo $results['comm_father_employment']; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Mothers's Occupation</p>
                                                </div>
                                                <div class="col-md-4 col-xs-4 dark">
                                                    <p class="text_short"><?php echo $results['comm_mother_employment']; ?></p>
                                                </div>
                                                <div class="col-md-1 col-xs-1 tooltips long">
                                                    <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php echo $results['comm_mother_employment']; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Family Status</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['family_statusname']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Family Type</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['family_typename']; ?></p>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-xs-12">              
                                                <div  class="col-md-6 col-xs-6">
                                                <p></p>
                                                </div>
                                                <div class="col-md-3 col-xs-3 dark">
                                                    <p>Elder</p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p>Younger</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6">
                                                <p>No.of Brothers</p>
                                                </div>
                                                <div class="col-md-3 col-xs-3 dark">
                                                    <p><?php echo $results['comm_number_of_brothers_el']; ?></p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p><?php echo $results['comm_number_of_brothers_yo']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6">
                                                <p>No.of Sisters</p>
                                                </div>
                                                <div class="col-md-3 col-xs-3 dark">
                                                    <p><?php echo $results['comm_number_of_sisters_el']; ?></p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p><?php echo $results['comm_number_of_sisters_yo']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6">
                                                <p>No.of Married Brothers</p>
                                                </div>
                                                <div class="col-md-3 col-xs-3 dark">
                                                    <p><?php echo $results['comm_number_of_brothers_el_mar']; ?></p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p><?php echo $results['comm_number_of_brothers_yo_mar']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6">
                                                <p>No.of Married Sisters</p>
                                                </div>
                                                <div class="col-md-3 col-xs-3 dark">
                                                    <p><?php echo $results['comm_number_of_sisters_yo_mar']; ?></p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p><?php echo $results['comm_number_of_sisters_yo_mar']; ?></p>
                                                </div>
                                            </div>                         
                                        </div>
                                    </div>
                                    </div>                                
                                </div>                                             
                            </div>
                                <div class="members_about_box">
                                    <div id="">
                                        <h3 id="hcolor">Physical Attributes</h3>
                                    </div>                                
                                    <div class="profile_list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Height</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['phy_height']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Weight</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['phy_weight']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Body Type</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['body_typename']; ?></p>
                                                    </div>
                                                </div>                                   
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-xs-12">              
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Complexion</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['complexion_typename']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Physical Status</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['phy_physicalstatus']; ?></p>
                                                    </div>
                                                </div>                         
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                 <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Habits</h3>
                                    </div> 
                                        <div class="profile_list">    
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Food</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['food_name']; ?></p>
                                                    </div>                                      
                                                </div>
                                            </div>              
                                        </div> 
                                </div>                               
                                 <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Your Personality</h3>
                                    </div> 
                                        <div class="profile_list">    
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="col-md-12 col-xs-6">
                                                    <p><?php echo $results['phy_yourpersonality']; ?></p>
                                                    </div>                                      
                                                </div>
                                            </div>        
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Age Expected</h3>
                                    </div> 
                                        <div class="profile_list">    
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Age</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['phy_searchage_from']; ?> - <?php echo $results['phy_searchage_to']; ?></p>
                                                    </div>                                      
                                                </div>
                                            </div>            
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Education Expected</h3>
                                    </div> 
                                        <div class="profile_list">
                                        <div class="row com-box">
                                                <div class="col-md-3">
                                                    <p>Education</p>
                                                </div>
                                                <div class="col-md-9 li_style">
                                                    <?php 
                                                if(!empty($expected_education)){
                                                    foreach($expected_education as $key => $value) { ?>
                                                        <li style="margin-left: 10px;"><b><?php echo $value['edu_name']; ?></b></li>
                                                <?php }
                                                }?>     
                                                 </div>
                                            </div>
                                </div>
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Marital Status Expected</h3>
                                    </div> 
                                        <div class="profile_list">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Marital Status</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php //echo $results['maritalname']; ?>
                                                    <?php 
                                                        if(!empty($expected_maritalstatus)){
                                                            foreach($expected_maritalstatus as $key => $value) { 
                                                                ?>
                                                                <?php echo $value[0]['marital_name']; ?>
                                                        <?php }
                                                    }?></p>
                                                    </div>                                      
                                                </div>
                                            </div>        
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Food Expected</h3>
                                    </div> 
                                        <div class="profile_list">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Food</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php echo $results['food_name']; ?></p>
                                                    </div>                                      
                                                </div>
                                            </div>                                                              
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Expectation About Life Partner</h3>
                                    <div class="profile_list">
                                        <div class="row">
                                                <div class="col-md-9">
                                                    <div class="col-md-12 col-xs-6">
                                                    <p><?php echo $results['phy_expectationabout_lifepartner']; ?></p>
                                                    </div>                                      
                                                </div>
                                            </div>
                                    </div>
                                    </div>                                                                  
                                </div>                                                          
                                <div class="members_about_box">
                                    <h3 id="hcolor">Horoscope</h3>
                                    <div class="profile_list"> 
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6" style="padding-bottom: 20px;">
                                            <!-- Rasi Horoscope - Start -->
                                                    <div id="horo_container">
                                                        <div class="horo_row" id="product">
                                                            <div class="third-row" data-id="box_1" id="box_1">1</div>
                                                            <div class="third-row" data-id="box_2" id="box_2">2</div>
                                                            <div class="third-row" data-id="box_3" id="box_3">3</div>
                                                            <div class="third-row" data-id="box_4" id="box_4">4</div>

                                                            <div class="third-row" data-id="box_12" id="box_12">12</div>
                                                            <div class="third-row" data-id="box_15" id="box_15">-</div>
                                                            <div class="third-row" data-id="box_16" id="box_16">-</div>
                                                            <div class="third-row" data-id="box_5"  id="box_5">5</div>

                                                            <div class="third-row" data-id="box_11" id="box_11">11</div>
                                                            <div class="third-row" data-id="box_13" id="box_13">-</div>
                                                            <div class="third-row" data-id="box_14" id="box_14">-</div>
                                                            <div class="third-row" data-id="box_6"  id="box_6">6</div>

                                                            <div class="third-row" data-id="box_10" id="box_10">10</div>
                                                            <div class="third-row" data-id="box_9" id="box_9">9</div>
                                                            <div class="third-row" data-id="box_8" id="box_8">8</div>
                                                            <div class="third-row" data-id="box_7" id="box_7">7</div>
                                                        </div>
                                                    </div>
                                                    <!-- Rasi Horoscope - End -->
                                                </div>  <!-- row col 6 ends -->
                                                <div class="col-md-6">
                                                    <!-- Asham Horoscope - start -->
                                                    <div id="asham_horo_container">
                                                        <div class="asham_horo_row" id="product">
                                                        <div class="asham-row" data-id="abox_1" id="abox_1">1</div>
                                                        <div class="asham-row" data-id="abox_2" id="abox_2">2</div>
                                                        <div class="asham-row" data-id="abox_3" id="abox_3">3</div>
                                                        <div class="asham-row" data-id="abox_4" id="abox_4">4</div>

                                                        <div class="asham-row" data-id="abox_12" id="abox_12">12</div>
                                                        <div class="asham-row" data-id="abox_15" id="abox_15">-</div>
                                                        <div class="asham-row" data-id="abox_16" id="abox_16">-</div>
                                                        <div class="asham-row" data-id="abox_5"  id="abox_5">5</div>

                                                        <div class="asham-row" data-id="abox_11" id="abox_11">11</div>
                                                        <div class="asham-row" data-id="abox_13" id="abox_13">-</div>
                                                        <div class="asham-row" data-id="abox_14" id="abox_14">-</div>
                                                        <div class="asham-row" data-id="abox_6"  id="abox_6">6</div>

                                                        <div class="asham-row" data-id="abox_10" id="abox_10">10</div>
                                                        <div class="asham-row" data-id="abox_9" id="abox_9">9</div>
                                                        <div class="asham-row" data-id="abox_8" id="abox_8">8</div>
                                                        <div class="asham-row" data-id="abox_7" id="abox_7">7</div>

                                                        </div>
                                                    </div>
                                                    <!-- Asham Horoscope - end -->
                                                </div> <!-- col 6 ends -->
                                            </div> <!-- col 12 ends -->
                                        </div> <!-- row ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <!--================End search_reslut grid Area =================-->
        
        <div id="largeContent" style="display:none;">
            <div class="media tool_content">
                <div class="media-left">
                    <img src="<?php echo media_url(); ?>assets/img/map-persion.png" alt="">
                </div>
                <div class="media-body">
                    <h3>Sandi Williams</h3>
                    <h5>21 years old</h5>
                    <h5>From Paris</h5>
                    <h5>Distance 16 km</h5>
                </div>
            </div>
        </div>
<?php 
include('include/footer.php');
// echo '<pre>';
// print_r($rasi);
// echo '</pre>';
// $value  = array('r_1'=>1, 'r_2'=>10, 'r_3'=>10, 'r_4'=>10, 'r_5'=>2, 'r_6'=>12,'r_7'=>10, 'r_8'=>10, 'r_9'=>10, 'r_10'=>10);
?>
<script type="text/javascript">
$(document).ready(function () {

   var arr = <?php echo json_encode($rasi); ?>     
   $('.horo_row #box_6, #box_7, #box_10, #box_11').attr('readonly', 'readonly');   
   $.each(arr, function( i, val ) {    
     $('.third-row').each(function(){
        var id=$(this).data('id');
        var res = id.split("_");          
        if(res[1]==val){
            img='<?php echo media_url(); ?>'+'assets/img/rasi/'+i+'.png';             
            $("#"+id).append("<img src="+img+" />");
        }
      });  
   }); 

   var asham_arr = <?php echo json_encode($amsham); ?>    
   $('.asham_horo_row #abox_6, #abox_7, #abox_10, #abox_11').attr('readonly', 'readonly');
   $.each(asham_arr, function( i, val ) {    
     $('.asham-row').each(function(){
        var id=$(this).data('id');
        var res = id.split("_");          
        if(res[1]==val){
            img='<?php echo media_url(); ?>'+'assets/img/rasi/'+i+'.png';             
            $("#"+id).append("<img src="+img+" />");
        }
      });  
   }); 

});    
</script>

