<?php 
    include('include/header.php');
    include('include/menu.php');
//     echo '<pre>';
// print_r($results);
// echo '</pre>';
// exit();
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
                                <form method="post" action="<?php echo base_url(); ?>myedit">
                                    <div class="heads">
                                    <h3 id="hcolor">Name : <?php echo $results['user_fname']; ?><button  type="submit" value="Edit" class="btn form-control edit_btn pull-right">Edit</button></h3>
                                    </div>
                                </form>                                
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a>Vallikodi ID</a></li>
                                            <li><a>Profile ID</a></li>
                                            <li><a>Starting Date</a></li>
                                            <li><a>Ending Date</a></li>
                                            <!-- <li><a>Birthday</a></li>
                                            <li><a>Relationship</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['userdetail_id']; ?></a></li>
                                            <li><a><?php echo $results['userdetail_profile_id']; ?></a></li>
                                            <li><a><?php echo $results['startdate']; ?></a></li>
                                            <li><a><?php echo $results['enddate']; ?></a></li>
                                            <!-- <li><a>16 December 1990</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a>Total No. of Profiles</a></li>
                                            <li><a>No. of profiles viewed</a></li>
                                            <li><a>Remine Profile to View</a></li>
                                            <li><a>- </a> </li>
                                            <!-- <li><a>Eye Color</a></li>
                                            <li><a>Marital Status</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <!-- <li><a></a></li> -->
                                            <li><a><?php echo $results['totalno_of_profile']; ?></a></li>
                                            <li><a><?php echo $results['no_of_profiles_viewed']; ?></a></li>
                                            <?php
                                                $remaining_profile= $results['totalno_of_profile'] - $results['no_of_profiles_viewed'];
                                            ?>
                                            <li><a><?php echo $remaining_profile; ?></a></li>
                                            <li><a>-</a> </li>
                                            <!-- <li><a>Brown</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer </a></li> -->
                                        </ul>
                                    </div>
                                   <!--  <div class="row">
                                        
                                            <div class="col-md-3 col-sm-6 col"><p>Vallikodi ID</p></div>
                                            <div class="col-md-3 col-sm-6 col"><p>Profile ID</p></div>
                                            <div class="col-md-3 col-sm-6 col"><p>Vallikodi ID</p></div>
                                            <div class="col-md-3 col-sm-6 col"><p>Profile ID</p></div>
                                         </div>

                                    <div class="row">
                                        
                                        <div class="col-md-3 col-sm-6 col">562</div>
                                        <div class="col-md-3 col-sm-6 col">66</div>
                                        <div class="col-md-3 col-sm-6 col">562</div>
                                        <div class="col-md-3 col-sm-6 col">66</div>
                                    </div> -->
                                                            
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Communication Details</h3>
                                </div>
                                <!-- <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.</p> -->
                                <!-- <div class="profile_list"> -->
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a>Residence of</a></li>
                                            <li><a>Current Country</a></li>
                                            <li><a>Current City</a></li>
                                            <li><a>Current District</a></li>
                                            <!-- <li><a>Birthday</a></li>
                                            <li><a>Relationship</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['comm_residence']; ?></a></li>
                                            <li><a><?php echo $results['comm_current_countrycountry']; ?></a></li>
                                            <li><a><?php echo $results['comm_current_city']; ?></a></li>
                                            <li><a><?php echo $results['comm_current_district']; ?></a></li>
                                            <!-- <li><a>16 December 1990</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a>Phone Number</a></li>
                                            <li><a>Mobile No.</a></li>
                                            <li><a>Address</a></li>
                                            <li><a>-</a> </li>
                                            <!-- <li><a>Eye Color</a></li>
                                            <li><a>Marital Status</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['comm_phone_no']; ?></a></li>
                                            <li><a><?php echo $results['comm_mobile_no']; ?></a></li>
                                            <li><a><?php echo $results['comm_communication_address']; ?></a></li>
                                            <li><a>- </a></li>
                                            <!-- <li><a>Brown</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer </a></li> -->
                                        </ul>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Profile Details</h3>
                                </div>
                                <!-- <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.</p> -->
                                <!-- <div class="profile_list"> -->
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a>Registered By</a></li>
                                            <li><a>Gender</a></li>
                                            <!-- <li><a>Current City</a></li>
                                            <li><a>Current District</a></li>
                                            <li><a>Birthday</a></li>
                                            <li><a>Relationship</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['registered_by_name']; ?></a></li>
                                            <li><a><?php echo $results['user_gender']; ?></a></li>
                                            <!-- <li><a>Pondicherry</a></li>
                                            <li><a>Pondicherry</a></li>
                                            <li><a>16 December 1990</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a>Date of Birth/ Age</a></li>
                                            <li><a>Marital Status</a></li>
                                            <!-- <li><a>Address</a></li>
                                            <li><a></a>- </li>
                                            <li><a>Eye Color</a></li>
                                            <li><a>Marital Status</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['user_dob']; ?> / <?php echo $results['user_age']; ?></a></li>
                                            <li><a><?php echo $results['marital_name']; ?></a></li>
                                            <!-- <li><a>9, first street, NG nagar, Pondicherry, 605111.</a></li>
                                            <li><a></a>-</li>
                                            <li><a>Brown</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer </a></li> -->
                                        </ul>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Religion & Ethnicity</h3>
                                </div>
                                <!-- <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.</p> -->
                                <!-- <div class="profile_list"> -->
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a>Time of Birth</a></li>
                                            <li><a>Mother Tongue</a></li>
                                            <li><a>Dhosham</a></li>
                                            <li><a>Nakshathra</a></li>
                                            <!-- <li><a>Birthday</a></li>
                                            <li><a>Relationship</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['rel_timeofbirth']; ?></a></li>
                                            <li><a><?php echo $results['mother_tongue_name']; ?></a></li>
                                            <li><a><?php echo $results['rel_dhosham']; ?></a></li>
                                            <li><a><?php echo $results['nakshathra_name']; ?></a></li>
                                            <!-- <li><a>16 December 1990</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a>Luknam</a></li>
                                            <li><a>Gothra</a></li>
                                            <li><a>Zodiac Sign</a></li>
                                            <li><a>-</a></li>
                                            <!-- <li><a></a>- </li>
                                            <li><a>Eye Color</a></li>
                                            <li><a>Marital Status</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['lukhnam_name']; ?></a></li>
                                            <li><a><?php echo $results['rel_gothra']; ?></a></li>
                                            <li><a><?php echo $results['zodiac_name']; ?></a></li>
                                            <li><a>-</a></li>            
                                            <!-- <li><a>9, first street, NG nagar, Pondicherry, 605111.</a></li>
                                            <li><a></a>-</li>
                                            <li><a>Brown</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer </a></li> -->
                                        </ul>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Education & Occupation</h3>
                                </div>
                                <!-- <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.</p> -->
                                <!-- <div class="profile_list"> -->
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a>Education</a></li>
                                            <li><a>Education in Detail</a></li>
                                            <li><a>Occupation</a></li>
                                            <!-- <li><a>Birthday</a></li>
                                            <li><a>Relationship</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['edu_name']; ?></a></li>
                                            <li><a><?php echo $results['edu_educationdetails']; ?></a></li>
                                            <li><a><?php echo $results['occupation_name']; ?></a></li>
                                            <!-- <li><a>16 December 1990</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a>Employed In</a></li>
                                            <li><a>Monthly Income (<i class="fa fa-inr" aria-hidden="true"></i>)</a></li>
                                            <li><a>Occupation in Detail</a></li>
                                            <!-- <li><a></a>- </li>
                                            <li><a>Eye Color</a></li>
                                            <li><a>Marital Status</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['empin_name']; ?></a></li>
                                            <li><a><?php echo $results['edu_montlyincome']; ?></a></li>
                                            <li><a><?php echo $results['edu_occupationdetail']; ?></a></li>           
                                            <!-- <li><a>9, first street, NG nagar, Pondicherry, 605111.</a></li>
                                            <li><a></a>-</li>
                                            <li><a>Brown</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer </a></li> -->
                                        </ul>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Family</h3>
                                </div>                            
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a>Father's Name</a></li>
                                            <li><a>Mother's Name</a></li>
                                            <li><a>Father's Occupation</a></li>
                                            <li><a>Mother's Occupation</a></li>
                                            <li><a>Family Status</a></li>
                                            <li><a>Family Type</a></li>
                                            <!-- <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['comm_father_name']; ?></a></li>
                                            <li><a><?php echo $results['comm_mother_name']; ?></a></li>
                                            <li><a><?php echo $results['comm_father_employment']; ?></a></li>
                                            <li><a><?php echo $results['comm_mother_employment']; ?></a></li>
                                            <li><a><?php echo $results['comm_family_status']; ?></a></li>
                                            <li><a><?php echo $results['comm_family_type']; ?></a></li>
                                            <!-- <li><a>Designer</a></li> -->
                                        </ul>

                                        <ul>
                                            <li><a>-</a></li>
                                            <li><a>No. of Brothers</a></li>
                                            <li><a>No. of Sisters</a></li>
                                            <li><a>No. of Brothers Married</a></li>
                                            <li><a>No. of Sisters Married</a></li>                           
                                        </ul>
                                        <ul>
                                            <li><a>Elder</a></li>
                                            <li><a><?php echo $results['comm_number_of_brothers_el']; ?></a></li>
                                            <li><a><?php echo $results['comm_number_of_sisters_el']; ?></a></li>
                                            <li><a><?php echo $results['comm_number_of_brothers_el_mar']; ?></a></li>
                                            <li><a><?php echo $results['comm_number_of_sisters_el_mar']; ?></a></li>
                                            <!-- <li><a>Designer</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a>younger</a></li>
                                            <li><a><?php echo $results['comm_number_of_brothers_yo']; ?></a></li>
                                            <li><a><?php echo $results['comm_number_of_sisters_yo']; ?></a></li>
                                            <li><a><?php echo $results['comm_number_of_brothers_yo_mar']; ?></a></li>
                                            <li><a><?php echo $results['comm_number_of_sisters_yo_mar']; ?></a></li>
                                            <!-- <li><a>Designer</a></li> -->
                                        </ul>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">More About Family</h3>
                                    <div class="profile_list"> 
                                    </div>
                                    </div>                                                                  
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Physical Attributes</h3>
                                </div>                                
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a>Height</a></li>
                                            <li><a>Weight</a></li>
                                            <li><a>Body Type</a></li>
                                            <!-- <li><a>Birthday</a></li>
                                            <li><a>Relationship</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['phy_height']; ?></a></li>
                                            <li><a><?php echo $results['phy_weight']; ?></a></li>
                                            <li><a><?php echo $results['phy_bodytype']; ?></a></li>
                                            <!-- <li><a>16 December 1990</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a>Complexion</a></li>
                                            <li><a>Physical Status</a></li>
                                            <!-- <li><a>Occupation in Detail</a></li> -->
                                            <!-- <li><a></a>- </li>
                                            <li><a>Eye Color</a></li>
                                            <li><a>Marital Status</a></li>
                                            <li><a>Looking for a</a></li>
                                            <li><a>Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a><?php echo $results['complexion_typename']; ?></a></li>
                                            <li><a><?php echo $results['phy_physicalstatus']; ?></a></li>
                                            <!-- <li><a>Project Coordinator</a></li>            -->
                                            <!-- <li><a>9, first street, NG nagar, Pondicherry, 605111.</a></li>
                                            <li><a></a>-</li>
                                            <li><a>Brown</a></li>
                                            <li><a>Single</a></li>
                                            <li><a>Man</a></li>
                                            <li><a>Designer </a></li> -->
                                        </ul>
                                    </div>
                                </div> 
                                 <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Habits</h3>
                                    </div> 
                                        <div class="profile_list">                                    
                                            <ul>
                                                <li><a>Food</a></li>                                     
                                            </ul>
                                            <ul>
                                                <li><a><?php echo $results['food_name']; ?></a></li>                                     
                                            </ul>                                                                   
                                        </div> 
                                </div>                               
                                 <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Your Personality</h3>
                                    </div> 
                                        <div class="profile_list">                                    
                                            <ul>
                                                <li><a><?php echo $results['phy_yourpersonality']; ?></a></li>
                                                <!-- <li><a>Mother's Name</a></li>
                                                <li><a>Father's Occupation</a></li>
                                                <li><a>Mother's Occupation</a></li>
                                                <li><a>Family Status</a></li>
                                                <li><a>Family Type</a></li>
 -->                                                <!-- <li><a>Work as</a></li> -->
                                            </ul>                                                                 
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Expectation About Life Partner</h3>
                                    <div class="profile_list">
                                    </div>
                                    </div>                                                                  
                                </div>
                                 <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Search(Expectation/Looking for)</h3>
                                    </div> 
                                        <div class="profile_list">
                                            <ul>
                                                <li><a><?php echo $results['phy_expectationabout_lifepartner']; ?></a></li>
                                            </ul>
                                            <ul>
                                                <li><a>From <?php echo $results['phy_searchage_from']; ?> To <?php echo $results['phy_searchage_to']; ?></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12  aline-center-box ">
                                           <div class="row">
                                                <div class="profile_list">
                                                    <!-- <div class="height_item profile_list"> -->
                                                        <p>Marital Status</p>
                                                        <label>
                                                        <!-- <input type="checkbox" value=""> -->
                                                        <!-- <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> -->
                                                                <?php echo $results['maritalname']; ?>
                                                    </label>
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
                                        <div class="profile_list">
                                            <ul>
                                                <li><a>Education</a></li>
                                                <!-- <li><a>Mother's Name</a></li>
                                                <li><a>Father's Occupation</a></li>
                                                <li><a>Mother's Occupation</a></li>
                                                <li><a>Family Status</a></li>
                                                <li><a>Family Type</a></li>
 -->                                                <!-- <li><a>Work as</a></li> -->
                                            </ul> 
                                            <ol>
                                                <li><a><?php echo $results['phy_searchedu_status']; ?></a></li>
                                                <!-- <li><a>BE/BTech</a></li>
                                                <li><a>BSc</a></li>
                                                <li><a>B Com</a></li> -->
                                                <!-- <li><a>Family Status</a></li>
                                                <li><a>Family Type</a></li>
                                                <li><a>Work as</a></li> -->
                                            <ol>
                                        </div>
                                        <div class="profile_list">
                                            <ul>
                                                <li><a>Expectation Food</a></li>
                                            </ul>
                                            <ul>
                                                <li><a><?php echo $results['phy_expectationfood']; ?></a></li>
                                            </ul>
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
