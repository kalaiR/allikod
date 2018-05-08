<?php 
				// echo "<pre>";
				// print_r($customeruser_values);
				// echo "</pre>";
    include('templates/header.php');
?>
	<div id="content" class="span11">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>admin">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">View Customer User</a>
					</li>
				</ul>
			</div>
			<!-- Table -->
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> View Customer User</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<a class="btn btn-primary pull-right" id="add" href="<?php echo base_url(); ?>admin/edit_customer_user/<?php echo $this->uri->segment(3); ?>">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Edit
					    </a>
					   <!--  <a class="btn btn-info pull-right" id="add" href="add_successful_story.php">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Cancel
					    </a> -->
    						 <div class="row-fluid sortable">
								<div class="box span8">
									 <div class="box-header well">
										<h2></i> Login Details</h2>
									</div> 
									 <div class="box-content">
										<form class="form-horizontal">
											<fieldset>
											<!-- <div class="control-group">
												<label class="control-label" for="focusedInput">User Type :  </label>
												<label class="control-label" for="focusedInput"><?php //echo $customeruser_values['user_online_or_simple']; ?> </label>												
											  </div> -->
											  <!-- <?php 
											  echo "<pre>";
											  print_r($customeruser_values); 
											  echo "<pre>";
											  ?> -->
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Customer Email : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['user_email']; ?> </label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Customer Password : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['user_pwd']; ?> </label>
											  </div>
											  </div>										  
											</fieldset>
										  </form>
										</div> 
									</div>
								
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Profile Details</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>
											 <!--  <div class="control-group">
												<label class="control-label" for="focusedInput">Profile No : </label>
												<label class="control-label" for="focusedInput">0</label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">File No : </label>
												<label class="control-label" for="focusedInput">0</label>
											  </div>	
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Profiles Viewed : </label>
												<label class="control-label" for="focusedInput">0</label>
											  </div>	 -->
											  <div class="control-group">
												<label class="control-label" for="focusedInput">User Type :  </label>
												<span class="label label-success"><?php echo $customeruser_values['user_online_or_simple']; ?> </span>	<!--class for simple user <span class="label label-warning"> -->											
											  </div>							  
											  <div class="control-group">
												<label class="control-label">Registered By : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['registered_by_name']; ?></label>
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Name : </label>
													<label class="control-label" for="focusedInput"><?php echo $customeruser_values['user_fname']; ?></label>
											  	</div>
											  	<div class="control-group">
													<label class="control-label">Profile Id : </label>
													<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['userdetail_profile_id'])) echo $customeruser_values['userdetail_profile_id']; else echo "--"; ?></label>
												 </div>
												<div class="control-group">
													<label class="control-label">File Id : </label>
													<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['userdetail_file_id'])) echo $customeruser_values['userdetail_file_id']; else echo "--"; ?></label>
												 </div>
											  	<div class="control-group">
												<label class="control-label">Gender : </label>
												<label class="control-label" for="focusedInput">
													<?php 
							                          if ($customeruser_values['user_gender'] == 1) 
							                            echo "Male";
							                          else
							                            echo "Female";
							                        ?>
												</label>
											  </div>
											  	<div class="control-group">
												  <label class="control-label" for="date01">Date of Birth </label>
												  <label class="control-label" for="focusedInput">
												  	<?php 
						                            	echo date("d/m/Y", strtotime($customeruser_values['user_dob'])); 
						                        	?>
						                          </label>
												</div>
												
											  <div class="control-group">
												<label class="control-label">Marital Status : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['marital_name']; ?></label>
											  </div> 										  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Payment Details</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Payment Mode : </label>
												<label class="control-label" for="focusedInput">
													<?php 
													  	if(empty($customeruser_values['renewdetail_id']) && empty($customeruser_values['regpayment_id']))
													  		$selected = "Not_paid";
													  	else if(!empty($customeruser_values['renewdetail_id'])) 
													  		$selected = "Renewal"; 
													  	else 
													  		$selected = "Initial"; 
													  	echo $selected;
													  	?>
												</label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Payment Type : </label>
												<label class="control-label" for="focusedInput">
													<?php 
													  	if(empty($customeruser_values['renewdetail_id']) && empty($customeruser_values['regpayment_id']))
													  		$selected = "Not_paid";
													  	else if(!empty($customeruser_values['renewdetail_id'])) 
													  		$selected = $customeruser_values['plan_id']; 
													  	else 
													  		$selected = $customeruser_values['payment_type']; 
													  	// echo $selected;
													  	foreach (unserialize(PAYMENT_TYPE) as $key => $val):
															if($selected == $key):
																echo $val; 
																break;	
															endif;
														endforeach; 
													?>
												</label>
											  </div>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Period in Months :</label>
													<label class="control-label" for="focusedInput">
													<?php 
													  	if(empty($customeruser_values['renewdetail_id']) && empty($customeruser_values['regpayment_id']))
													  		$selected = "Not_paid";
													  	else if(!empty($customeruser_values['renewdetail_id'])) 
													  		$selected = $customeruser_values['ren_period_in_month']; 
													  	else 
													  		$selected = $customeruser_values['period_in_month']; 
													  	echo $selected;
													  	?>
													</label>
												</div>
											  	<div class="control-group">
												  <label class="control-label" for="date01">Starting Date : </label>
												  <label class="control-label" for="date01">
												  	<?php 
													  	if(empty($customeruser_values['renewdetail_id']) && empty($customeruser_values['regpayment_id']))
													  		$selected = "Not_paid";
													  	else if(!empty($customeruser_values['renewdetail_id'])) 
													  		$selected = date("Y/m/d", strtotime($customeruser_values['starting_date']));
													  	else 
													  		$selected = date("Y/m/d", strtotime($customeruser_values['startdate'])); 
													  	echo $selected;
													?>  	
												</div>
												<div class="control-group">
												  <label class="control-label" for="date01">Ending Date :</label>
												  <label class="control-label" for="date01"><?php 
													  	if(empty($customeruser_values['renewdetail_id']) && empty($customeruser_values['regpayment_id']))
													  		$selected = "Not_paid";
													  	else if(!empty($customeruser_values['renewdetail_id'])) 
													  		$selected = date("Y/m/d", strtotime($customeruser_values['ending_date']));
													  	else 
													  		$selected = date("Y/m/d", strtotime($customeruser_values['enddate'])); 
													  	echo $selected;
													?>  	
												 </label>
												</div>
											  <div class="control-group">
												<label class="control-label">Payment Active Status : </label>
												<span class="label label-success"> <!--class for not-paid <span class="label label-important"> -->
													<?php 
													  if(empty($customeruser_values['renewdetail_id']) && empty($customeruser_values['regpayment_id']))
													  		$payment_selected = "Not_paid";
													  	else if(!empty($customeruser_values['renewdetail_id'])) 
													  		$payment_selected = $customeruser_values['active_status'];
													  	else 
													  		$payment_selected = $customeruser_values['payment_status']; 
							                          if ($payment_selected == 1) 
							                            echo "Paid";
							                          else
							                            echo "Not Paid";
							                        ?>   </span>
												</div>
											   <div class="control-group">
												<label class="control-label">Profile Active Status : </label>
												<span class="label label-success"> <!--class for Not-activated <span class="label label-Danger"> -->
													<?php 
							                          if ($customeruser_values['user_active_status'] == 1) 
							                            echo "Activated";
							                          else
							                            echo "Not-Activated";
							                        ?>  </span>
											  </div>											  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Religion & Ethnicity</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Time of Birth : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['rel_timeofbirth'])) echo $customeruser_values['rel_timeofbirth']; else echo "--"; ?></label>
											  </div>											  
											  <div class="control-group">
												<label class="control-label">Mother Tongue : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['mother_tongue_name'])) echo $customeruser_values['mother_tongue_name']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Religion : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['rel_religion'])) echo $customeruser_values['rel_religion']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Caste : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['rel_caste'])) echo $customeruser_values['rel_caste']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Sub Caste : </label>
												<label class="control-label" for="focusedInput">Data</label>
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Dhosham : </label>
													<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['dhosham_name'])) echo $customeruser_values['dhosham_name']; else echo "--"; ?></label>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Nakshathra : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['nakshathra_name'])) echo $customeruser_values['nakshathra_name']; else echo "--"; ?></label>
												</div>
												<div class="control-group">
												<label class="control-label">Luknam : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['lukhnam_name'])) echo $customeruser_values['lukhnam_name']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Gothra : </label>
													<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['rel_gothra'])) echo $customeruser_values['rel_gothra']; else echo "--"; ?></label>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Zodiac Sign : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['zodiac_name'])) echo $customeruser_values['zodiac_name']; else echo "--"; ?></label>
											  </div>							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Education & Occupation</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Education : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['edu_name'])) echo $customeruser_values['edu_name']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Education in Detail  : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['edu_educationdetails'])) echo $customeruser_values['edu_educationdetails']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Occupation : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['occupation_name'])) echo $customeruser_values['occupation_name']; else echo "--"; ?></label>
											  </div>
											  	<div class="control-group">
												<label class="control-label" for="focusedInput">Occupation in Detail  : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['edu_occupationdetail'])) echo $customeruser_values['edu_occupationdetail']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Employed In : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['empin_name'])) echo $customeruser_values['empin_name']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Monthly Income : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['edu_montlyincome'])) echo $customeruser_values['edu_montlyincome']; else echo "--"; ?></label>						  
											  </div>
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Communication details</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Resident of : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_residence']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Current Country : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_current_countrycountry']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current City : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_current_city']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current District : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_current_district']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Communication Address  : </label>
												<div class="controls">
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_communication_address']; ?></label>
											  </div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Phone Number : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_phone_no']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mobile Number : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_mobile_no']; ?></label>
											 </div>					  							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Physical Attributes</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Height in CM : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['phy_height']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Height in Feet: </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['phy_feet']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Weight : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['phy_weight']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Body Type : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['typename']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Complexion : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['complexion_name']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Physical Status : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['phy_physicalstatus']; ?></label>
											  </div>				    							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Habitat</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Food : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['food_name']; ?></label>
											  </div>  				    							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Family Profile</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>
											<div class="control-group">
												<label class="control-label" for="focusedInput">Father's Name : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_father_name']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Father's Employment : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_father_employment']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Name : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_mother_name']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Employment : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_mother_employment']; ?></label>
											  </div>										  
											  <div class="control-group">
												<label class="control-label">Family Status : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['family_status']; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Family Type : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['family_type']; ?></label>
											  </div>
											  <!-- <div class="control-group">
												<label class="control-label" for="focusedInput"></label>
												<label class="control-label" for="focusedInput">Elder</label>
												<label class="control-label" for="focusedInput">Younger</label>	
											  </div> -->
											  <div class="control-group">
												<label class="control-label" for="focusedInput"></label>
												<label style="width: 100px" class="control-label" for="focusedInput">Elder</label>
												<label style="width: 100px" class="control-label" for="focusedInput">Younger</label>					
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Brothers : </label>
												<label style="width: 100px" class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_number_of_brothers_el']; ?></label>
												<label style="width: 100px" class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_number_of_brothers_yo']; ?></label>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Sisters : </label>
												<label style="width: 100px" class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_number_of_sisters_el']; ?></label>
												<label style="width: 100px" class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_number_of_sisters_yo']; ?></label>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Married Brothers : </label>
												<label style="width: 100px" class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_number_of_brothers_el_mar']; ?></label>
												<label style="width: 100px" class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_number_of_brothers_yo_mar']; ?></label>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Married Sisters : </label>
												<label style="width: 100px" class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_number_of_sisters_el_mar']; ?></label>
												<label style="width: 100px" class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_number_of_sisters_yo_mar']; ?></label>	
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">More About family  : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['comm_about_family']; ?></label>
											  </div>  					  							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Your Personality</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Personality  : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['phy_yourpersonality']; ?></label>
											  </div>  					  							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Search (Expectation/Looking for)</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Age : </label>
												<label class="control-label" for="focusedInput">From <?php echo $customeruser_values['phy_searchage_from']; ?></label>
												<label class="control-label" for="focusedInput">To <?php echo $customeruser_values['phy_searchage_to']; ?></label>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Marital Status :</label>
												<div class="controls">
												  <?php if(!empty($expected_maritalstatus)){
                                                    foreach($expected_maritalstatus as $key => $value) { ?>
                                                        <li><?php echo $value[0]['marital_name']; ?></li>
                                                        <?php 
                                                	}} ?>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="selectError1">Education</label>
												<div class="controls">
												<?php 
                                                    if(!empty($expected_education)){
                                                        foreach($expected_education as $key => $value) { ?>
                                                                <li><?php echo $value['edu_name']; ?></li>
                                                        <?php }
                                                    }?> 
                                                </div> 
											  </div>
											  <div class="control-group">
												<label class="control-label">Food :</label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['expect_food']; ?></label>
											  </div>  					  							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Expectation About Life Partner</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Personality  : </label>
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['phy_expectationabout_lifepartner']; ?></label>
											  </div>  					  							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Images</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Image  : </label>
												<div class="control-group">
												  <!-- <div class="profile_list"> -->
												  	<div class="controls">
											<ul>
	                                            <?php //echo FCPATH."uploads/profile/".$value['images'];
	                                            $images = explode(",",$customeruser_values['images']);
	                                            foreach ($images as $img) { 
	                                                $prefix = '';
	                                                $prefix_one = 'th_';
	                                                $prefix_two = 'new_';
	                                                $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$img);
	                                                $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$img);
	                                                if($prefix_one_status)
	                                                    $prefix = $prefix_one;
	                                                else if($prefix_two_status)
	                                                    $prefix = $prefix_two;
	                                            ?>
		                                            <li class="per_image">
			                                            <img src="<?php 
			                                                if(!empty($img)): 
			                                                    echo media_url()."uploads/profile/".$prefix.$img; 
			                                                    // echo "string";
			                                                else:
			                                                    echo media_url()."assets/img/no_image.jpg"; 
			                                                endif; 
			                                            ?>" style="width:100px;height:100px;">
		                                            </li>
	                                            <?php } ?>
                                            <!-- <li class="per_image"><img src="<?php echo media_url(); ?>assets/img/search-result-page/img1.jpg" alt="Smiley face" width="100" height="100"></li>
                                            <li class="per_image"><img src="<?php echo media_url(); ?>assets/img/search-result-page/img1.jpg" alt="Smiley face" width="100" height="100"></li>
                                            <li class="per_image"><img src="<?php echo media_url(); ?>assets/img/search-result-page/img1.jpg" alt="Smiley face" width="100" height="100"></li>
                                            <li class="per_image"><img src="<?php echo media_url(); ?>assets/img/search-result-page/img1.jpg" alt="Smiley face" width="100" height="100"></li>
                                            <li class="per_image"><img src="<?php echo media_url(); ?>assets/img/search-result-page/img1.jpg" alt="Smiley face" width="100" height="100"></li>
                                            <li class="per_image"><img src="<?php echo media_url(); ?>assets/img/search-result-page/img1.jpg" alt="Smiley face" width="100" height="100"></li>
                                            <li class="per_image"><img src="<?php echo media_url(); ?>assets/img/search-result-page/img1.jpg" alt="Smiley face" width="100" height="100"></li> -->
                                            </ul> 
                                    </div>                  
                                </div>
												</div>												
											  </div>  					  							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Featured Profile</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label">Featured Profile Status :</label>
												<label class="control-label" for="focusedInput">
													<?php 
							                          if ($customeruser_values['user_featured_profile_status'] == 1) 
							                            echo "Active";
							                          else
							                            echo "InActive";
							                        ?>
												</label>
											  </div>  					  							  
											</fieldset>
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Horoscope</h2>
									</div>
									<div class="box-content">
											<div class="col-md-12 col-xs-12">	
												<!-- <div class="col-md-6">			 -->
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
                                                <!-- </div> -->  <!-- row col 6 ends -->
                                                <!-- <div class="col-md-6"> -->
                                                    <!-- Asham Horoscope - start -->
                                                <!-- <div id="asham_horo_container"> -->
                                                    <!-- <div id="asham_horo_container"> -->
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
                                              <!-- </div> --><!-- Asham Horoscope - end -->
                                              <!-- </div>  -->
                                             </div>     
										</div> <!-- box content Ends -->
									</div>
								</div>
								<!-- <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button>						
							  </div>    -->         
					</div>
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/.fluid-container-->
	</div>  <!-- span10 end -->
	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
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
