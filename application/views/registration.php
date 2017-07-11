<?php 
    include('include/header.php');
?>     
       <?php 
            include('include/menu.php');
        ?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="<?php echo base_url(); ?>assets/img/banner/t-left-img.png" alt="">Search People Here<img class="right_img" src="<?php echo base_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
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
                    <img src="<?php echo base_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="search_option">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="search.html#home" aria-controls="home" role="tab" data-toggle="tab">User Details</a></li>
                         <li role="presentation" class="#"><a href="search.html#advanced-search" aria-controls="advanced-search" role="tab" data-toggle="tab">Ethnicity</a></li>
                        <li role="presentation" class="#"><a href="search.html#vallikodi" aria-controls="vallikodi" role="tab" data-toggle="tab">Education</a></li>
                        <li role="presentation" class="#"><a href="search.html#manual-id" aria-controls="manual-id" role="tab" data-toggle="tab">Family</a></li>
                         <li role="presentation" class="#"><a href="search.html#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab">Expectation</a></li>
                         <li role="presentation" class="#"><a href="search.html#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab">Image &amp;Horoscope</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="registration_form_are">
                        	 	 <div class="row">
                        	 	 	<div class="col-sm-12 aline-center-box">
                        	 	 		<div class="registration_form_s form-box aline-center-box">
                        	 	 			 <div class="col-sm-2 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3>User Details</h3>
                                                </div>    
                                             </div>
                        	 	 			 <form class="box">
                                              
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Email</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control" id="reg_email2" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>	
                        	 	 		        <!--<div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Age</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>18</option>
                                                                        <option>20</option>
                                                                    </select>
                                                                    <select class="selectpicker">
                                                                        <option>21</option>
                                                                        <option>24</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Height</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>180 Cm</option>
                                                                        <option>200 Cm</option>
                                                                    </select>
                                                                    <select class="selectpicker">
                                                                        <option>210 Cm</option>
                                                                        <option>240 Cm</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>-->
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Paasword</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" id="reg_pass2" placeholder="Password">
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
                                                                        <input type="password" class="form-control" id="reg_con_pass2" placeholder="Confirm Password">
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
                                                                    <select class="selectpicker">
                                                                        <option>Self</option>
                                                                        <option>Parent</option>
                                                                        <option>Friend</option>
                                                                        <option>Brother</option>
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
                                                                        <input type="text" class="form-control" id="reg_Name" placeholder="Name">
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
                                                                    <select class="selectpicker">
                                                                        <option>Male</option>
                                                                        <option>Female</option>                                                        
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
                                                                        <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
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
                                                                    <select class="selectpicker">
                                                                        <option>Single</option>
                                                                        <option>Widowed</option>
                                                                        <option>Divorced</option>
                                                                        <option>Annualled</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <!--<div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Education</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Bachelor of Design and Communication</option>
                                                                        <option>Bachelor of Music</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Show Profile</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Both</option>
                                                                        <option>With Photo</option>
                                                                        <option>Without Photo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>-->
                                                <div class="search_btn">
                                                    <a href="matches.html#" class="register_angkar_btn pull-right">Next</a>
                                                    <!--<a href="matches.html#" class="white_angkar_btn">Reset</a>-->
                                                </div>
                        	 	 			 </form>
                        	 	 		</div>
                        	 	 	</div>
                        	 	 </div>
                        	 </div>  
        			     </div>
                            <div role="tabpanel" class="tab-pane fade in" id="advanced-search">
                                <div class="registration_form_are">
                                 <div class="row">
                                    <div class="col-sm-12 aline-center-box">
                                        <div class="registration_form_s form-box aline-center-box">
                                             <div class="col-sm-3 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3>Ethnicity</h3>
                                                </div>    
                                             </div>
                                             <form class="box">
                                              
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
                                                                    <select class="selectpicker">
                                                                        <option>Tamil</option>
                                                                        <option>Malayalam</option>
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
                                                                        <input type="text" class="form-control" id="reg_Religion" placeholder="Religion">
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
                                                                        <input type="text" class="form-control" id="reg_Caste" placeholder="Caste">
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
                                                                        <input type="text" class="form-control" id="reg_Dhosham" placeholder="Dhosham">
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
                                                                    <select class="selectpicker">
                                                                        <option>Nakshathra_1</option>
                                                                        <option>Nakshathra_2</option>
                                                                        <option>Nakshathra_3</option>
                                                                        <option>Nakshathra_4</option>
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
                                                                    <select class="selectpicker">
                                                                        <option>Luknam_1</option>
                                                                        <option>Luknam_2</option>
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
                                                                        <input type="text" class="form-control" id="reg_Gothra" placeholder="Gothra">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>  
                                                <!--<div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Age</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>18</option>
                                                                        <option>20</option>
                                                                    </select>
                                                                    <select class="selectpicker">
                                                                        <option>21</option>
                                                                        <option>24</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Height</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>180 Cm</option>
                                                                        <option>200 Cm</option>
                                                                    </select>
                                                                    <select class="selectpicker">
                                                                        <option>210 Cm</option>
                                                                        <option>240 Cm</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>-->
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Zodiac Sign</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Cancer</option>
                                                                        <option>Libro</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                 <!--<div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Mother Toungue</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Tamil</option>
                                                                        <option>Telegu</option>
                                                                        <option>Other</option>
                                                                    </select>
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
                                                                    <select class="selectpicker">
                                                                        <option>Bachelor of Design and Communication</option>
                                                                        <option>Bachelor of Music</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Show Profile</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Both</option>
                                                                        <option>With Photo</option>
                                                                        <option>Without Photo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>-->
                                                <div class="search_btn">
                                                    <a href="matches.html#" class="register_angkar_btn pull-right">Next</a>
                                                    <!--<a href="matches.html#" class="white_angkar_btn">Reset</a>-->
                                                </div>
                                             </form>
                                        </div>
                                    </div>
                                 </div>
                             </div>       	            	
            	           </div>
                           <div role="tabpanel" class="tab-pane fade in" id="vallikodi">                                
                                <div class="registration_form_are">
                                 <div class="row">
                                    <div class="col-sm-12 aline-center-box">
                                        <div class="registration_form_s form-box aline-center-box">
                                             <div class="col-sm-3 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3>Education</h3>
                                                </div>    
                                             </div>
                                             <form class="box">
                                                
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Education</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>BE/B Tech</option>
                                                                        <option>BCA</option>
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
                                                                       <textarea class="form-control" rows="5" id="education" placeholder="Education in detail"></textarea>
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
                                                                    <select class="selectpicker">
                                                                        <option>Executive</option>
                                                                        <option>Manager</option>
                                                                        <option>Supervisor</option>                                          
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
                                                                    <select class="selectpicker">
                                                                        <option>Government</option>
                                                                        <option>Private</option>
                                                                        <option>Self</option>                                          
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
                                                                        <input type="text" class="form-control" id="reg_Income" placeholder="Income">
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
                                                                       <textarea class="form-control" rows="5" id="education" placeholder="Employment in detail"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                
                                                
                                                <div class="search_btn">
                                                    <a href="matches.html#" class="register_angkar_btn pull-right">Next</a>
                                                    <!--<a href="matches.html#" class="white_angkar_btn">Reset</a>-->
                                                </div>
                                             </form>
                                        </div>
                                    </div>
                                 </div>
                             </div>                         
                           </div>
                           <div role="tabpanel" class="tab-pane fade in" id="manual-id">                                                               
                                <div class="registration_form_are">
                                 <div class="row">
                                    <div class="col-sm-12 aline-center-box">
                                        <div class="registration_form_s form-box aline-center-box">
                                             <div class="col-sm-3 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3>Communication</h3>
                                                </div>    
                                             </div>
                                             <form class="box">                                                
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Resident of</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>India</option>
                                                                        <option>Sri Lanka</option>
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
                                                                    <select class="selectpicker">
                                                                        <option>India</option>
                                                                        <option>Sri Lanka</option>
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
                                                                        <input type="text" class="form-control" id="reg_City" placeholder="City">
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
                                                                        <input type="text" class="form-control" id="reg_District" placeholder="District">
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
                                                                       <textarea class="form-control" rows="5" id="address" placeholder="Address"></textarea>
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
                                                                        <input type="text" class="form-control" id="reg_Phone" placeholder="Phone">
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
                                                                        <input type="text" class="form-control" id="reg_Mobile" placeholder="Mobile">
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
                                                                        <input type="text" class="form-control" id="reg_FName" placeholder="FName">
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
                                                                        <input type="text" class="form-control" id="reg_MName" placeholder="MName">
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
                                                                        <input type="text" class="form-control" id="reg_Phone" placeholder="FEmployment">
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
                                                                        <input type="text" class="form-control" id="reg_MEmployment" placeholder="MEmployment">
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
                                                                    <select class="selectpicker">
                                                                        <option>Middle</option>
                                                                        <option>Upper Middle</option>
                                                                        <option>Rich</option>                                          
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
                                                                    <select class="selectpicker">
                                                                        <option>Joint</option>
                                                                        <option>Nuclear</option>                                             
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
                                                            <input type="text" class="form-control" id="reg_EBrother" placeholder="0">
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-2"> 
                                                         <div class="form-group">
                                                            <input type="text" class="form-control" id="reg_YBrother" placeholder="0">
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                    <label>No. of Sisters</label>
                                                    </div>
                                                    <div class="col-sm-2"> 
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="reg_ESister" placeholder="0">
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-2"> 
                                                         <div class="form-group">
                                                            <input type="text" class="form-control" id="reg_YSister" placeholder="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-sm-4">
                                                    <label>No. of Married Brothers</label>
                                                    </div>
                                                    <div class="col-sm-2"> 
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="reg_MEBrother" placeholder="0">
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-2"> 
                                                         <div class="form-group">
                                                            <input type="text" class="form-control" id="reg_MYBrother" placeholder="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                    <label>No. of Married Sisters</label>
                                                    </div>
                                                    <div class="col-sm-2"> 
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="reg_MESister" placeholder="0">
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-2"> 
                                                         <div class="form-group">
                                                            <input type="text" class="form-control" id="reg_MYSister" placeholder="0">
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
                                                                       <textarea class="form-control" rows="5" id="More" placeholder="More about Family"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                
                                                
                                                <div class="search_btn">
                                                    <a href="matches.html#" class="register_angkar_btn pull-right">Next</a>
                                                    <!--<a href="matches.html#" class="white_angkar_btn">Reset</a>-->
                                                </div>
                                             </form>
                                        </div>
                                    </div>
                                 </div>
                             </div>                         
                           </div>
                            
                            <div role="tabpanel" class="tab-pane fade in" id="dh-id">
                               <div class="registration_form_are">
                                 <div class="row">
                                    <div class="col-sm-12 aline-center-box">
                                        <div class="registration_form_s form-box aline-center-box">
                                             <div class="col-sm-3 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3>Physical</h3>
                                                </div>    
                                             </div>
                                             <form class="box">                                                
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Height in CMs</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>160</option>
                                                                        <option>165</option>
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
                                                                    <select class="selectpicker">
                                                                        <option>45</option>
                                                                        <option>50</option>
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
                                                                    <select class="selectpicker">
                                                                        <option>Slim</option>
                                                                        <option>Heavy</option>
                                                                        <option>Normal</option>
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
                                                                    <select class="selectpicker">
                                                                        <option>Fair</option>
                                                                        <option>Wheatish</option>
                                                                        <option>Dark</option>
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
                                                                    <select class="selectpicker">
                                                                        <option>Physically Challenged</option>
                                                                        <option>Normal</option>                                                 
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
                                                                    <select class="selectpicker">
                                                                        <option>Vegetarian</option>
                                                                        <option>Non-Vegetarian</option>
                                                                        <option>Eggetarian</option>
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
                                                                       <textarea class="form-control" rows="5" id="Personality" placeholder="Personality in Detail"></textarea>
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
                                                                    <select class="selectpicker">
                                                                        <option>18</option>
                                                                        <option>20</option>
                                                                    </select>
                                                                    <select class="selectpicker">
                                                                        <option>21</option>
                                                                        <option>24</option>
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
                                                                    <label class="checkbox-inline"><input type="checkbox" value="">Any</label>
                                                                    <label class="checkbox-inline"><input type="checkbox" value="">Single</label>
                                                                    <label class="checkbox-inline"><input type="checkbox" value="">Widowed</label>
                                                                    <label class="checkbox-inline"><input type="checkbox" value="">Annualled</label>
                                                                    <label class="checkbox-inline"><input type="checkbox" value="">Divorced</label>
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
                                                                        <input type="text" class="form-control" id="reg_Education" placeholder="Education">
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
                                                                    <label class="radio-inline"><input type="radio" name="optradio">Vegetarian</label>
                                                                    <label class="radio-inline"><input type="radio" name="optradio">Non-Vegerarian</label>
                                                                    <label class="radio-inline"><input type="radio" name="optradio">Eggetarian</label> 
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
                                                                       <textarea class="form-control" rows="5" id="Ecpectation" placeholder="Expectation"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                
                                                
                                                <div class="search_btn">
                                                    <a href="matches.html#" class="register_angkar_btn pull-right">Next</a>
                                                    <!--<a href="matches.html#" class="white_angkar_btn">Reset</a>-->
                                                </div>
                                             </form>
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
            
             
                
           
        
        <!--================End Advanced Search Area =================-->
        
        <!--================End Advanced Search Area =================-->
        <!--<section class="active_members">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/members/active-mem/active-mem-1.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="<?php echo base_url(); ?>assets/img/photo/people-p/people-drop-3.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/members/active-mem/active-mem-2.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="<?php echo base_url(); ?>assets/img/photo/people-p/people-drop-4.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/members/active-mem/active-mem-3.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="<?php echo base_url(); ?>assets/img/photo/people-p/people-drop-5.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/members/active-mem/active-mem-4.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="<?php echo base_url(); ?>assets/img/photo/people-p/people-drop-6.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/members/active-mem/active-mem-5.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="<?php echo base_url(); ?>assets/img/photo/people-p/people-drop-2.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/members/active-mem/active-mem-6.png" alt=""></a>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->      
        
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