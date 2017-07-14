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
                    <h3>Search People Here</h3>
                    <img src="<?php echo base_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <div class="search_option">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="search.html#base" aria-controls="base" role="tab" data-toggle="tab">Basic Search</a></li>
                         <li role="presentation" class="#"><a href="search.html#advanced-search" aria-controls="advanced-search" role="tab" data-toggle="tab">Advanced Search</a></li>
                        <li role="presentation" class="#"><a href="search.html#vallikodi" aria-controls="vallikodi" role="tab" data-toggle="tab">Search By Vallikodi ID</a></li>
                        <li role="presentation" class="#"><a href="search.html#manual-id" aria-controls="manual-id" role="tab" data-toggle="tab"> Search By Manual ID</a></li>
                         <li role="presentation" class="#"><a href="search.html#dh-id" aria-controls="dh-id" role="tab" data-toggle="tab"> Search By Dhosham</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="base">
                            <div class="registration_form_are">
                        	 	 <div class="row">
                        	 	 	<div class="col-sm-12 aline-center-box">
                        	 	 		<div class="registration_form_s form-box aline-center-box">
                        	 	 			 <div class="col-sm-2 aline-center-box box">
                                                <div class="height_item">      
                                                    <h3>Basic Search</h3>
                                                </div>    
                                             </div>
                        	 	 			 <form method="post" class="box" action="<?php echo base_url(); ?>search_result">                                              
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
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Maritel Status</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Single</option>
                                                                        <option>Single</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                 <div class="col-sm-10  aline-center-box">
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
                                                </div>
                                                <div class="search_btn">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                    <button type="reset" value="LogIn" class="btn form-control login_btn">Reset</button>
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
                                                    <h3>Advanced Search</h3>
                                                </div>    
                                             </div>
                                             <form class="box" action="<?php echo base_url(); ?>search_result">
                                              
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
                                                                    <h4>Location</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>India</option>
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
                                                                    <h4>Ocuppation</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Admin</option>
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
                                                                    <h4>Physical Status</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Normal</option>
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
                                                </div>
                                                <div class="col-sm-10  aline-center-box">
                                                       <div class="row">
                                                            <div class="col-sm-4 base-box">
                                                                <div class="height_item">
                                                                    <h4>Maritel Status</h4>
                                                                </div>    
                                                            </div>
                                                            <div class="col-sm-6 box">
                                                                <div class="height_item">
                                                                    <select class="selectpicker">
                                                                        <option>Single</option>
                                                                        <option>Single</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                </div>
                                                 <div class="col-sm-10  aline-center-box">
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
                                                </div>
                                                <div class="search_btn">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                    <button type="reset" value="LogIn" class="btn form-control login_btn">Reset</button>
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
                                                        <h3>Search By Vallikodi ID</h3>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <form action="<?php echo base_url(); ?>search_result">
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box" id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="bride_name" placeholder="">      
                                                            </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 butn-box">
                                                <div class="reg_chose form-group ">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </form>        
                                </div>     
                           </div>
                           <div role="tabpanel" class="tab-pane fade in" id="manual-id">
                                <div class="registration_form_are">
                                    <div class="row">
                                        <div class="col-sm-12 aline-center-box">
                                            <div class="registration_form_s form-box aline-center-box">
                                                <div class="col-sm-3 aline-center-box box">
                                                    <div class="height_item">      
                                                        <h3>Search By Manual ID</h3>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <form  action="<?php echo base_url(); ?>search_result">
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box" id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="bride_name" placeholder="">      
                                                            </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 butn-box">
                                                <div class="reg_chose form-group ">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </form>        
                                </div>     
                           </div>
                            
                            <div role="tabpanel" class="tab-pane fade in" id="dh-id">
                                <div class="registration_form_are">
                                    <div class="row">
                                        <div class="col-sm-12 aline-center-box">
                                            <div class="registration_form_s form-box aline-center-box">
                                                <div class="col-sm-3 aline-center-box box">
                                                    <div class="height_item">      
                                                        <h3> Search By Dhosham</h3>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <form  action="<?php echo base_url(); ?>search_result">
                                        <div class="col-sm-6 aline-center-box ">
                                            <div class="col-sm-6 ">
                                                <div class="registration_form_area form-box" id="registration_form_are_box">
                                                    <div class="registration_form_s_box" id="registration_form_s_box">
                                                             <div class="col-sm-6 ">
                                                                    <div class="height_item">
                                                                        <select class="selectpicker">
                                                                            <option>Naga Dhosam</option>
                                                                            <option>Chevvai Dhosam</option>
                                                                            <option>Raghu Kedhu Dhosam</option>
                                                                        </select>
                                                                    </div>
                                                                </div>     
                                                            </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 butn-box">
                                                <div class="reg_chose form-group ">
                                                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                                                </div>
                                            </div>                                           
                                        </div> 
                                    </form>       
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
              
        <!-- <div id="largeContent" style="display:none;">
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
        </div> -->
<?php 
    include('include/footer.php');
?> 
    </body>
</html>