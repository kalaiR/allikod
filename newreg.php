<?php 
    include('include/header.php');
?>      <?php 
            include('include/menu.php');
        ?> 
           <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Registration"><img class="left_img" src="img/banner/t-left-img.png" alt="">Registration<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <!--<a href="index.html">Home</a>
                    <a href="shop-cart.html">Pricing</a>-->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <section class="advanced_search_area">
            <div class="container">
                <div class="welcome_white_title">
                    <h3>Register Here</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="search_option">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="registration.php#base" aria-controls="base" role="tab" data-toggle="tab" id="white">User Details</a></li>
                         <li role="presentation" class="#"><a href="registration.php#advanced-search" aria-controls="advanced-search" role="tab" data-toggle="tab">Ethnicity</a></li>
                        <li role="presentation" class="#"><a href="registration.php#vallikodi" aria-controls="vallikodi" role="tab" data-toggle="tab">Education</a></li>
                        <li role="presentation" class="#"><a href="registration.php#manual-id" aria-controls="manual-id" role="tab" data-toggle="tab">Family</a></li>
                         <li role="presentation" class="#"><a href="registration.php#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab">Expectation</a></li>
                         <li role="presentation" class="#"><a href="registration.php#horoscope" aria-controls="horoscope" role="tab" data-toggle="tab">Image &amp;Horoscope</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="base">
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
                                                <input type="text" class="form-control tabfield" id="register_email" placeholder="Email" name="register_email" />
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
                                                <input type="password" class="form-control tabfield" id="reg_passed" placeholder="Password" name="reg_pass">
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
                                               <input type="password" class="form-control" id="reg_con_pass" name="reg_con_pass" placeholder="Confirm Password">
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
                                                    <option>Select</option>
                                                    <option>Self</option>
                                                    <option>Parent</option>
                                                    <option>Friend</option>
                                                    <option>Brother</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <span id="reg_by_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                        <div class="row base-box">
                                            <div class="col-sm-4">
                                                <div class="height_item">
                                                   <h4>Name</h4>
                                                </div>    
                                            </div>
                                            <div class="col-sm-4">
                                               <input type="text" class="form-control" id="reg_Nam" placeholder="Name" >
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
                                                    <option value="">Select</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
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
                                                <input type='text' class="form-control datetimepicker4" placeholder="Birthday" /> 
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
                                                <select class="form-control customize_plan" name="gender[]" id="gender">
                                                    <option>Single</option>
                                                    <option>Widowed</option>
                                                    <option>Divorced</option>
                                                    <option>Annualled</option>
                                                </select>
                                            </div>    
                                                <div class="col-sm-4 box">
                                                    <span id="gender_error" class="registration-error"></span>
                                                </div>     
                                        </div>   
                                    </div>
                                    <div class="search_btn">
                                        
                                    </div>    	
        			         </div>
                        </div>
                    </div>       
                        <div role="tabpanel" class="tab-pane fade in" id="advanced-search">
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
                                                 <input type="time" class="form-control" id="reg_tim" placeholder="Time of Birth">
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
                                                    <option>Select</option>
                                                    <option>Tamil</option>
                                                    <option>Other</option>
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
                                               <input type="text" class="form-control" id="reg_caste" name="reg_religion"placeholder="Caste">
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
                                                    <option>Select</option>
                                                    <option>Nakshathra_1</option>
                                                    <option>Nakshathra_2</option>
                                                    <option>Nakshathra_3</option>
                                                    <option>Nakshathra_4</option>
                                                </select>
                                            </div>
                                            <!-- <div class="col-sm-4 box">
                                               <span id="mother_error" class="registration-error"></span>
                                            </div>  -->    
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
                                                    <option>Select</option>
                                                    <option>Luknam_1</option>
                                                    <option>Luknam_2</option>
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
                                                    <option>Cancer</option>
                                                     <option>Libro</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 box">
                                             <span id="luknam_error" class="registration-error"></span>
                                            </div>     
                                        </div>
                                    </div>
                                    <div class="search_btn">
                                        
                                    </div> 
                                </div>    
                            </div>       	            	
            	       </div>
                           <div role="tabpanel" class="tab-pane fade in" id="vallikodi">
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
                                                         <select class="form-control" name="education[]" id="education">
                                                                <option>BE/B Tech</option>
                                                                <option>BCA</option>
                                                         </select>
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                       <span id="tim_error" class="registration-error"></span>
                                                    </div>  -->    
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
                                                    <!-- <div class="col-sm-4 box">
                                                       <span id="tim_error" class="registration-error"></span>
                                                    </div>  -->    
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>Occupation *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                         <select class="form-control" name="occupation[]"  id="occupation">
                                                            <option>Executive</option>
                                                            <option>Manager</option>
                                                            <option>Supervisor</option>
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
                                                            <option>Government</option>
                                                            <option>Private</option>
                                                            <option>Self</option>
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
                                                    <!-- <div class="col-sm-4 box">
                                                      <span id="employed_in_error" class="registration-error"></span>
                                                    </div>    -->  
                                                </div>
                                                <div class="search_btn">
                                        
                                                </div>
                                            </div>                          
                                    </div>
                                </div>
                            </div>                         
                           <div role="tabpanel" class="tab-pane fade in" id="manual-id">
                                <div class="row">
                                    <div class="col-sm-12 aline-center-box">
                                            <div class="col-sm-3 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3 id="white">Communication</h3>
                                                </div>    
                                            </div>
                                            <div class="col-sm-8 aline-center-box base-box">
                                               <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Resident Of</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" name="resident[]" id="resident">
                                                                <option>India</option>
                                                                <option>Other</option>
                                                         </select>
                                                    </div>
                                                    <div class="col-sm-4 box">
                                                       <span id="resident_error" class="registration-error"></span>
                                                    </div>     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>Current Country</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" name="cur_country[]" id="cur_country">
                                                                <option>India</option>
                                                                <option>Other</option>
                                                         </select>
                                                    </div>
                                                    <div class="col-sm-4 box">
                                                      <span id="cur_country_error" class="registration-error"></span>
                                                    </div>     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>Current City</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                       <input type="text" class="form-control" id="reg_city" placeholder="City" name="reg_city">
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                      <span id="cur_country_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>District</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="reg_district" placeholder="District" id="reg_district">
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                      <span id="cur_country_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Communication Address</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <textarea class="form-control" rows="5" id="comm_address" placeholder="Address" name="comm_address"></textarea>
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                      <span id="cur_country_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Phone Number</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="reg_phone" placeholder="Phone" name="reg_phone">
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                      <span id="cur_country_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                             <h4>Mobile Number *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
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
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                             <h4>Father's Name *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="reg_fname" placeholder="FName" name="reg_fname">
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                      <span id="cur_country_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Mother's Name *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                         <input type="text" class="form-control" id="reg_mname" placeholder="MName" name="reg_mname">
                                                    </div>
                                                   <!--  <div class="col-sm-4 box">
                                                     <span id="reg_mobile_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Father's Employment *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="reg_femployment" placeholder="FEmployment" name="reg_femployment">
                                                    </div>
                                                   <!--  <div class="col-sm-4 box">
                                                     <span id="reg_mobile_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Mother's Employment *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="reg_memployment" placeholder="MEmployment" name="reg_memployment">
                                                    </div>
                                                   <!--  <div class="col-sm-4 box">
                                                     <span id="reg_mobile_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>Family Status *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" id="family_status" name="family_status[]">
                                                            <option>Middle</option>
                                                            <option>Upper Middle</option>
                                                            <option>Rich</option>
                                                        </select>
                                                    </div>
                                                   <!--  <div class="col-sm-4 box">
                                                     <span id="reg_mobile_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>Family Type *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" id="family_type" name="family_type[]">
                                                            <option value="">Select</option>
                                                            <option>Middle</option>
                                                            <option>Upper Middle</option>
                                                            <option>Rich</option>
                                                        </select>
                                                    </div>
                                                   <!--  <div class="col-sm-4 box">
                                                     <span id="reg_mobile_error" class="registration-error"></span>
                                                    </div> -->     
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
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>No. of Brothers</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-2">
                                                         <input type="text" class="form-control" id="reg_EBrother" placeholder="0" name="reg_EBrother">
                                                    </div>
                                                    <div class="col-sm-2">
                                                          <input type="text" class="form-control" id="reg_YBrother" placeholder="0" name="reg_YBrother">
                                                    </div>
                                                   <!--  <div class="col-sm-4 box">
                                                     <span id="reg_mobile_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>No. of Sisters</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-2">
                                                         <input type="text" class="form-control" id="reg_ESister" placeholder="0" name="reg_ESister">
                                                    </div>
                                                    <div class="col-sm-2">
                                                          <input type="text" class="form-control" id="reg_YSister" placeholder="0" name="reg_YSister">
                                                    </div>
                                                   <!--  <div class="col-sm-4 box">
                                                     <span id="reg_mobile_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>No. of Married Brothers</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-2">
                                                          <input type="text" class="form-control" id="reg_MEBrother" placeholder="0" name="reg_MEBrother">
                                                    </div>
                                                    <div class="col-sm-2">
                                                          <input type="text" class="form-control" id="reg_MYBrother" placeholder="0" name="reg_MYBrother">
                                                    </div>
                                                   <!--  <div class="col-sm-4 box">
                                                     <span id="reg_mobile_error" class="registration-error"></span>
                                                    </div> -->     
                                                </div>
                                                <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>No. of Married Sisters</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" id="reg_MESister" placeholder="0" name="reg_MESister">
                                                    </div>
                                                    <div class="col-sm-2">
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
                                                 <div class="search_btn">
                                        
                                                </div>
                                            </div>
                                    </div>                         
                                </div>
                            </div>    
                            
                            <div role="tabpanel" class="tab-pane fade in" id="dh-id">
                                 <div class="row">
                                    <div class="col-sm-12 aline-center-box">
                                            <div class="col-sm-3 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3 id="white">Physical</h3>
                                                </div>    
                                            </div>
                                            <div class="col-sm-8 aline-center-box base-box">
                                            <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Height in CMs</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
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
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>Weight in KGs</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
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
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Body Type</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                       <select class="form-control" name="body_type[]" id="body_type">
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
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                             <h4>Complexion</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                       <select class="form-control" name="complexion[]" id="complexion" >
                                                                <option value="">Select</option>
                                                                <option value="45">45</option>
                                                                <option value="50">50</option>
                                                         </select>
                                                    </div>
                                                    <div class="col-sm-4 box">
                                                       <span id="complexion_error" class="registration-error"></span>
                                                    </div>     
                                            </div>
                                            <div class="row base-box">
                                                    <div class="col-sm-4 base-box">
                                                        <div class="height_item">
                                                            <h4 id="white">Physical Status</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                       <select class="form-control" name="physical_status[]" id="physical_status">
                                                                <option value="">Select</option>
                                                                <option value="1">Physically Challenged</option>
                                                                <option value="2">Normal</option>
                                                         </select>
                                                    </div>
                                                    <div class="col-sm-4 box">
                                                       <span id="physical_status_error" class="registration-error"></span>
                                                    </div>     
                                            </div>
                                            <div class="row base-box">
                                                    <div class="col-sm-4 base-box">
                                                        <div class="height_item">
                                                           <h4>Food *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                       <select class="form-control" name="food[]" id="food">
                                                                <option value="">Select</option>
                                                                <option value="1">food</option>
                                                                <option value="2">food</option>
                                                         </select>
                                                    </div>
                                                    <div class="col-sm-4 box">
                                                    <span id="food_error" class="registration-error"></span>
                                                    </div>     
                                            </div>
                                            <div class="row base-box">
                                                    <div class="col-sm-4 base-box">
                                                        <div class="height_item">
                                                         <h4>Your Personality</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                       <textarea class="form-control" rows="5" id="personality" name="personality" placeholder="Personality in Detail"></textarea>
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                    <span id="food_error" class="registration-error"></span>
                                                    </div> -->     
                                            </div>
                                            <div class="row base-box">
                                                    <div class="col-sm-4 base-box aline-center-box">
                                                        <div class="height_item">      
                                                            <h3>Search</h3>
                                                        </div>    
                                                    </div>
                                            </div>
                                            <div class="row base-box">
                                                    <div class="col-sm-4 base-box">
                                                        <div class="height_item">
                                                         <h4>Age *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="search_age_from[]" id="search_age_from">
                                                            <option value="">Select</option>
                                                            <option value="18">18</option>
                                                            <option value="20">20</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="search_age_to[]" id="search_age_to">
                                                                <option value="">Select</option>
                                                                <option value="21">21</option>
                                                                <option value="24">24</option>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                    <span id="search_age_from_error" class="registration-error"></span>
                                                    </div> -->     
                                            </div>
                                             <div class="row base-box">
                                                    <div class="col-sm-4 base-box">
                                                        <div class="height_item">
                                                           <h4>Marital Status *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-8 box">
                                                       <label class="checkbox-inline" id="white">
                                                            <input type="checkbox" value="marital_status_any" name="marital_status_any" id="marital_status_any">Any</label>
                                                            <label class="checkbox-inline" id="white">
                                                            <input type="checkbox" value="marital_status_single" id="marital_status_single" name="marital_status_single white">Single</label>
                                                            <label class="checkbox-inline"  id="white">
                                                            <input type="checkbox" value="marital_status_widowed" id="marital_status_windowed" name="marital_status_windowed">Widowed</label>
                                                            <label class="checkbox-inline" id="white">
                                                            <input type="checkbox" value="marital_status_annualled" id="marital_status_annualled" name="marital_status_annualled white">Annualled</label>
                                                            <label class="checkbox-inline"id="white">
                                                            <input type="checkbox"  name="marital_status_divorced" id="marital_status_divorced" value="marital_status_divorced">Divorced</label>
                                                    </div>
                                                    <div class="col-sm-4 box">
                                                    <!-- <span id="food_error" class="registration-error"></span> -->
                                                    </div>     
                                            </div>
                                            <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                            <h4>Diet *</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="radio-inline" id="white">
                                                        <input type="radio" name="optradio">
                                                        Vegetarian
                                                        </label>
                                                        <label class="radio-inline" id="white">
                                                        <input type="radio" name="optradio">
                                                        Non-Vegerarian</label>
                                                        <label class="radio-inline" id="white">
                                                        <input type="radio" name="optradio">
                                                        Eggetarian</label> 
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                       <span id="resident_error" class="registration-error"></span>
                                                    </div>   -->   
                                            </div>
                                            <div class="row base-box">
                                                    <div class="col-sm-4">
                                                        <div class="height_item">
                                                           <h4>Expectation about Life Partner</h4>
                                                        </div>    
                                                    </div>
                                                    <div class="col-sm-4">
                                                           <textarea class="form-control" rows="5" id="expectation" placeholder="Expectation" name="expectation" id="expectation"></textarea>
                                                    </div>
                                                    <!-- <div class="col-sm-4 box">
                                                       <span id="resident_error" class="registration-error"></span>
                                                    </div>   -->   
                                            </div>
                                            <div class="search_btn">
                
                                            </div>
                                        </div>
                                    </div>  
                            </div>                         
                        </div>
                           <div role="tabpanel" class="tab-pane fade in" id="horoscope">
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
                                                                        <input type="button" class="btnAction next_angkar_btn" id="upload" value="upload" name ="upload">
                                                                    </div>
                                                                </div>        
                                            </div>
                                    </div>
                                </div>
                            </div>
            </div> 
       </div>            	    
					 
        </section>           
                    <!-- Tab panes -->
<?php 
include('include/footer.php');
?>  
    </body>
</html>