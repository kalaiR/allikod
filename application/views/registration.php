<?php 
include('include/header.php');
include('include/menu.php');
?> 

     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Register Here"><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">Register Here<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
      <section class="advanced_search_area">
            <div class="container">
                <div class="welcome_white_title">
                    <h3>Register Here</h3>
                    <img src="<?php echo media_url();?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="search_option">
                    <!-- Nav tabs -->
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
                        <li role="presentation" class="#" id="com">
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
                <form name="frmRegistration" id="registration-form" method="post" action="registration" enctype="multipart/form-data">    
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="userdetails-field">
                            <div class="row">
                                <div class="col-sm-12 aline-center-box">
                                    <div class="col-sm-3 aline-center-box box">
                                        <div class="height_item">
                                             <h3 id="white">User Details</h3>
                                        </div>    
                                    </div>
                                    <input type="hidden" value="edit" id="popup_mode" />
                                    <p class="val_error"> </p>
                                    <div class="col-sm-8 aline-center-box">
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                    <h4>Email</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control tabfield" id="register_email" placeholder="Email" name="register_email" value="<?php if(!empty($registered_data)) echo $registered_data['user_email']; ?>" />
                                            </div>
                                            <div class="col-sm-4 box">
                                                <span id="register_email-error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                    <h4>Password</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 ">
                                                <input type="password" class="form-control tabfield" id="reg_pass1" name="reg_pass1" placeholder="Password" name="reg_pass" value="<?php if(!empty($registered_data)) echo $registered_data['user_pwd']; ?>"/>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <span id="reg_passed_error" class="registration-error"></span>
                                            </div>        
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                    <h4>Confirm Password</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                               <input type="password" class="form-control" id="reg_con_pass2" name="reg_con_pass2" placeholder="Confirm Password">
                                            </div>
                                            <div class="col-sm-4 box">
                                                <span id="reg_con_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                   <h4>Register By</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                               <select class="form-control customize_plan " name="register_by[]" id="register_by">
                                                   <option value="">Select</option>
                                                    <?php
                                                    if(!empty($register)) :
                                                    foreach ($register as $cls_val) {
                                                        if($registered_data['user_registeredby']==$cls_val['registeredby_id']){
                                                             echo "<option value='" . $cls_val['registeredby_id'] . "' selected>" . ucfirst($cls_val['name']) . "</option>";
                                                        }else{    
                                                        echo "<option value='" . $cls_val['registeredby_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                        }
                                                       } 
                                                    endif;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <span id="reg_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                   <h4>Name</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                               <input type="text" class="form-control" id="reg_Nam" placeholder="Name" name="reg_name" value="<?php if(!empty($registered_data)) echo $registered_data['user_fname']; ?>"/>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <span id="reg_nam_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                <h4>Gender</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control customize_plan" name="gender[]" id="gender">
                                                    
                                                    <?php if(!empty($registered_data) && $registered_data['user_gender']!=1){
                                                                                echo "<option value='" . $registered_data['user_gender'] . "' selected>Female</option>";
                                                                               }elseif(!empty($registered_data) && $registered_data['user_gender']!=2){
                                                                                echo "<option value='" . $registered_data['user_gender'] . "'>Male</option>";
                                                                               }else{
                                                                                echo "<option value=''>Select</option>"; 
                                                                                echo "<option value='1'>Male</option>";    
                                                                                echo "<option value='1'>Female</option>";
                                                                               }
                                                                            ?>          
                                                </select>
                                            </div>    
                                                <div class="col-sm-4 box">
                                                    <span id="gender_error" class="registration-error"></span>
                                                </div>     
                                        </div>
                                        <div class="row base-box" style="color: black;">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                  <h4 id="white">Birthday</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                                <input type='text' class="form-control datetimepicker4" name="dob" id="dob" placeholder="Birthday" /> 
                                            </div>    
                                                <div class="col-sm-4 box">
                                                    <span id="gender_error" class="registration-error"></span>
                                                </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                  <h4>Marital Status</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control customize_plan" name="marital_status[]"id="marital">
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
                                                <div class="col-sm-4 box">
                                                   <span id="marital_error" class="registration-error"></span>
                                                </div>     
                                        </div>   
                                    </div>
                                    <div class="search_btn">
                                        
                                    </div>      
                             </div>
                            </div>
                        </div>       
                        <div role="tabpanel" class="tab-pane fade in" id="ethnicity-field">
                            <div class="row">
                                <div class="col-sm-12 aline-center-box">
                                    <div class="col-sm-3 aline-center-box box">
                                        <div class="height_item">      
                                            <h3 id="white">Ethnicity</h3>
                                        </div>    
                                    </div>
                                    <div class="col-sm-8 aline-center-box base-box">
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                   <h4>Time *</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                                 <input type="time" name="reg_tim" class="form-control" id="reg_tim" placeholder="Time of Birth">
                                            </div>
                                            <div class="col-sm-4 box">
                                               <span id="tim_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                    <h4>Mother Tongue *</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control customize_plan" name="mother_tongue[]" id="mother">
                                                    <option value="">Select</option>
                                                       <?php 
                                                            if(!empty($mother_tongue)) :
                                                            foreach ($mother_tongue as $cls_val) {
                                                        if($registered_data['rel_mothertongue_id']==$cls_val['registeredby_id']){
                                                        echo "<option value='" . $cls_val['mothertongue_id'] . "' selected>" . ucfirst($cls_val['name']) . "</option>";
                                                        }else{
                                                        echo "<option value='" . $cls_val['mothertongue_id'] . "'>" . ucfirst($cls_val['name']) . "</option>";
                                                            }
                                                        }
                                                        endif;
                                                        ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 box">
                                               <span id="mother_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                   <h4>Religion</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="reg_religion" name="reg_religion"placeholder="Religion">
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="mother_error" class="registration-error"></span>
                                            </div>  -->    
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                  <h4>Caste</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                               <input type="text" class="form-control" id="reg_caste" name="reg_caste"placeholder="Caste">
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="mother_error" class="registration-error"></span>
                                            </div>  -->    
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                  <h4>Dhosham</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                               <input type="text" class="form-control" id="reg_Dhosham" name="reg_Dhosham"placeholder="Dhosham">
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="mother_error" class="registration-error"></span>
                                            </div>  -->    
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                   <h4>Nakshathra *</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4 box">
                                               <span id="nakshathra_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                   <h4>Luknam</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4 box">
                                             <span id="luknam_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                    <h4>Gothra</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                               <input type="text" class="form-control" id="reg_gothra" name="reg_gothra" placeholder="Gothra">
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                             <span id="luknam_error" class="registration-error"></span>
                                            </div>     --> 
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                  <h4>Zodiac Sign *</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4 box">
                                             <span id="zodiac_sign_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                    </div>
                                </div>    
                            </div>                          
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="education-field">
                             <div class="row">
                                <div class="col-sm-12 aline-center-box">
                                        <div class="col-sm-3 aline-center-box box">
                                            <div class="height_item">      
                                                <h3 id="white">Education</h3>
                                            </div>    
                                        </div>
                                        <div class="col-sm-8 aline-center-box base-box">
                                            <div class="row base-box">
                                                <div class="col-sm-4">
                                                    <div class="height_item">
                                                       <h4>Education *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4">
                                                     <select class="form-control" name="education[]" id="edu">
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
                                                <div class="col-sm-4 box">
                                                   <span id="edu_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4">
                                                    <div class="height_item">
                                                        <h4>Education in Detail *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4">
                                                     <textarea class="form-control" rows="5" id="education_detail" placeholder="Education in detail" name="education_detail"></textarea>
                                                </div>
                                                <div class="col-sm-4 box">
                                                   <span id="education_detail_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4">
                                                    <div class="height_item">
                                                       <h4>Occupation *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4">
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
                                                <div class="col-sm-4 box">
                                                    <span id="occupation_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4">
                                                    <div class="height_item">
                                                         <h4>Employed In *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4">
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
                                                <div class="col-sm-4 box">
                                                  <span id="employed_in_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4">
                                                    <div class="height_item">
                                                         <h4>Monthly Income *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4">
                                                   <input type="text" class="form-control" id="reg_income" placeholder="Income" name="reg_income">
                                                </div>
                                                <div class="col-sm-4 box">
                                                  <span id="reg_income_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4">
                                                    <div class="height_item">
                                                        <h4>Occupation in Detail *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4">
                                                     <textarea class="form-control" rows="5" id="occupationdetail" placeholder="Education in detail" name="occupationdetail"></textarea>
                                                </div>
                                                <div class="col-sm-4 box">
                                                   <span id="occupationdetail_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                        </div>                          
                                </div>
                            </div>
                        </div>                         
                        <div role="tabpanel" class="tab-pane fade in" id="com-field">
                            <div class="row">
                                <div class="col-sm-12 aline-center-box">
                                        <div class="col-sm-3 aline-center-box box">
                                            <div class="height_item">      
                                                <h3 id="white">Communication</h3>
                                            </div>    
                                        </div>
                                        <div class="col-sm-8 aline-center-box base-box">
                                           <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                        <h4>Resident Of</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
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
                                                <div class="col-sm-4 box">
                                                   <span id="resident_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                       <h4>Current Country</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
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
                                                <div class="col-sm-4 box">
                                                  <span id="cur_country_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                       <h4>Current City</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                   <input type="text" class="form-control" id="reg_city" placeholder="City" name="reg_city">
                                                </div>
                                                <!-- <div class="col-sm-4 box">
                                                  <span id="cur_country_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                        <h4>District</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                    <input type="text" class="form-control" id="reg_district" placeholder="District" name="reg_district">
                                                </div>
                                                <!-- <div class="col-sm-4 box">
                                                  <span id="cur_country_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                        <h4>Communication Address</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                    <textarea class="form-control" rows="5" id="comm_address" placeholder="Address" name="comm_address"></textarea>
                                                </div>
                                                <!-- <div class="col-sm-4 box">
                                                  <span id="cur_country_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                        <h4>Phone Number</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                    <input type="text" class="form-control" id="reg_phone" placeholder="Phone" name="reg_phone">
                                                </div>
                                                <!-- <div class="col-sm-4 box">
                                                  <span id="cur_country_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                         <h4>Mobile Number *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                     <input type="text" class="form-control" id="reg_mobile" placeholder="Mobile" name="reg_mobile">
                                                </div>
                                                <div class="col-sm-4 box">
                                                 <span id="reg_mobile_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-3 aline-center-box box">
                                                    <div class="height_item">      
                                                        <h3 id="white">Family</h3>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                         <h4>Father's Name *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                    <input type="text" class="form-control" id="reg_fname" placeholder="FName" name="reg_fname">
                                                </div>
                                                <div class="col-sm-4 box">
                                                  <span id="reg_fname_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                        <h4>Mother's Name *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                     <input type="text" class="form-control" id="reg_mname" placeholder="MName" name="reg_mname">
                                                </div>
                                                <div class="col-sm-4 box">
                                                 <span id="reg_mname_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                        <h4>Father's Employment *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                    <input type="text" class="form-control" id="reg_femployment" placeholder="FEmployment" name="reg_femployment">
                                                </div>
                                                <div class="col-sm-4 box">
                                                 <span id="reg_femployment_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                        <h4>Mother's Employment *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
                                                    <input type="text" class="form-control" id="reg_memployment" placeholder="MEmployment" name="reg_memployment">
                                                </div>
                                                <div class="col-sm-4 box">
                                                 <span id="reg_memployment_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                       <h4>Family Status *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
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
                                                <div class="col-sm-4 box">
                                                 <span id="family_status_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                       <h4>Family Type *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4 box">
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
                                                <div class="col-sm-4 box">
                                                 <span id="family_type_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4">    
                                                </div>
                                                <div class="col-sm-2"> 
                                                    <label id="white">Elder</label>
                                                    </div> 
                                                    <div class="col-sm-2"> 
                                                    <label id="white">Younger</label>
                                                </div> 
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                       <h4>No. of Brothers</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-2 box">
                                                     <input type="text" class="form-control" id="reg_EBrother" placeholder="0" name="reg_EBrother">
                                                </div>
                                                <div class="col-sm-2 box">
                                                      <input type="text" class="form-control" id="reg_YBrother" placeholder="0" name="reg_YBrother">
                                                </div>
                                               <!--  <div class="col-sm-4 box">
                                                 <span id="reg_mobile_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                       <h4>No. of Sisters</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-2 box">
                                                     <input type="text" class="form-control" id="reg_ESister" placeholder="0" name="reg_ESister">
                                                </div>
                                                <div class="col-sm-2 box">
                                                      <input type="text" class="form-control" id="reg_YSister" placeholder="0" name="reg_YSister">
                                                </div>
                                               <!--  <div class="col-sm-4 box">
                                                 <span id="reg_mobile_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                       <h4>No. of Married Brothers</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-2 box">
                                                      <input type="text" class="form-control" id="reg_MEBrother" placeholder="0" name="reg_MEBrother">
                                                </div>
                                                <div class="col-sm-2 box">
                                                      <input type="text" class="form-control" id="reg_MYBrother" placeholder="0" name="reg_MYBrother">
                                                </div>
                                               <!--  <div class="col-sm-4 box">
                                                 <span id="reg_mobile_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4 box">
                                                    <div class="height_item">
                                                       <h4>No. of Married Sisters</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-2 box">
                                                    <input type="text" class="form-control" id="reg_MESister" placeholder="0" name="reg_MESister">
                                                </div>
                                                <div class="col-sm-2 box">
                                                    <input type="text" class="form-control" id="reg_MYSister" placeholder="0" name="reg_MYSister">
                                                </div>
                                               <!--  <div class="col-sm-4 box">
                                                 <span id="reg_mobile_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                <div class="col-sm-4">
                                                    <div class="height_item">
                                                       <h4>More About Familly</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4">
                                                    <textarea class="form-control" rows="5" id="more_abt_family" placeholder="More about Family" name="more_abt_family"></textarea>
                                                </div>
                                               <!--  <div class="col-sm-4 box">
                                                 <span id="reg_mobile_error" class="registration-error"></span>
                                                </div> -->     
                                            </div>
                                        </div>
                                </div>                         
                            </div>
                        </div>    
                        <div role="tabpanel" class="tab-pane fade in" id="exceptation-field">
                         <div class="row">
                            <div class="col-sm-12 aline-center-box">
                                    <div class="col-sm-3 aline-center-box box">
                                        <div class="height_item">      
                                            <h3 id="white">Physical</h3>
                                        </div>    
                                    </div>
                                    <div class="col-sm-8 aline-center-box base-box">
                                    <div class="row base-box">
                                            <div class="col-sm-4 box">
                                                <div class="height_item">
                                                    <h4>Height in CMs</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 box">
                                                <select class="form-control" name="height_in_cms[]" id="height_in_cms">
                                                       <option value="">Select</option>
                                                        <option value="160">160</option>
                                                        <option value="165">165</option>
                                                 </select>
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="resident_error" class="registration-error"></span>
                                            </div>   -->   
                                    </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 box">
                                                <div class="height_item">
                                                   <h4>Weight in KGs</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 box">
                                                <select class="form-control" name="height_in_cms[]" id="height_in_cms">
                                                        <option value="">Select</option>
                                                        <option value="45">45</option>
                                                        <option value="50">50</option>
                                                 </select>
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="resident_error" class="registration-error"></span>
                                            </div>   -->   
                                    </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 box">
                                                <div class="height_item">
                                                    <h4>Body Type</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 box">
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
                                            <!-- <div class="col-sm-4 box">
                                               <span id="resident_error" class="registration-error"></span>
                                            </div>   -->   
                                    </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 box">
                                                <div class="height_item">
                                                     <h4>Complexion</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 box">
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
                                            <div class="col-sm-4 box">
                                               <span id="complexion_error" class="registration-error"></span>
                                            </div>     
                                    </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 base-box box">
                                                <div class="height_item">
                                                    <h4 id="white">Physical Status</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 box">
                                               <select class="form-control" name="physical_status[]" id="physical_status">
                                                        <option value="">Select</option>
                                                        <option value="1">Physically Challenged</option>
                                                        <option value="2">Normal</option>
                                                 </select>
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="physical_status_error" class="registration-error"></span>
                                            </div> -->     
                                    </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 base-box box">
                                                <div class="height_item">
                                                   <h4>Food *</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 box">
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
                                            <div class="col-sm-4 box">
                                            <span id="food_error" class="registration-error"></span>
                                            </div>     
                                    </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 base-box box">
                                                <div class="height_item">
                                                 <h4>Your Personality</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 box">
                                               <textarea class="form-control" rows="5" id="personality" name="personality" placeholder="Personality in Detail"></textarea>
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                            <span id="food_error" class="registration-error"></span>
                                            </div> -->     
                                    </div>
                                    <div class="row base-box ">
                                            <div class="col-sm-4 base-box aline-center-box">
                                                <div class="height_item">      
                                                    <h3>Search</h3>
                                                </div>    
                                            </div>
                                    </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 base-box box">
                                                <div class="height_item">
                                                 <h4>Age *</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-3 box">
                                                <select class="form-control" name="search_age_from[]" id="search_age_from">
                                                    <option value="">Select</option>
                                                    <option value="18">18</option>
                                                    <option value="20">20</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 box">
                                                <select class="form-control" name="search_age_to[]" id="search_age_to">
                                                        <option value="">Select</option>
                                                        <option value="21">21</option>
                                                        <option value="24">24</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2 box">
                                                <span id="search_age_from_error" class="registration-error"></span>
                                            </div>     
                                    </div>
                                     <div class="row base-box">
                                            <div class="col-sm-4 base-box box">
                                                <div class="height_item">
                                                   <h4>Marital Status *</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-8 box">
                                               <label class="checkbox-inline" id="white">
                                            <input type="checkbox" value="marital_status_any" name="marital_status_any" id="marital_status_any" value="4">Any</label>
                                                    <label class="checkbox-inline" id="white">
                                            <input type="checkbox" value="1" id="marital_status_single" name="marital_status_single white">Single</label>
                                                    <label class="checkbox-inline"  id="white">
                                            <input type="checkbox" value="2" id="marital_status_windowed" name="marital_status_windowed">Widowed</label>
                                                    <label class="checkbox-inline" id="white">
                                            <input type="checkbox" value="3" id="marital_status_annualled" name="marital_status_annualled white">Annualled</label>
                                                    <label class="checkbox-inline"id="white">
                                            <input type="checkbox"  name="marital_status_divorced" id="marital_status_divorced" value="4">Divorced</label>

                                            </div>
                                            <div class="col-sm-4 box">
                                               <!--  <span id="food_error" class="registration-error"></span> -->
                                            </div>     
                                    </div>
                                    <div class="row base-box">
                                                <div class="col-sm-4">
                                                    <div class="height_item">
                                                       <h4>Education *</h4>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-4">
                                                     <select class="form-control" name="reg_Education[]" id="reg_Education">
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
                                                <div class="col-sm-4 box">
                                                   <span id="edu_error" class="registration-error"></span>
                                                </div>     
                                            </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 box">
                                                <div class="height_item">
                                                    <h4>Diet *</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="radio-inline" id="white">
                                                <input type="radio" name="diet_veg" id="diet_veg" value="1">
                                                    Vegetarian
                                                </label>
                                                <label class="radio-inline" id="white">
                                                <input type="radio" name="diet_nonveg" id="diet_nonveg" value="2">
                                                    Non-Vegerarian
                                                </label>
                                                <label class="radio-inline" id="white">         
                                                <input type="radio" name="diet_egg" id="diet_egg" value="3">
                                                Eggetarian</label> 
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="resident_error" class="registration-error"></span>
                                            </div>   -->   
                                    </div>
                                    <div class="row base-box">
                                            <div class="col-sm-4 box">
                                                <div class="height_item">
                                                   <h4>Expectation about Life Partner</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4 box">
                                                   <textarea class="form-control" rows="5" id="expectation" placeholder="Expectation" name="expectation" id="expectation"></textarea>
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="resident_error" class="registration-error"></span>
                                            </div>   -->   
                                    </div>
                                </div>
                            </div>  
                            </div>                         
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="horoscope-field">
                        <div class="row">
                            <div class="col-sm-12 aline-center-box">
                                     <div class="col-sm-3 aline-center-box box">
                                        <div class="height_item">      
                                            <h3 id="white">Image</h3>.
                                        </div>    
                                     </div>
                                    <div class="col-sm-10  aline-center-box">
                                       <div class="row">
                                            <div class="col-sm-6 base-box hr-box">
                                                <div class="height_item">
                                                    <h4>Image Uploads</h4>
                                                </div>    
                                            </div>
                                            <div class="col-md-6 upload_box hr-box">
                                                <span></span>
                                                <p id="msg"></p>
                                                <input type="file" id="uploadedfile" name="uploadedfile" class="form_inputs" /><br>
                                                <!-- <input type="button" class="btnAction next_angkar_btn" id="upload" value="upload" name ="upload"> -->
                                                 <span id="upload_error" class="registration-error"></span>
                                            </div>
                                        </div>        
                                    </div>
                            </div>
                        </div>
                        <!-- Horo Scope Start -->
                        <div class="row">
                            <div class="col-sm-12 aline-center-box">
                                     <div class="col-sm-3 aline-center-box box">
                                        <div class="height_item">      
                                            <h3 id="white">Horoscope</h3>.
                                        </div>    
                                     </div>
                                    <div class="col-sm-10  aline-center-box">

                                     <!-- Horo Scope Start -->
                                     <d>
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
                                    <div id="cont">
                                        <select id="rasi_name" style="width:300px; display: block;" name="rasi_name">    
                                            <option value="r_1">&#2994;&#2965;&#3021;</option> 
                                            <option value="r_2">&#2992;&#3006;&#2965;&#3009;</option>
                                            <option value="r_3">&#2970;&#2984;&#3021;</option>   
                                            <option value="r_4">&#2965;&#3015;&#2980;&#3009;</option>
                                            <option value="r_5">&#2970;&#2985;&#3007;</option>
                                            <option value="r_6">&#2970;&#3014;&#2997;&#3021; </option>
                                            <option value="r_7"> &#2965;&#3009;&#2992;&#3009;</option>
                                            <option value="r_8"> &#2970;&#3009;&#2965;&#3021;</option>
                                            <option value="r_9">&#2970;&#3010;&#2992;&#3007;</option>
                                            <option value="r_10"> &#2986;&#3009;&#2980;&#2985;&#3021;</option> 
                                        </select>

                                        <select id="box_id" style="width:300px; display: block;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option> 
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option> 
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>

                                            <input type="button" id="add_rasi" value="ADD" name="add_rasi" />
                                            <select id="crasi_name" style="width:300px; display: block;" name="crasi_name">
                                            </select>    
                                            <input type="button" id="remove_rasi" value="Remove" name="add_rasi" />
                                    </div>

                                    <!-- ASHAM -->
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


                                      <!-- Horo Scope End -->
                                              
                                    </div>
                            </div>

                        </div>
                        <!-- Horo Scope End -->
                        </div>
                        <div class="col-sm-4 pull-right next-box"> 
                            <div class="search_btn">
                                <input class=" btnAction next_angkar_btn pull-right" type="button" name="back" id="back" value="Back" style="display:none;">
                                <input class=" btnAction next_angkar_btn pull-right" type="button" name="next" id="next" value="Next" >
                                <input class="btnAction next_angkar_btn pull-right" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
                            </div>
                        </div>
                         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                         <input type="hidden" name="result_horoscope" value="" id="result_horoscope" />
                    </div>    
                </form>     
       </div>                   
                     
        </section>  
<?php 
include('include/footer.php');
if(!empty($registered_data)){
    $msg = 'Dear Customer Thanks for registering with us in vallikodivanniarmatrimonial.in';
    $sms_mobileno = $registered_data['comm_mobile_no'];
}?>
<!-- SMS Script for Vallikodi for Home Register process - Start -->
<script type="text/javascript">
function sendMsg(msg,no){
    no = no;
    $.ajax(
        {
            type: 'GET',
            url:'http://dnd.blackholesolution.com/api/sendmsg.php?user=VALLIK&pass=abcd1234&sender=VALLIK&phone='+no+'&text='+msg+'&priority=ndnd&stype=normal',
            data:'',
            success: function(data){
            },
        });
}
// sendMsg('<?php //echo $msg ;?>','<?php //echo $sms_mobileno;?>');
</script>