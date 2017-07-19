<?php 
include('include/header.php');
include('include/menu.php');
?> 

     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Register Here"><img class="left_img" src="<?php echo base_url(); ?>assets/img/banner/t-left-img.png" alt="">Register Here<img class="right_img" src="<?php echo base_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <section class="advanced_search_area">
            <div class="container">
                <div class="welcome_white_title">
                    <h3>Register Here</h3>
                    <img src="<?php echo base_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="search_option">
                    <!-- Nav tabs -->
                   <!--  <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="search.html#base" aria-controls="base" role="tab" data-toggle="tab">User Details</a></li>
                         <li role="presentation" class="#"><a href="search.html#advanced-search" aria-controls="advanced-search" role="tab" data-toggle="tab">Ethnicity</a></li>
                        <li role="presentation" class="#"><a href="search.html#vallikodi" aria-controls="vallikodi" role="tab" data-toggle="tab">Education</a></li>
                        <li role="presentation" class="#"><a href="search.html#manual-id" aria-controls="manual-id" role="tab" data-toggle="tab">Family</a></li>
                         <li role="presentation" class="#"><a href="search.html#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab">Expectation</a></li>
                         <li role="presentation" class="#"><a href="search.html#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab">Image &amp;Horoscope</a></li>
                    </ul> -->

                    <ul class="nav nav-tabs registration-step " role="tablist">
                        <li role="presentation" class="highlight" id="userdetails">
                            <a href="search.html#base" aria-controls="base" role="tab" data-toggle="tab">User Details</a>
                        </li>
                        <li role="presentation" class="#" id="ethnicity">
                            <a href="search.html#advanced-search" aria-controls="advanced-search" role="tab" data-toggle="tab">Ethnicity</a>
                        </li>
                        <li role="presentation" class="#" id="education">
                            <a href="search.html#vallikodi" aria-controls="vallikodi" role="tab" data-toggle="tab">
                            Education</a>
                        </li>
                        <li role="presentation" class="#" id="search">
                            <a href="search.html#manual-id" aria-controls="manual-id" role="tab" data-toggle="tab">
                            Family</a>
                        </li>
                        <li role="presentation" class="#" id="exceptation">
                            <a href="search.html#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab">Expectation</a>
                        </li>
                        <li role="presentation" class="#" id="horoscope">
                            <a href="search.html#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab">Image &amp;Horoscope</a>
                        </li>
                    </ul>

                    
                    <form name="frmRegistration" id="registration-form" method="post" action="registration">
                        <div class="tab-content">    
                                <!-- Tab1 -->                    
                                <div role="tabpanel" class="tab-pane fade in active" id="userdetails-field">
                                    <div class="registration_form_are">
                                         <div class="row">
                                            <div class="col-sm-12 aline-center-box">
                                                <div class="registration_form_s form-box aline-center-box">
                                                     <div class="col-sm-2 aline-center-box box">
                                                        <div class="height_item">      
                                                            <h3>User Details</h3>
                                                        </div>    
                                                     </div>
                                                        <input type="hidden" value="edit" id="popup_mode" />
                                                        <p class="val_error"> </p>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Email</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <span id="register_email-error" class="registration-error"></span>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control tabfield" id="register_email" placeholder="Email" name="register_email" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>                                                  
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Password</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="password" class="form-control tabfield" id="reg_pass1" placeholder="Password" name="reg_pass1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Confirm Password</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="password" class="form-control" id="reg_con_pass2" name="reg_con_pass2" placeholder="Confirm Password">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Register By</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control customize_plan" name="register_by[]" id="register_by">
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
                                                        </div>
                                                         <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Name</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_Name" placeholder="Name" id="reg_Name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Gender</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control customize_plan" name="gender[]">
                                                                                <option value="">Select</option>
                                                                                <option value="1">Male</option>
                                                                                <option value="2">Female</option>                                 
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                         <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Birthday</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="datepicker">
                                                                                <input type='text' class="form-control datetimepicker4" placeholder="Birthday" id="dob" name="dob"/>
                                                                                <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                            </div>
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
                                                                            <select class="form-control customize_plan" name="marital_status[]">
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
                                                </div>
                                            </div>
                                         </div>
                                     </div>  
                                 </div>
                                 <!-- Tab2 -->                    
                                    <div role="tabpanel" class="tab-pane fade in" id="ethnicity-field" style="display:none;">
                                        <div class="registration_form_are">
                                         <div class="row">
                                            <div class="col-sm-12 aline-center-box">
                                                <div class="registration_form_s form-box aline-center-box">
                                                     <div class="col-sm-3 aline-center-box box">
                                                        <div class="height_item">      
                                                            <h3>Ethnicity</h3>
                                                        </div>    
                                                     </div>
                                                     
                                                      
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Time</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="time" class="form-control" id="reg_time2" placeholder="Time of Birth">
                                                                            </div>
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
                                                                        <select class="form-control customize_plan" name="mother_tongue[]">
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
                                                                            <h4>Religion</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_religion" name="reg_religion"placeholder="Religion">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Caste</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_caste" name="reg_religion"placeholder="Caste">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Dhosham</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_Dhosham" name="reg_Dhosham"placeholder="Dhosham">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Nakshathra</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="nakshathra[]"
                                                                             id="nakshathra">
                                                                               <option value="">Select</option>
                                                                               <?php 
                                                                                    if(!empty($nakshathra)) :
                                                                                    foreach ($nakshathra as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['nakshathra_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                                            <h4>Luknam</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="luknam[]"
                                                                             id="luknam">
                                                                                <option value="">Select</option>
                                                                                 <?php 
                                                                                    if(!empty($luknam)) :
                                                                                    foreach ($luknam as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['luknam_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                                            <h4>Gothra</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_gothra" name="reg_gothra" placeholder="Gothra">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>  
                                                     
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Zodiac Sign</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" id="zodiac_sign" name="zodiac_sign[]" >
                                                                                <option value="">Select</option>
                                                                               <?php 
                                                                                    if(!empty($zodiac)) :
                                                                                    foreach ($zodiac as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['zodiacsign_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                         </div>
                                     </div>                         
                                   </div>
                                 <!-- Tab3 -->                      
                                   <div role="tabpanel" class="tab-pane fade in" id="education-field" style="display:none;">                                
                                        <div class="registration_form_are">
                                         <div class="row">
                                            <div class="col-sm-12 aline-center-box">
                                                <div class="registration_form_s form-box aline-center-box">
                                                     <div class="col-sm-3 aline-center-box box">
                                                        <div class="height_item">      
                                                            <h3>Education</h3>
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
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Education in Detail</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                               <textarea class="form-control" rows="5" id="education_detail" placeholder="Education in detail" name="education_detail"></textarea>
                                                                            </div>
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
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="occupation[]"  id="occupation">
                                                                                <option value="">Select</option>
                                                                                <?php 
                                                                                    if(!empty($occupation)) :
                                                                                    foreach ($occupation as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['occupation_id'] . "'>" . ucfirst($cls_val['occupation_name']) . "</option>";
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
                                                                            <h4>Employed In</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="employed_in[]" id="employed_in">
                                                                                <option value="">Select</option>
                                                                                <?php 
                                                                                    if(!empty($employed_in)) :
                                                                                        foreach ($employed_in as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['employedin_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                                            <h4>Monthly Income</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_income" placeholder="Income" name="reg_income">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Employment in Detail</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                               <textarea class="form-control" rows="5" id="employe_in_detail" placeholder="Employment in detail" name="employe_in_detail"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        
                                                        
                                                        <!-- <div class="search_btn">
                                                            <a href="matches.html#" class="register_angkar_btn pull-right">Next</a>
                                                            <!--<a href="matches.html#" class="white_angkar_btn">Reset</a>
                                                        </div> -->
                                                     
                                                </div>
                                            </div>
                                         </div>
                                     </div>                         
                                   </div>
                                 <!-- Tab4 -->                      
                                   <div role="tabpanel" class="tab-pane fade in" id="search-field" style="display:none;">                                                               
                                        <div class="registration_form_are">
                                         <div class="row">
                                            <div class="col-sm-12 aline-center-box">
                                                <div class="registration_form_s form-box aline-center-box">
                                                     <div class="col-sm-3 aline-center-box box">
                                                        <div class="height_item">      
                                                            <h3>Communication</h3>
                                                        </div>    
                                                     </div>
                                                                                                    
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Resident of</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="resident[]" id="resident">
                                                                                <option value="">Select</option>
                                                                                 <?php 
                                                                                    if(!empty($country)) :
                                                                                    foreach ($country as $cls_val) {
                                                                                    echo "<option value='" . $cls_val[' country_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                                            <h4>Current Country</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="cur_country[]" id="cur_country">
                                                                                <option value="">Select</option>
                                                                                <?php 
                                                                                    if(!empty($country)) :
                                                                                    foreach ($country as $cls_val) {
                                                                                    echo "<option value='" . $cls_val[' country_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                                            <h4>Current City</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_city" placeholder="City" name="reg_city">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>District</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_district" placeholder="District" id="reg_district">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Communication Address</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                               <textarea class="form-control" rows="5" id="comm_address" placeholder="Address" name="comm_address"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Phone Number</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_phone" placeholder="Phone" name="reg_phone">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Mobile Number</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_mobile" placeholder="Mobile" name="reg_mobile">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-3 aline-center-box box">
                                                            <div class="height_item">      
                                                                <h3>Family</h3>
                                                            </div>    
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Father's Name</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                            <input type="text" class="form-control" id="reg_fname" placeholder="FName" name="reg_fname">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Mother's Name</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_mname" placeholder="MName" name="reg_mname">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Father's Employment</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_femployment" placeholder="FEmployment" name="reg_femployment">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Mother's Employment</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_memployment" placeholder="MEmployment" name="reg_memployment">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Family Status</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" id="family_status" name="family_status[]">
                                                                                <option value="">Select</option>
                                                                                 <?php 
                                                                                    if(!empty($familystatus)) :
                                                                                    foreach ($familystatus as $cls_val) {
                                                                            echo "<option value='" . $cls_val['familystatus_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                                            <h4>Family Type</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" id="family_type" name="family_type[]">
                                                                                <option value="">Select</option>
                                                                                <?php 
                                                                                    if(!empty($familytype)) :
                                                                                    foreach ($familytype as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['familytype_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                            <div class="col-sm-4">
                                                            </div>
                                                            <div class="col-sm-2"> 
                                                            <label>Elder</label>
                                                            </div> 
                                                            <div class="col-sm-2"> 
                                                            <label>Younger</label>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                            <label>No. of Brothers</label>
                                                            </div>
                                                            <div class="col-sm-2"> 
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="reg_EBrother" placeholder="0" name="reg_EBrother">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-2"> 
                                                                 <div class="form-group">
                                                                    <input type="text" class="form-control" id="reg_YBrother" placeholder="0" name="reg_YBrother">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                            <label>No. of Sisters</label>
                                                            </div>
                                                            <div class="col-sm-2"> 
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="reg_ESister" placeholder="0" name="reg_ESister">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-2"> 
                                                                 <div class="form-group">
                                                                    <input type="text" class="form-control" id="reg_YSister" placeholder="0" name="reg_YSister">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-sm-4">
                                                            <label>No. of Married Brothers</label>
                                                            </div>
                                                            <div class="col-sm-2"> 
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="reg_MEBrother" placeholder="0" name="reg_MEBrother">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-2"> 
                                                                 <div class="form-group">
                                                                    <input type="text" class="form-control" id="reg_MYBrother" placeholder="0" name="reg_MYBrother">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                            <label>No. of Married Sisters</label>
                                                            </div>
                                                            <div class="col-sm-2"> 
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="reg_MESister" placeholder="0" name="reg_MESister">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-2"> 
                                                                 <div class="form-group">
                                                                    <input type="text" class="form-control" id="reg_MYSister" placeholder="0" name="reg_MYSister">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>More About Familly</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                               <textarea class="form-control" rows="5" id="more_abt_family" placeholder="More about Family" name="more_abt_family"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                </div>
                                            </div>
                                         </div>
                                     </div>                         
                                   </div>
                                 <!-- Tab5 -->                       
                                    <div role="tabpanel" class="tab-pane fade in" id="exceptation-field" style="display:none;">
                                       <div class="registration_form_are">
                                         <div class="row">
                                            <div class="col-sm-12 aline-center-box">
                                                <div class="registration_form_s form-box aline-center-box">
                                                     <div class="col-sm-3 aline-center-box box">
                                                        <div class="height_item">      
                                                            <h3>Physical</h3>
                                                        </div>    
                                                     </div>
                                                                                                 
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Height in CMs</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="height_in_cms[]" id="height_in_cms">
                                                                                <option value="">Select</option>
                                                                                <option value="160">160</option>
                                                                                <option value="165">165</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Weight in KGs</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="weight_in_kgs[]" id="weight_in_kgs">
                                                                                <option value="">Select</option>
                                                                                <option value="45">45</option>
                                                                                <option value="50">50</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Body Type</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="body_type[]" id="body_type">
                                                                                <option value="">Select</option>
                                                                                 <?php 
                                                                                    if(!empty($bodytype)) :
                                                                                    foreach ($bodytype as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['bodytype_id'] . "'>" . ucfirst($cls_val['typename']) . "</option>";
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
                                                                            <h4>Complexion</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="complexion[]" id="complexion" >
                                                                                <option value="">Select</option>
                                                                                <?php 
                                                                                    if(!empty($complexion)) :
                                                                                    foreach ($complexion as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['complexion_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="physical_status[]" id="physical_status">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Physically Challenged</option>
                                                                            <option value="2">Normal</option>               
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                         <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Food</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <select class="form-control" name="food[]" id="food">
                                                                               <option value="">Select</option>
                                                                               <?php 
                                                                                    if(!empty($food)) :
                                                                                    foreach ($food as $cls_val) {
                                                                                    echo "<option value='" . $cls_val['food_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
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
                                                                            <h4>Your Personality</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                               <textarea class="form-control" rows="5" id="personality" name="personality" placeholder="Personality in Detail"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-3 aline-center-box box">
                                                            <div class="height_item">      
                                                                <h3>Search</h3>
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
                                                                            <select class="form-control" name="search_age_from[]" id="search_age_from">
                                                                                <option value="">Select</option>
                                                                                <option value="18">18</option>
                                                                                <option value="20">20</option>
                                                                            </select>
                                                                            <select class="form-control" name="search_age_to[]" id="search_age_to">
                                                                                <option value="">Select</option>
                                                                                <option value="21">21</option>
                                                                                <option value="24">24</option>
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
                                                                            <label class="checkbox-inline">
                                                                            <input type="checkbox" value="marital_status_any" name="marital_status_any" id="marital_status_any">Any</label>
                                                                            <label class="checkbox-inline">
                                                                            <input type="checkbox" value="marital_status_single" id="marital_status_single" name="marital_status_single">Single</label>
                                                                            <label class="checkbox-inline" >
                                                                            <input type="checkbox" value="marital_status_widowed" id="marital_status_windowed" name="marital_status_windowed">Widowed</label>
                                                                            <label class="checkbox-inline">
                                                                            <input type="checkbox" value="marital_status_annualled" id="marital_status_annualled" name="marital_status_annualled">Annualled</label>
                                                                            <label class="checkbox-inline">
                                                                            <input type="checkbox"  name="marital_status_divorced" id="marital_status_divorced" value="marital_status_divorced">Divorced</label>
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
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" id="reg_Education" name="reg_Education" placeholder="Education">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Diet</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">                           
                                                                            <label class="radio-inline">
                                                                            <input type="radio" name="optradio">
                                                                            Vegetarian
                                                                            </label>
                                                                            <label class="radio-inline">
                                                                            <input type="radio" name="optradio">
                                                                            Non-Vegerarian</label>
                                                                            <label class="radio-inline">
                                                                            <input type="radio" name="optradio">
                                                                            Eggetarian</label> 
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Expectation about Life Partner</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-sm-6 box">
                                                                        <div class="height_item">
                                                                            <div class="form-group">
                                                                               <textarea class="form-control" rows="5" id="expectation" placeholder="Expectation" name="expectation" id="expectation"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>        
                                                        </div>
                                                        
                                                        
                                                       <!--  <div class="search_btn">
                                                            <button type="submit" class="register_angkar_btn pull-right" name="">
                                                                Finish
                                                            </button>                                                    
                                                        </div>       -->                                         
                                                    
                                                </div>
                                            </div>
                                         </div>
                                     </div>                         
                                   </div>
                                 <!-- Tab6 -->  
                                    <div role="tabpanel" class="tab-pane fade in" id="horoscope-field" style="display:none;">
                                       <div class="registration_form_are">
                                         <div class="row">
                                            <div class="col-sm-12 aline-center-box">
                                                <div class="registration_form_s form-box aline-center-box">

                                                        <div class="col-sm-3 aline-center-box box">
                                                            <div class="height_item">      
                                                                <h3>Image & Horoscope</h3>
                                                            </div>    
                                                        </div>                                      
                                                        <div class="col-sm-10  aline-center-box">
                                                               <div class="row">
                                                                    <div class="col-sm-4 base-box">
                                                                        <div class="height_item">
                                                                            <h4>Image Uploads</h4>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-md-6 upload_box">
                                                                        <span></span>
                                                                        <p id="msg"></p>
                                                                        <input type="file" id="uploadedfile" name="uploadedfile" class="form_inputs" />
                                                                        <input type="button" id="upload" value="upload" name ="upload">
                                                                    </div>
                                                                </div>        
                                                        </div>

                                                    </div>                  
                                                </div>
                                            </div>
                                        </div>

                                     </div>                         
                                   </div><!-- Tab6 End--> 

                                </div> 
                                <div class="search_btn">
                                    <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
                                    <input class="btnAction" type="button" name="next" id="next" value="Next" >
                                    <input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
                                </div>                        
                        </div>
                         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                    </form> 
            </div>   
        </section>  
<?php 
    include('include/footer.php');
?>