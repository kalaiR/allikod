<?php 
    // echo '<pre>';
    // print_r($results);  
    // echo '</pre>';
    // exit();
    include('include/header.php');
    include('include/menu.php');
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
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Vallikodi ID</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p>
                                                        <?php if(!empty($results['userdetail_id'])) echo $results['userdetail_id']; else echo "None"; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Profile ID</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['userdetail_profile_id'])) echo $results['userdetail_profile_id']; else echo "-"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Starting Date</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p>
                                                        <?php 
                                                        if(empty($results['renewdetail_id'])){
                                                            if(!empty($results['startdate'])) 
                                                                echo date("Y-m-d", strtotime($results['startdate'])); 
                                                            else 
                                                                echo "None"; 
                                                        }
                                                        else{
                                                            if(!empty($results['starting_date'])) 
                                                                echo date("Y-m-d", strtotime($results['starting_date']));
                                                            else 
                                                                echo "None"; 
                                                        }
                                                        ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Ending Date</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p>
                                                        <?php 
                                                        if(empty($results['renewdetail_id'])){
                                                            if(!empty($results['enddate'])) 
                                                                echo date("Y-m-d", strtotime($results['enddate']));
                                                            else 
                                                                echo "None"; 
                                                        }
                                                        else{
                                                            if(!empty($results['ending_date'])) 
                                                                echo date("Y-m-d", strtotime($results['ending_date']));
                                                            else 
                                                                echo "None"; 
                                                        }
                                                        ?>
                                                        </p>
                                                    </div>
                                                </div>                                          
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-xs-12">              
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>No. of Profiles</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p>
                                                        <?php 
                                                        if(empty($results['renewdetail_id'])){
                                                            if(!empty($results['payment_totalprofile'])) 
                                                                echo $results['payment_totalprofile']; 
                                                            else 
                                                                echo "0"; 
                                                        }
                                                        else{
                                                            if(!empty($results['ren_totalprofile'])) 
                                                                echo $results['ren_totalprofile']; 
                                                            else 
                                                                echo "0"; 
                                                        }
                                                        ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>No. of Profiles Viewed</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p>
                                                        <?php 
                                                        if(empty($results['renewdetail_id'])){
                                                            if(!empty($results['no_of_profiles_viewed'])) 
                                                                echo $results['no_of_profiles_viewed']; 
                                                            else 
                                                                echo "0"; 
                                                        }
                                                        else{
                                                            if(!empty($results['ren_viewedprofile'])) 
                                                                echo $results['ren_viewedprofile']; 
                                                            else 
                                                                echo "0"; 
                                                        }
                                                        ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Remaining Profiles to View</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php
                                                        if(empty($results['renewdetail_id'])){
                                                            echo $remaining_profile= $results['payment_totalprofile'] - $results['no_of_profiles_viewed'];
                                                        }
                                                        else{
                                                            echo $remaining_profile= $results['ren_totalprofile'] - $results['ren_viewedprofile'];
                                                        }
                                                ?></p>
                                                    </div>
                                                </div> 
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Payment Status</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php
                                                        if(empty($results['renewdetail_id'])){
                                                            $status = $results['payment_status'];
                                                            if($status == "1")
                                                                echo "Active";
                                                            else
                                                                echo "InActive";
                                                        }
                                                        else{
                                                            $status = $results['ren_activestatus'];
                                                            if($status == "1")
                                                                echo "Active";
                                                            else
                                                                echo "InActive";
                                                        }
                                                ?></p>
                                                    </div>
                                                </div>                             
                                            </div>
                                        </div>
                                    </div>                                                 
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Communication Details</h3>
                                </div>                                
                                <div class="profile_list">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Residence</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p>
                                                        <?php if(!empty($results['comm_residence'])) echo $results['comm_residence']; else echo "None"; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Current Country</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['comm_current_countrycountry'])) echo $results['comm_current_countrycountry']; else echo "None"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Current City</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <!-- <p><?php //echo $results['comm_current_city']; ?></p> -->
                                                         <p><?php if(!empty($results['comm_current_city'])) echo $results['comm_current_city']; else echo "None"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Current District</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <!-- <p><?php //echo $results['comm_current_district']; ?></p> -->
                                                        <p><?php if(!empty($results['comm_current_district'])) echo $results['comm_current_district']; else echo "None"; ?></p>
                                                    </div>
                                                </div>                                      
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-xs-12">              
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Phone Number</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['comm_phone_no'])) echo $results['comm_phone_no']; else echo "-"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Mobile Number</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['comm_mobile_no'])) echo $results['comm_mobile_no']; else echo "-"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12"> 
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Address</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['comm_communication_address'])) echo $results['comm_communication_address']; else echo "None"; ?></p>
                                                    </div>
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
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Registered By</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['registered_by_name'])) echo $results['registered_by_name']; else echo "None"; ?></p>
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
                                                        <p><?php if(!empty($results['user_dob'])) echo $results['user_dob']; else echo "None"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Marital Status</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['marital_name'])) echo $results['marital_name']; else echo "None"; ?></p>
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
                                                        <p>
                                                        <?php if(!empty($results['rel_timeofbirth'])) echo $results['rel_timeofbirth']; else echo "None"; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Mother Tongue</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['mother_tongue_name'])) echo $results['mother_tongue_name']; else echo "None"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Dhosham</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                         <p><?php if(!empty($dhosham['name'])) echo $dhosham['name']; else echo "None"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Nakshathra</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['nakshathra_name'])) echo $results['nakshathra_name']; else echo "None"; ?></p>
                                                    </div>
                                                </div>                                           
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-xs-12">              
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Luknam</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['lukhnam_name'])) echo $results['lukhnam_name']; else echo "None"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Gothra</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['rel_gothra'])) echo $results['rel_gothra']; else echo "None"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Zodiac Sign</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['zodiac_name'])) echo $results['zodiac_name']; else echo "None"; ?></p>
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
                                                    <p><?php if(!empty($results['edu_name'])) echo $results['edu_name']; else echo "None"; ?></p>
                                                </div >
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6 ">
                                                <p>Education in Detail</p>
                                                </div>
                                                <div class="col-md-4 col-xs-4 dark">
                                                    <p class="text_short"><?php if(!empty($results['edu_educationdetails'])) echo $results['edu_educationdetails']; else echo "None"; ?></p>
                                                </div>
                                                <div class="col-md-1 col-xs-1 tooltips long">
                                                    <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php if(!empty($results['edu_educationdetails'])) echo $results['edu_educationdetails']; else echo "None"; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Occupation</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php if(!empty($results['occupation_name'])) echo $results['occupation_name']; else echo "None"; ?></p>
                                                </div>
                                            </div>                                 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6 ">
                                                <p>Occupation in Detail</p>
                                                </div>
                                                <div class="col-md-4 col-xs-4 dark">
                                                    <p class="text_short"><?php if(!empty($results['edu_occupationdetail'])) echo $results['edu_occupationdetail']; else echo "None"; ?></p>
                                                </div>
                                                <div class="col-md-1 col-xs-1 tooltips long">
                                                    <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php if(!empty($results['edu_occupationdetail'])) echo $results['edu_occupationdetail']; else echo "None"; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6 ">
                                                <p>Employed In</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php if(!empty($results['empin_name'])) echo $results['empin_name']; else echo "None"; ?></p>
                                                </div >
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Monthly Income (र)</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php if(!empty($results['edu_montlyincome'])) echo $results['edu_montlyincome']; else echo "None"; ?></p>
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
                                        <div class="col-md-6">
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Father's Name</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php if(!empty($results['comm_father_name'])) echo $results['comm_father_name']; else echo "None"; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6 ">
                                                <p>Mothers Name</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php if(!empty($results['comm_mother_name'])) echo $results['comm_mother_name']; else echo "None"; ?></p>
                                                </div >
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Father's Occupation</p>
                                                </div>
                                                <div class="col-md-4 col-xs-4 dark">
                                                    <p class="text_short"><?php if(!empty($results['comm_father_employment'])) echo $results['comm_father_employment']; else echo "None"; ?></p>
                                                </div>
                                                <div class="col-md-1 col-xs-1 tooltips long">
                                                    <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php if(!empty($results['comm_father_employment'])) echo $results['comm_father_employment']; else echo "None"; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Mothers's Occupation</p>
                                                </div>
                                                <div class="col-md-4 col-xs-4 dark">
                                                    <p class="text_short"><?php if(!empty($results['comm_mother_employment'])) echo $results['comm_mother_employment']; else echo "None"; ?></p>
                                                </div>
                                                <div class="col-md-1 col-xs-1 tooltips long">
                                                    <i class="fa fa-eye " aria-hidden="true"></i><span class="tooltiptext"><?php if(!empty($results['comm_mother_employment'])) echo $results['comm_mother_employment']; else echo "None"; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Family Status</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php if(!empty($results['family_statusname'])) echo $results['family_statusname']; else echo "None"; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="col-md-6 col-xs-6">
                                                <p>Family Type</p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 dark">
                                                    <p><?php if(!empty($results['family_typename'])) echo $results['family_typename']; else echo "None"; ?></p>
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
                                                    <p><?php if(!empty($results['comm_number_of_brothers_el'])) echo $results['comm_number_of_brothers_el']; else echo "-"; ?></p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p><?php if(!empty($results['comm_number_of_brothers_yo'])) echo $results['comm_number_of_brothers_yo']; else echo "-"; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6">
                                                <p>No.of Sisters</p>
                                                </div>
                                                <div class="col-md-3 col-xs-3 dark">
                                                    <p><?php if(!empty($results['comm_number_of_sisters_el'])) echo $results['comm_number_of_sisters_el']; else echo "-"; ?></p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p><?php if(!empty($results['comm_number_of_sisters_yo'])) echo $results['comm_number_of_sisters_yo']; else echo "-"; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6">
                                                <p>No.of Married Brothers</p>
                                                </div>
                                                <div class="col-md-3 col-xs-3 dark">
                                                    <p><?php if(!empty($results['comm_number_of_brothers_el_mar'])) echo $results['comm_number_of_brothers_el_mar']; else echo "-"; ?></p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p><?php if(!empty($results['comm_number_of_brothers_yo_mar'])) echo $results['comm_number_of_brothers_yo_mar']; else echo "-"; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div  class="col-md-6 col-xs-6">
                                                <p>No.of Married Sisters</p>
                                                </div>
                                                <div class="col-md-3 col-xs-3 dark">
                                                    <p><?php if(!empty($results['comm_number_of_sisters_el_mar'])) echo $results['comm_number_of_sisters_el_mar']; else echo "-"; ?></p>
                                                </div >
                                                <div class="col-md-3 col-xs-3 dark">
                                                <p><?php if(!empty($results['comm_number_of_sisters_yo_mar'])) echo $results['comm_number_of_sisters_yo_mar']; else echo "-"; ?></p>
                                                </div>
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
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Height in CM</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['phy_height'])) echo $results['phy_height']; else echo "-"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Height in Feet</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['phy_feet'])) echo $results['phy_feet']; else echo "-"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Weight</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p>
                                                        <?php if(!empty($results['phy_weight'])) echo $results['phy_weight']; else echo "-"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Body Type</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['body_typename'])) echo $results['body_typename']; else echo "None"; ?></p>
                                                    </div>
                                                </div>                                            
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-xs-12">              
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Complexion</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['complexion_typename'])) echo $results['complexion_typename']; else echo "None"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="col-md-6 col-xs-6">
                                                    <p>Physical Status</p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 dark">
                                                        <p><?php if(!empty($results['phy_physicalstatus'])) echo $results['phy_physicalstatus']; else echo "None"; ?></p>
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
                                                        <p><?php if(!empty($results['food_name'])) echo $results['food_name']; else echo "None"; ?></p>
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
                                                <div class="col-xs-12">
                                                    <div class="col-md-3 col-xs-3">
                                                        <p>Age</p>
                                                    </div>
                                                    <div class="col-md-1 col-xs-3">
                                                    <p>From</p>
                                                    </div>
                                                    <div class="col-md-1 col-xs-2">        
                                                        <p><b><?php echo $results['phy_searchage_from']; ?></b></p> 
                                                    </div>
                                                     <div class="col-md-1 col-xs-1">        
                                                        <p>To</p> 
                                                    </div> 
                                                    <div class="col-md-1 col-xs-1">        
                                                        <p><b><?php echo $results['phy_searchage_to']; ?></b></p> 
                                                    </div>  
                                                 </div>                                     
                                            </div>
                                            <div class="row com-box">
                                                <div class="col-xs-12">
                                                    <div class="col-md-3 col-xs-6">
                                                        Marital Status
                                                    </div>
                                                    <div class="col-md-9 col-xs-6">
                                                        <div class="checkbox">
                                                        <b>
                                                        <!-- <input type="checkbox" value=""> -->
                                                        <!-- <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> -->
                                                                <!-- <b><?php // echo $results['maritalname']; ?></b> -->
                                                        <?php if(!empty($expected_maritalstatus)){
                                                            foreach($expected_maritalstatus as $key => $value) { ?>
                                                                <li><?php echo $value[0]['marital_name']; ?></li>
                                                                <?php 
                                                        }} ?>
                                                        </b>
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
                                                </div>
                                                <div class="row com-box">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-3 col-xs-6">
                                                            Education
                                                        </div>
                                                        <div class="col-md-9 col-xs-6">       
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <!-- <p><b><?php // echo $results['phy_searchedu_status']; ?></b></p> -->
                                                                    <b>
                                                                    <?php 
                                                                    if(!empty($expected_education)){
                                                                        foreach($expected_education as $key => $value) { ?>
                                                                                <li><?php echo $value['edu_name']; ?></li>
                                                                        <?php }
                                                                    }?>  
                                                                    </b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row com-box">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-3 col-xs-6">
                                                            <p>Expectation Food</p>
                                                        </div>
                                                        <div class="col-md-8 col-xs-6">
                                                            <p><b><?php echo $results['phy_expectationfood_name']; ?></b></p>
                                                        </div>
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
                                                <div class="col-md-6" style="padding-bottom: 20px">
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
