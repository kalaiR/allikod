<?php 
    include('include/header.php');
    include('include/menu.php');
// echo '<pre>';
// print_r($results);
// echo '</pre>';

?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="My Profile"><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">My Profile<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
                    <!--<a href="index.html">Home</a>
                    <a href="shop-cart.html">Pricing</a>-->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
      <section class="blog_grid_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="members_profile_inners">
                           <div class="members_about_box">
                                <div class="heads">
                                    <h3 id="hcolor">Name : <?php echo $results['user_fname']; ?>
                                    <a href="<?php echo base_url(); ?>myedit" class="btn form-control edit_btn pull-right">Edit</a>
                                    </h3>
                                </div>                               
                                <div class="profile_list">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Vallikodi ID</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['userdetail_id']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Profile ID</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['userdetail_profile_id']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Starting Date</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['startdate']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Ending Date</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['enddate']; ?></p>
                                                </div>
                                                                                               
                                            </div>
                                            <div class="col-md-6">              
                                                <div class="col-md-6 col-xs-6">
                                                <p>No. of Profiles</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['totalno_of_profile']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>No. of Profiles Viewed</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['no_of_profiles_viewed']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Remaining Profiles to View</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php
                                                $remaining_profile= $results['totalno_of_profile'] - $results['no_of_profiles_viewed'];
                                            ?></p>
                                                </div>                          
                                            </div>
                                        </div>                                    
                                        <!-- <ul>
                                            <li><a>Vallikodi ID</a></li>
                                            <li><a>Profile ID</a></li>
                                            <li><a>Starting Date</a></li>
                                            <li><a>Ending Date</a></li>
                                            
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['userdetail_id']; ?></a></li>
                                            <li><a><?php echo $results['userdetail_profile_id']; ?></a></li>
                                            <li><a><?php echo $results['startdate']; ?></a></li>
                                            <li><a><?php echo $results['enddate']; ?></a></li>
                                            
                                        </ul>
                                        <ul>
                                            <li><a>Total No. of Profiles</a></li>
                                            <li><a>No. of profiles viewed</a></li>
                                            <li><a>Remine Profile to View</a></li>
                                            <li><a>- </a> </li>
                                            
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['totalno_of_profile']; ?></a></li>
                                            <li><a><?php echo $results['no_of_profiles_viewed']; ?></a></li>
                                            <?php
                                                $remaining_profile= $results['totalno_of_profile'] - $results['no_of_profiles_viewed'];
                                            ?>
                                            <li><a><?php echo $remaining_profile; ?></a></li>
                                            <li><a>-</a> </li>
                                        </ul> -->
                                    </div>
                                                            
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Communication Details</h3>                                
                                </div>                                
                                <div class="profile_list">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Residence</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_residence']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Current Country</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_current_countrycountry']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Current City</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_current_city']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Current District</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_current_district']; ?></p>
                                                </div>                                      
                                            </div>
                                            <div class="col-md-6">              
                                                <div class="col-md-6 col-xs-6">
                                                <p>Phone Number</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_phone_no']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Mobile Number</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_mobile_no']; ?></p>
                                                </div> 
                                                <div class="col-md-6 col-xs-6">
                                                <p>Address</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['comm_communication_address']; ?></p>
                                                </div>                                      
                                            </div>
                                        </div>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Profile Details</h3>
                                </div>                                
                                <div class="profile_list">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Registered By</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['registered_by_name']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Gender</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['user_gender'] != 2 ? 'Male':'Female'; ?></p>
                                                </div>                                      
                                            </div>
                                            <div class="col-md-6">              
                                                <div class="col-md-6 col-xs-6">
                                                <p>Date of Birth/Age</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['user_dob']; ?></p>
                                                </div>
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
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Religion & Ethnicity</h3>
                                </div>
                                <!-- <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.</p> -->
                                <!-- <div class="profile_list"> -->
                                <div class="profile_list">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Time of Birth</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['rel_timeofbirth']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Mother Tongue</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['mother_tongue_name']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Dhosham</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['rel_dhosham']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Nakshathra</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['nakshathra_name']; ?></p>
                                                </div>
                                                                                               
                                            </div>
                                            <div class="col-md-6">              
                                                <div class="col-md-6 col-xs-6">
                                                <p>Luknam</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['lukhnam_name']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Gothra</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['rel_gothra']; ?></p>
                                                </div>
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
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Education & Occupation</h3>
                                </div>
                                <!-- <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.</p> -->
                                <!-- <div class="profile_list"> -->
                                <div class="profile_list">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-6 col-xs-6">
                                            <p>Education</p>
                                            </div>
                                            <div class="col-md-6 col-xs-6 dark">
                                                <p><?php echo $results['edu_name']; ?></p>
                                            </div >
                                            <div class="col-md-6 col-xs-6 ">
                                            <p>Education in Detail</p>
                                            </div>
                                            <div class="col-md-4  dark">
                                                <p class="text_short"><?php echo $results['edu_educationdetails']; ?></p>
                                            </div>
                                            <div class="col-md-1 tooltips long">
                                                <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php echo $results['edu_educationdetails']; ?></span>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                            <p>Occupation</p>
                                            </div>
                                            <div class="col-md-6 col-xs-6 dark">
                                                <p><?php echo $results['occupation_name']; ?></p>
                                            </div>                                 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-6 col-xs-6 ">
                                            <p>Occupation in Detail</p>
                                            </div>
                                            <div class="col-md-4  dark">
                                                <p class="text_short"><?php echo $results['edu_occupationdetail']; ?></p>
                                            </div>
                                            <div class="col-md-1 tooltips long">
                                                <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php echo $results['edu_occupationdetail']; ?></span>
                                            </div>
                                            <div  class="col-md-6 col-xs-6 ">
                                            <p>Employed In</p>
                                            </div>
                                            <div class="col-md-6 col-xs-6 dark">
                                                <p><?php echo $results['empin_name']; ?></p>
                                            </div >
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
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Family</h3>
                                </div>                            
                                <div class="profile_list">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-6 col-xs-6">
                                            <p>Father's Name</p>
                                            </div>
                                            <div class="col-md-6 col-xs-6 dark">
                                                <p><?php echo $results['comm_father_name']; ?></p>
                                            </div>
                                            <div  class="col-md-6 col-xs-6 ">
                                            <p>Mothers Name</p>
                                            </div>
                                            <div class="col-md-6 col-xs-6 dark">
                                                <p><?php echo $results['comm_mother_name']; ?></p>
                                            </div >
                                            <div class="col-md-6 col-xs-6">
                                            <p>Father's Occupation</p>
                                            </div>
                                            <div class="col-md-4 col-xs-4 dark">
                                                <p class="text_short"><?php echo $results['comm_father_employment']; ?></p>
                                            </div>
                                            <div class="col-md-1 col-xs-1 tooltips long">
                                                <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php echo $results['comm_father_employment']; ?></span>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                            <p>Mothers's Occupation</p>
                                            </div>
                                            <div class="col-md-4 col-xs-4 dark">
                                                <p class="text_short"><?php echo $results['comm_mother_employment']; ?></p>
                                            </div>
                                            <div class="col-md-1 col-xs-1 tooltips long">
                                                <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php echo $results['comm_mother_employment']; ?></span>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                            <p>Family Status</p>
                                            </div>
                                            <div class="col-md-6 col-xs-6 dark">
                                                <p><?php echo $results['family_statusname']; ?></p>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                            <p>Family Type</p>
                                            </div>
                                            <div class="col-md-6 col-xs-6 dark">
                                                <p><?php echo $results['family_typename']; ?></p>
                                            </div>                                                
                                        </div>
                                        <div class="col-md-6">              
                                            <div  class="col-md-6 col-xs-6">
                                            <p></p>
                                            </div>
                                            <div class="col-md-3 col-xs-3 dark">
                                                <p>Elder</p>
                                            </div >
                                            <div class="col-md-3 col-xs-3 dark">
                                            <p>Younger</p>
                                            </div>
                                            <div  class="col-md-6 col-xs-6">
                                            <p>No.of Brothers</p>
                                            </div>
                                            <div class="col-md-3 col-xs-3 dark">
                                                <p><?php echo $results['comm_number_of_brothers_el']; ?></p>
                                            </div >
                                            <div class="col-md-3 col-xs-3 dark">
                                            <p><?php echo $results['comm_number_of_brothers_yo']; ?></p>
                                            </div>
                                            <div  class="col-md-6 col-xs-6">
                                            <p>No.of Sisters</p>
                                            </div>
                                            <div class="col-md-3 col-xs-3 dark">
                                                <p><?php echo $results['comm_number_of_sisters_el']; ?></p>
                                            </div >
                                            <div class="col-md-3 col-xs-3 dark">
                                            <p><?php echo $results['comm_number_of_sisters_yo']; ?></p>
                                            </div>
                                            <div  class="col-md-6 col-xs-6">
                                            <p>No.of Married Brothers</p>
                                            </div>
                                            <div class="col-md-3 col-xs-3 dark">
                                                <p><?php echo $results['comm_number_of_brothers_el_mar']; ?></p>
                                            </div >
                                            <div class="col-md-3 col-xs-3 dark">
                                            <p><?php echo $results['comm_number_of_brothers_yo_mar']; ?></p>
                                            </div>
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
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">More About Family</h3>
                                    <div class="profile_list"> 
                                    <?php echo $results['comm_about_family']; ?>
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
                                                <div class="col-md-6 col-xs-6">
                                                <p>Height</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['phy_height']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Weight</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['phy_weight']; ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6">
                                                <p>Body Type</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['body_typename']; ?></p>
                                                </div>
                                                                                               
                                            </div>
                                            <div class="col-md-6">              
                                                <div class="col-md-6 col-xs-6">
                                                <p>Complexion</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php echo $results['complexion_typename']; ?></p>
                                                </div>
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
                                                    <p><b><?php echo $results['phy_yourpersonality']; ?></b></p>
                                                    </div>                                      
                                                </div>
                                            </div>            
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Expectation About Life Partner</h3>
                                    <div class="profile_list">
                                    <ul>
                                                <li><a><?php echo $results['phy_expectationabout_lifepartner']; ?></a></li>
                                    </ul>
                                    </div>
                                    </div>                                                                  
                                </div>
                                 <div class="members_about_box"> 
                                    <div class="row">
                                        <div class="col-md-12">
                                           <h3 id="hcolor">Search (Expectation / Looking For)</h3>
                                        </div>
                                         <div class="profile_list">
                                        <div class="col-md-12 text-boxs leftpad">
                                            <div class="row com-box">
                                                <div class="col-md-3">
                                                    <p>Age</p>
                                                </div>
                                                <div class="col-md-1">
                                                <p>From</p>
                                                </div>
                                                <div class="col-md-1">        
                                                    <p><b><?php echo $results['phy_searchage_from']; ?></b></p> 
                                                </div>
                                                 <div class="col-md-1">        
                                                    <p>To</p> 
                                                </div> 
                                                <div class="col-md-1">        
                                                    <p><b><?php echo $results['phy_searchage_to']; ?></b></p> 
                                                </div>  
                                                                                         
                                            </div>
                                            <div class="row com-box">
                                                    <div class="col-md-3">
                                                        <p>Marital Status</p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="checkbox">
                                                        <p><b>
                                                        <!-- <input type="checkbox" value=""> -->
                                                        <!-- <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> -->
                                                                <!-- <b><?php // echo $results['maritalname']; ?></b> -->
                                                        <?php if(!empty($expected_maritalstatus)){
                                                            foreach($expected_maritalstatus as $key => $value) { ?>
                                                                <?php echo $value[0]['marital_name']; ?>
                                                                <?php 
                                                        }} ?>
                                                        </b></p>
                                                    <!-- </div>     -->
                                                  <!--   <div class="col-sm-8 "> -->
                                                    <!-- <div class="height_item "> -->
                                                        <!-- <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                Single
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                Widowed
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                Annualled
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                Divorced
                                                    </label>
                                                    </div> -->
                                                        <!-- <label class="checkbox-inline"><input type="checkbox" value="">Single</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="">Widowed</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="">Annualled</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="">Divorced</label>
                                                    </div> -->
                                                <!-- </div> -->
                                                        </div>                                                
                                                    </div>        
                                                </div>
                                                <div class="row com-box">
                                                    <div class="col-md-6">
                                                        <p>Education</p>
                                                    </div>
                                                    <div class="col-md-6">       
                                                        <div class="control-group">                     
                                                            <div class="controls">
                                                                <!-- <p><b><?php // echo $results['phy_searchedu_status']; ?></b></p> --><p><b>
                                                                <?php 
                                                                if(!empty($expected_education)){
                                                                    foreach($expected_education as $key => $value) { ?>
                                                                            <li><?php echo $value['edu_name']; ?></li>
                                                                    <?php }
                                                                }?>  
                                                                </b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row com-box">
                                                    <div class="col-md-3">
                                                        <p>Expectation Food</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p><b><?php echo $results['phy_expectationfood_name']; ?></b></p>
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
                                                <div class="col-md-6">
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
        <!--================End Pricing Area =================-->       
        
       <!-- <div id="largeContent" style="display:none;">
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
        </div>-->
        
<?php 
    include('include/footer.php');
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
