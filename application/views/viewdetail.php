<?php 
include('include/header.php');
include('include/menu.php');

// echo '<pre>';
// print_r($results);
// echo '</pre>';
// exit();
?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="<?php echo base_url(); ?>assets/img/banner/t-left-img.png" alt="">View<img class="right_img" src="<?php echo base_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
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
                            <a href="<?php echo base_url();?>index.php/search_result" class="register_angkar_btn login_btn pull-right">Back</a>
                        </div> 
                    <div class="members_profile_inners">
                            <div class="members_about_box">
                                <div class="heads">
                                <h3 id="hcolor">Image</h3>
                                </div>
                                <div></div>
                                <!-- <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.</p> -->
                                <!-- <div class="profile_list"> -->
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
                                            <img src="<?php 
                                                if(!empty($results['images'])): 
                                                    echo base_url()."uploads/profile/".$prefix.$results['images']; 
                                                else:
                                                    echo base_url()."assets/img/no_image.jpg"; 
                                                endif; 
                                            ?>" alt="Image not loaded" style="width:170px;height:170px;">
                                            <ul>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Vallikodi ID</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['user_fname']; ?></a></li>
                                            <li><a href="#"><?php echo $results['userdetail_id']; ?></a></li>
                                        </ul>                                        
                                    </div>                  
                                </div>
                                 <div class="members_about_box">                                    
                                    <h3 id="hcolor">Communication Detail</h3>
                                    <div class="profile_list"> 
                                    <p><b>Click the button to view the contact details</b>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" value="View" class="btn form-control login_btn show_hide">View</button></p><br>
                                    <!-- <a href="search.html" class="register_angkar_btn">View</a> -->
                                        <div class="slidingDiv">                                    
                                            <ul>
                                                <li><a href="#">Residence</a></li>
                                                <li><a href="#">Current Country</a></li>
                                                <li><a href="#">Current City</a></li>
                                                <li><a href="#">Current District</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">India</a></li>
                                                <li><a href="#">India</a></li>
                                                <li><a href="#">Villupuram</a></li>
                                                <li><a href="#">Villupuram</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">Communication Address</a></li>
                                                <li><a href="#">Phone Number</a></li>
                                                <li><a href="#">Mobile Number</a></li>
                                                <li><a href="#">-</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">9, first street, NG nagar, Pondicherry, 605111.</a></li>
                                                <li><a href="#">28569896</a></li>
                                                <li><a href="#">9865324712</a></li>
                                                <li><a href="#">-</a></li>                             
                                            </ul>
                                        </div> 
                                    </div>                                                           
                                </div>                  
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Profile Details</h3>
                                </div>
                                
                                <!-- <div class="profile_list"> -->
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a href="#">Registered By</a></li>
                                            <li><a href="#">Gender</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['registered_by_name']; ?></a></li>
                                            <li><a href="#"><?php echo $results['user_gender'] != 2 ? 'Male':'Female'; ?></a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Date of Birth/ Age</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['user_dob']; ?></a></li>
                                            <li><a href="#"><?php echo $results['marital_name']; ?></a></li>
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
                                            <li><a href="#">TIme of Birth</a></li>
                                            <li><a href="#">Mother Tongue</a></li>
                                            <li><a href="#">Dhosham</a></li>
                                            <li><a href="#">Nakshathra</a></li>                                            
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['rel_timeofbirth']; ?></a></li>
                                            <li><a href="#"><?php echo $results['mother_tongue_name']; ?></a></li>
                                            <li><a href="#"><?php echo $results['rel_dhosham']; ?></a></li>
                                            <li><a href="#"><?php echo $results['nakshathra_name']; ?></a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Luknam</a></li>
                                            <li><a href="#">Gothra</a></li>
                                            <li><a href="#">Zodiac Sign</a></li>
                                        </ul>
                                        <ul>
                                             <li><a href="#"><?php echo $results['rel_dhosham']; ?></a></li>
                                             <li><a href="#"><?php echo $results['rel_gothra']; ?></a></li>
                                             <li><a href="#"><?php echo $results['zodiac_name']; ?></a></li>
                                        </ul>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Education & Occupation</h3>
                                </div>
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Education in Detail</a></li>
                                            <li><a href="#">Occupation</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['edu_name']; ?></a></li>
                                            <li><a href="#"><?php echo $results['edu_educationdetails']; ?></a></li>
                                            <li><a href="#"><?php echo $results['occupation_name']; ?></a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Employed In</a></li>
                                            <li><a href="#">Monthly Income (<i class="fa fa-inr" aria-hidden="true"></i>)</a></li>
                                            <li><a href="#">Occupation in Detail</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['empin_name']; ?></a></li>
                                            <li><a href="#"><?php echo $results['edu_montlyincome']; ?></a></li>
                                            <li><a href="#"><?php echo $results['edu_occupationdetail']; ?></a></li>           
                                            
                                        </ul>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                <div id="">
                                <h3 id="hcolor">Family</h3>
                                </div>                            
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a href="#">Father's Name</a></li>
                                            <li><a href="#">Mother's Name</a></li>
                                            <li><a href="#">Father's Occupation</a></li>
                                            <li><a href="#">Mother's Occupation</a></li>
                                            <li><a href="#">Family Status</a></li>
                                            <li><a href="#">Family Type</a></li>
                                            <!-- <li><a href="#">Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['comm_father_name']; ?></a></li>
                                            <li><a href="#"><?php echo $results['comm_mother_name']; ?></a></li>
                                            <li><a href="#"><?php echo $results['comm_father_employment']; ?></a></li>
                                            <li><a href="#"><?php echo $results['comm_mother_employment']; ?></a></li>
                                            <li><a href="#"><?php echo $results['family_statusname']; ?></a></li>
                                            <li><a href="#"><?php echo $results['family_typename']; ?></a></li>
                                            <!-- <li><a href="#">Designer</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a href="#">-</a></li>
                                            <li><a href="#">No. of Brothers</a></li>
                                            <li><a href="#">No. of Sisters</a></li>
                                            <li><a href="#">No. of Brothers Married</a></li>
                                            <li><a href="#">No. of Sisters Married</a></li>                           
                                        </ul>
                                        <ul>
                                           <li><a href="#">Elder</a></li>
                                           <li><a href="#"><?php echo $results['comm_number_of_brothers_el']; ?></a></li>
                                           <li><a href="#"><?php echo $results['comm_number_of_sisters_el']; ?></a></li>
                                           <li><a href="#"><?php echo $results['comm_number_of_brothers_el_mar']; ?></a></li>
                                           <li><a href="#"><?php echo $results['comm_number_of_sisters_el_mar']; ?></a></li> 
                                        </ul>
                                        <ul>
                                            <li><a href="#">younger</a></li>
                                            <li><a href="#"><?php echo $results['comm_number_of_brothers_yo']; ?></a></li>
                                            <li><a href="#"><?php echo $results['comm_number_of_sisters_yo']; ?></a></li>
                                            <li><a href="#"><?php echo $results['comm_number_of_brothers_yo_mar']; ?></a></li>
                                            <li><a href="#"><?php echo $results['comm_number_of_sisters_yo_mar']; ?></a></li>
                                        </ul>
                                    </div>                                             
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                        <h3 id="hcolor">Physical Attributes</h3>
                                    </div>                                
                                <div class="profile_list">                                    
                                        <ul>
                                            <li><a href="#">Height</a></li>
                                            <li><a href="#">Weight</a></li>
                                            <li><a href="#">Body Type</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['phy_height']; ?></a></li>
                                            <li><a href="#"><?php echo $results['phy_weight']; ?></a></li>
                                            <li><a href="#"><?php echo $results['body_typename']; ?></a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Complexion</a></li>
                                            <li><a href="#">Physical Status</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $results['complexion_typename']; ?></a></li>
                                            <li><a href="#"><?php echo $results['phy_physicalstatus']; ?></a></li>
                                        </ul>
                                    </div>
                                </div> 
                                 <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Habits</h3>
                                    </div> 
                                        <div class="profile_list">                                    
                                            <ul>
                                                <li><a href="#">Food</a></li>                                     
                                            </ul>
                                            <ul>
                                                <li><a href="#"><?php echo $results['food_name']; ?></a></li>                                     
                                            </ul>                                                                   
                                        </div> 
                                </div>                               
                                 <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Your Personality</h3>
                                    </div> 
                                        <div class="profile_list">                                    
                                            <ul>
                                                <li><a href="#"><?php echo $results['phy_yourpersonality']; ?></a></li>
                                            </ul>                                                                 
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Age Expected</h3>
                                    </div> 
                                        <div class="profile_list">                                    
                                            <ul>
                                                <li><a href="#">Age</a></li>                                      
                                            </ul> 
                                            <ul>
                                                <li><a href="#"><?php echo $results['phy_searchage_from']; ?> - <?php echo $results['phy_searchage_to']; ?></a></li>                                    
                                            </ul>                                                                 
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Education Expected</h3>
                                    </div> 
                                        <div class="profile_list">                                    
                                            <ul>
                                                <li><a href="#">Education</a></li>                                      
                                            </ul> 
                                            <ul>
                                                <li><a href="#"><?php echo $results['phy_searchedu_status']; ?></a></li>                                    
                                            </ul>                                                                 
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Marital Status Expected</h3>
                                    </div> 
                                        <div class="profile_list">                                    
                                            <ul>
                                                <li><a href="#">Marital Status</a></li>                                      
                                            </ul> 
                                            <ul>
                                                <li>                                                     
                                                    <?php echo $results['maritalname']; ?>
                                                </li>                                    
                                            </ul>                                                                 
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Food Expected</h3>
                                    </div> 
                                        <div class="profile_list">                                    
                                            <ul>
                                                <li><a href="#">Diet</a></li>                                      
                                            </ul> 
                                            <ul>
                                             <?php echo $results['food_name']; ?>                              
                                            </ul>                                                                 
                                        </div> 
                                </div>
                                <div class="members_about_box">
                                    <div id="">
                                    <h3 id="hcolor">Expectation About Life Partner</h3>
                                    <div class="profile_list">
                                    <ul>
                                                <li><a href="#"></a></li>                                      
                                            </ul>
                                    <ul>
                                             <?php echo $results['phy_expectationabout_lifepartner']; ?>                              
                                            </ul> 

                                    </div>
                                    </div>                                                                  
                                </div>                                                          
                                <div class="members_about_box">
                                    <h3 id="hcolor">Horoscope</h3>
                                    <div class="profile_list"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget people_widget">
                                <div class="s_title">
                                    <h4>People You Might Like</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul class="nav navbar-nav">
                                    <li class="dropdown tool_hover">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="img/photo/people-p/people-1.png" alt=""></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="head_area">
                                                    <h4>Lara Davis</h4>
                                                    <h4>53% Match</h4>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="img/photo/people-p/people-drop-1.png" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6>29 years old <br /> From Derby <br /> Single</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><img class="img-circle" src="img/photo/people-p/people-2.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-circle" src="img/photo/people-p/people-3.png" alt=""></a></li>
                                    <li class="dropdown tool_hover">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="img/photo/people-p/people-4.png" alt=""></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="head_area">
                                                    <h4>Lara Davis</h4>
                                                    <h4>53% Match</h4>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="img/photo/people-p/people-drop-1.png" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6>29 years old <br /> From Derby <br /> Single</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><img class="img-circle" src="img/photo/people-p/people-5.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-circle" src="img/photo/people-p/people-6.png" alt=""></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--================End search_reslut grid Area =================-->
        
        <div id="largeContent" style="display:none;">
            <div class="media tool_content">
                <div class="media-left">
                    <img src="<?php echo base_url(); ?>assets/img/map-persion.png" alt="">
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
?> 
    </body>
</html>