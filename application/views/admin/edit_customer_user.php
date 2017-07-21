<?php 
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
						<a href="#">Edit Customer User</a>
					</li>
				</ul>
			</div>
			<!-- Table -->
<form method="POST" action="edit_customer_user/<?php echo $customeruser_values['userdetail_id']; ?>" >
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Edit Customer User</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<!-- <a class="btn btn-primary pull-right" id="add" href="add_successful_story.php">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Save
					    </a> -->
					    <button type="submit" class="btn btn-primary pull-right">Save changes</button>
					    <button type="reset" class="btn btn-primary pull-right">Reset</button>
					 <!--    <a class="btn btn-primary pull-right" id="add" href="add_successful_story.php">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Cancel
					    </a> -->
    						 <div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Login Details</h2>
										<!-- <div class="box-icon">
											<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
											<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
											<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
										</div> -->
									</div>
									<div class="box-content">
										<!-- <a class="btn btn-primary pull-right" id="add" href="add_successful_story.php">
									        <i class="glyphicon glyphicon-edit icon-white"></i>
									        Save
									    </a>
									    <a class="btn btn-primary pull-right" id="add" href="add_successful_story.php">
									        <i class="glyphicon glyphicon-edit icon-white"></i>
									        Cancel
									    </a> -->
										<div class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Customer Email : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="email" value="<?php if(!empty($customeruser_values['user_email'])) echo $customeruser_values['user_email'];  ?>">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Password : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="Password" value="<?php if(!empty($customeruser_values['user_pwd'])) echo $customeruser_values['user_pwd'];  ?>">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Confirm Password : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="Password" value="<?php if(!empty($customeruser_values['user_pwd'])) echo $customeruser_values['user_pwd'];  ?>">
												</div>
											  </div>
											  <!-- <div class="control-group">
												<label class="control-label">Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option>Enabled</option>
													<option>Disabled</option>
												  </select>
												</div>
											  </div>
											   <div class="control-group">
												<label class="control-label">Admin Type : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option>Admin</option>
													<option>Selling Admin</option>
												  </select>
												</div>
											  </div> -->
											  <!-- <div class="form-actions">
												<button type="submit" class="btn btn-primary">Save changes</button>
												<button class="btn">Cancel</button>
											  </div> -->
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Payment Details</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Payment Type : </label>
												
												<div class="controls">
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 1) echo "checked";  ?>>
													Cash
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 2) echo "checked";  ?>>
													DD
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 3) echo "checked";  ?>>
													CHQ
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 4) echo "checked";  ?>>
													Net Banking
												  </label>
												</div>
											  </div>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Period in Months </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="radio" value="3" <?php if(!empty($customeruser_values['period_in_month'])) if($customeruser_values['period_in_month'] == 3) echo "checked";  ?>>3
													</div>
													<div class="controls">
													  <input style="display: inline-block;" class="input-xlarge focused" id="focusedInput" type="radio" value="6" <?php if(!empty($customeruser_values['period_in_month'])) if($customeruser_values['period_in_month'] == 6) echo "checked";  ?>>6
													</div>
												</div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">No. of profile : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['no_of_profiles_viewed'])) echo $customeruser_values['no_of_profiles_viewed'];  ?>">
													</div>
											  	</div>
											  	<div class="control-group">
												  <label class="control-label" for="date01">Starting Date </label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker" id="date01" value="<?php if(!empty($customeruser_values['startdate'])) echo date("d/m/Y", strtotime($customeruser_values['startdate'])); ?>">
												  </div>
												</div>
												<div class="control-group">
												  <label class="control-label" for="date01">Ending Date</label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker" id="date01" value="<?php if(!empty($customeruser_values['enddate'])) echo date("d/m/Y", strtotime($customeruser_values['enddate'])); ?>">
												  </div>
												</div>
											  <div class="control-group">
												<label class="control-label">Payment Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Payment Active</option>
													<option value="1" <?php if ($customeruser_values['payment_status'] == 1) echo "selected"; ?>>Yes</option>
													<option value="0" <?php if ($customeruser_values['payment_status'] == 0) echo "selected"; ?>>No</option>
												  </select>
												</div>
											  </div>
											   <div class="control-group">
												<label class="control-label">Profile Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Status</option>
													<option value="1" <?php if ($customeruser_values['user_active_status'] == 1) echo "selected"; ?>>Active</option>
													<option value="0" <?php if ($customeruser_values['user_active_status'] == 0) echo "selected"; ?>>Not Active</option>
												  </select>
												</div>
											  </div>											  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Profile Details</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>
											  <!-- <div class="control-group">
												<label class="control-label" for="focusedInput">Profile No : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div> -->
											  <!-- <div class="control-group">
												<label class="control-label" for="focusedInput">File No : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div> -->
											  <div class="control-group">
												<label class="control-label">Registered By : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Registered By</option>
												  <?php 
								                    foreach ($selection_values['registeredby_values'] as $reg_val):      
								                        if($reg_val['registeredby_id'] == $customeruser_values['user_registeredby'])  
								                        	echo "<option selected value='".$reg_val['registeredby_id']."'>".$reg_val['name']."</option>";
								                        else
								                            echo "<option value='".$reg_val['registeredby_id']."'>".$reg_val['name']."</option>";                       
								                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Name : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['user_fname'])) echo $customeruser_values['user_fname']; ?>">
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Gender : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Gender</option>
												  <?php foreach (unserialize(GENDER) as $key => $val): ?>
													<option value="<?php echo $key; ?>" <?php if($customeruser_values['user_gender'] == $key) echo "selected"; ?>><?php echo $val; ?></option>
												  <?php endforeach; ?>
												  </select>
												</div>
											  </div>
											  	<div class="control-group">
												  <label class="control-label" for="date01">Date of Birth </label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker" id="date01" value="<?php if(!empty($customeruser_values['user_dob'])) echo date("d/m/Y", strtotime($customeruser_values['user_dob'])); ?>">
												  </div>
												</div>
												
											  <div class="control-group">
												<label class="control-label">Marital Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Marital Status</option>
												  <?php 
								                    foreach ($selection_values['maritalstatus_values'] as $mar_val):      
								                        if($mar_val['maritalcategory_id'] == $customeruser_values['user_maritalstatus'])  
								                        	echo "<option selected value='".$mar_val['maritalcategory_id']."'>".$mar_val['marital_name']."</option>";
								                        else
								                            echo "<option value='".$mar_val['maritalcategory_id']."'>".$mar_val['marital_name']."</option>";                       
								                    endforeach; ?>
												  </select>
												</div>
											  </div> 											  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Religion & Ethnicity</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Time of Birth : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="time" value="<?php if(!empty($customeruser_values['rel_timeofbirth'])) echo $customeruser_values['rel_timeofbirth']; ?>">
												</div>												
											  </div>											  
											  <div class="control-group">
												<label class="control-label">Mother Tongue : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Mother Tongue</option>
												  <?php 
								                    foreach ($selection_values['mothertongue_values'] as $mt_val):      
								                        if($mt_val['mothertongue_id'] == $customeruser_values['rel_mothertongue_id'])  
								                        	echo "<option selected value='".$mt_val['mothertongue_id']."'>".$mt_val['name']."</option>";
								                        else
								                            echo "<option value='".$mt_val['mothertongue_id']."'>".$mt_val['name']."</option>";                       
								                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Religion : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_religion'])) echo $customeruser_values['rel_religion']; ?>">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Caste : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_caste'])) echo $customeruser_values['rel_caste']; ?>">
												</div>												
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Dhosham : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_dhosham'])) echo $customeruser_values['rel_dhosham']; ?>">
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Nakshathra<b>*</b> : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Nakshathra</option>
												  <?php 
								                    foreach ($selection_values['nakshathra_values'] as $nak_val):      
								                        if($nak_val['nakshathra_id'] == $customeruser_values['rel_nakshathra_id'])  
								                        	echo "<option selected value='".$nak_val['nakshathra_id']."'>".$nak_val['name']."</option>";
								                        else
								                            echo "<option value='".$nak_val['nakshathra_id']."'>".$nak_val['name']."</option>";                       
								                    endforeach; ?>
												  </select>
												</div>
												<div class="control-group">
												<label class="control-label">Luknam : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Luknam</option>
												  <?php 
								                    foreach ($selection_values['luknam_values'] as $luk_val):      
								                        if($luk_val['luknam_id'] == $customeruser_values['rel_luknam_id'])  
								                        	echo "<option selected value='".$luk_val['luknam_id']."'>".$luk_val['name']."</option>";
								                        else
								                            echo "<option value='".$luk_val['luknam_id']."'>".$luk_val['name']."</option>";                       
								                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Gothra : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_gothra'])) echo $customeruser_values['rel_gothra']; ?>">
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Zodiac Sign<b>*</b> : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Zodiac Sign</option>
												  <?php 
								                    foreach ($selection_values['zodiac_values'] as $zod_val):      
								                        if($zod_val['zodiacsign_id'] == $customeruser_values['rel_zodiacsign_id'])  
								                        	echo "<option selected value='".$zod_val['zodiacsign_id']."'>".$zod_val['name']."</option>";
								                        else
								                            echo "<option value='".$zod_val['zodiacsign_id']."'>".$zod_val['name']."</option>";                       
								                    endforeach; ?>
												  </select>
												</div>
											  </div>							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Education & Occupation</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label">Education<b>*</b> : </label>
												<div class="control-group">				
													<div class="controls">
														<select data-placeholder="Education List" id="selectError2" data-rel="chosen">
															<option value=""></option>
															<optgroup label="Bachelors- Engineering">
															  <option>BE</option>
															  <option>BTech</option>
															  <option>BArch</option>
															</optgroup>
															<optgroup label="Bachelors- Arts and Science">
															  <option>BSc</option>
															  <option>BCom</option>
															  <option>BCA</option>
															</optgroup>						
													  </select>
													</div>
												  </div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Education in Detail<b>*</b>  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"><?php if(!empty($customeruser_values['edu_educationdetails'])) echo $customeruser_values['edu_educationdetails']; ?></textarea>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Occupation<b>*</b> : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option>Admin</option>
													<option>Manager</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Employed In<b>*</b> : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option value="">Select Employed In</option>
													  <?php 
									                    foreach ($selection_values['employedin_values'] as $emp_val):      
									                        if($emp_val['employedin_id'] == $customeruser_values['edu_employedin'])  
									                        	echo "<option selected value='".$emp_val['employedin_id']."'>".$emp_val['name']."</option>";
									                        else
									                            echo "<option value='".$emp_val['employedin_id']."'>".$emp_val['name']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Monthly Income<b>*</b> : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['edu_montlyincome'])) echo $customeruser_values['edu_montlyincome']; ?>">
												</div>											
												</div>
											  	<div class="control-group">
												<label class="control-label" for="focusedInput">Occupation in Detail<b>*</b>  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"><?php if(!empty($customeruser_values['edu_occupationdetail'])) echo $customeruser_values['edu_occupationdetail']; ?></textarea>
												</div>												
											  </div>							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Communication details</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Resident of : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option value="">Select Resident</option>
													  <?php 
									                    foreach ($selection_values['country_values'] as $con_val):      
									                        if($con_val['country_id'] == $customeruser_values['comm_residence'])  
									                        	echo "<option selected value='".$con_val['country_id']."'>".$con_val['name']."</option>";
									                        else
									                            echo "<option value='".$con_val['country_id']."'>".$con_val['name']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Current Country : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Current Country</option>
													<?php 
									                    foreach ($selection_values['country_values'] as $con_val):      
									                        if($con_val['country_id'] == $customeruser_values['comm_residence'])  
									                        	echo "<option selected value='".$con_val['country_id']."'>".$con_val['name']."</option>";
									                        else
									                            echo "<option value='".$con_val['country_id']."'>".$con_val['name']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current City : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_current_city'])) echo $customeruser_values['comm_current_city']; ?>">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current District : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_current_district'])) echo $customeruser_values['comm_current_district']; ?>">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Communication Address  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text"><?php if(!empty($customeruser_values['comm_communication_address'])) echo $customeruser_values['comm_communication_address']; ?></textarea>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Phone Number : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_phone_no'])) echo $customeruser_values['comm_phone_no']; ?>">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mobile Number : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mobile_no'])) echo $customeruser_values['comm_mobile_no']; ?>">
												</div>												
											  </div>					  							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Physical Attributes</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Height : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option value="">In CMs</option>
													<option>140</option>
													<option>141</option>
												  </select>
												  <select data-rel="chosen">
													<option value="">In Feet</option>
													<option>5</option>
													<option>6</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Weight : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Weight</option>
													<option>60</option>
													<option>65</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Body Type : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option value="">Select Body Type</option>
													<?php 
									                    foreach ($selection_values['bodytype_values'] as $con_val):      
									                        if($con_val['bodytype_id'] == $customeruser_values['phy_bodytype'])  
									                        	echo "<option selected value='".$con_val['bodytype_id']."'>".$con_val['typename']."</option>";
									                        else
									                            echo "<option value='".$con_val['bodytype_id']."'>".$con_val['typename']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Complexion : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option value="">Select Complexion</option>
													<?php 
									                    foreach ($selection_values['complexion_values'] as $con_val):      
									                        if($con_val['complexion_id'] == $customeruser_values['phy_complexion'])  
									                        	echo "<option selected value='".$con_val['complexion_id']."'>".$con_val['name']."</option>";
									                        else
									                            echo "<option value='".$con_val['complexion_id']."'>".$con_val['name']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Physical Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  <option value="">Select Payment Status</option>
												  <?php foreach (unserialize(PAYMENT_TYPE) as $key => $val): ?>
													<option value="<?php echo $key; ?>" <?php if($customeruser_values['phy_physicalstatus'] == $key) echo "selected"; ?>><?php echo $val; ?></option>
												  <?php endforeach; ?>
												  </select>
												</div>
											  </div>				    							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Habitat</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Food : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option value="">Select Food Values</option>
													<?php 
									                    foreach ($selection_values['food_values'] as $con_val):      
									                        if($con_val['food_id'] == $customeruser_values['phy_food'])  
									                        	echo "<option selected value='".$con_val['food_id']."'>".$con_val['name']."</option>";
									                        else
									                            echo "<option value='".$con_val['food_id']."'>".$con_val['name']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>  				    							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Family Profile</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>
											<div class="control-group">
												<label class="control-label" for="focusedInput">Father's Name<b>*</b> : </label>
												<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_father_name'])) echo $customeruser_values['comm_father_name']; ?>">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Father's Employment<b>*</b> : </label>
												<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_father_employment'])) echo $customeruser_values['comm_father_employment']; ?>">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Name<b>*</b> : </label>
												<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mother_name'])) echo $customeruser_values['comm_mother_name']; ?>">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Employment<b>*</b> : </label>
												<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mother_employment'])) echo $customeruser_values['comm_mother_employment']; ?>">
												</div>												
											  </div>										  
											  <div class="control-group">
												<label class="control-label">Family Status<b>*</b> : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option value="">Select Family Status</option>
													<?php 
									                    foreach ($selection_values['familystatus_values'] as $con_val):      
									                        if($con_val['familystatus_id'] == $customeruser_values['comm_family_status'])  
									                        	echo "<option selected value='".$con_val['familystatus_id']."'>".$con_val['name']."</option>";
									                        else
									                            echo "<option value='".$con_val['familystatus_id']."'>".$con_val['name']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Family Type<b>*</b> : </label>
												<div class="controls">
												  <select data-rel="chosen">
													<option value="">Select Family Type</option>
													<?php 
									                    foreach ($selection_values['familytype_values'] as $con_val):      
									                        if($con_val['familytype_id'] == $customeruser_values['comm_family_type'])  
									                        	echo "<option selected value='".$con_val['familytype_id']."'>".$con_val['name']."</option>";
									                        else
									                            echo "<option value='".$con_val['familytype_id']."'>".$con_val['name']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>

											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Brothers : </label>
												<div class="controls">
													  <input class="span4" id="focusedInput"  type="text" value="<?php if(!empty($customeruser_values['comm_number_of_brothers_el'])) echo $customeruser_values['comm_number_of_brothers_el']; ?>" placeholder="Elder" >
												</div>
												<div class="controls">
													  <input class="span4" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_brothers_el'])) echo $customeruser_values['comm_number_of_brothers_el']; ?>" placeholder="Younger">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Sisters : </label>
												<div class="controls">
													  <input class="span4" id="focusedInput"  type="text" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_el'])) echo $customeruser_values['comm_number_of_sisters_el_mar']; ?>" placeholder="Elder" >
												</div>
												<div class="controls">
													  <input class="span4" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_yo'])) echo $customeruser_values['comm_number_of_sisters_yo']; ?>" placeholder="Younger">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Married Brothers : </label>
												<div class="controls">
													  <input class="span4" id="focusedInput"  type="text" value="<?php if(!empty($customeruser_values['	comm_number_of_brothers_el_mar'])) echo $customeruser_values['	comm_number_of_brothers_el_mar']; ?>" placeholder="Elder">
												</div>
												<div class="controls">
													  <input class="span4" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['	comm_number_of_brothers_yo_mar'])) echo $customeruser_values['	comm_number_of_brothers_yo_mar']; ?>" placeholder="Younger">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Married Sisters : </label>
												<div class="controls">
													  <input class="span4" id="focusedInput"  type="text" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_el_mar'])) echo $customeruser_values['comm_number_of_sisters_el_mar']; ?>" placeholder="Elder">
												</div>
												<div class="controls">
													  <input class="span4" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['	comm_number_of_sisters_yo_mar'])) echo $customeruser_values['	comm_number_of_sisters_yo_mar']; ?>" placeholder="Younger">
												</div>												
											  </div>
											  <!-- <div class="control-group">
												<label class="control-label"> </label>
													<div class="row-fluid ">
														<div class="span1">Yelder</div>
														<div class="span1">Younger</div>		
													</div>
												</div>
												<div class="control-group">
												<label class="control-label">No. of Brothers : </label>
													<div class="row-fluid ">
														<div ><input  class="span1" id="focusedInput" type="text" value="">2</div>
														<div class="span1">1</div>		
													</div>
												</div>
												<div class="control-group">
												<label class="control-label"> No. of Sisters :</label>
													<div class="row-fluid ">
														<div class="span1">0</div>
														<div class="span1">1</div>		
													</div>
												</div>
												<div class="control-group">
												<label class="control-label">Married Brothers</label>
													<div class="row-fluid ">
														<div class="span1">0</div>
														<div class="span1">0</div>		
													</div>
												</div>
												<div class="control-group">
												<label class="control-label">Married Sisters : </label>
													<div class="row-fluid ">
														<div class="span1">2</div>
														<div class="span1">1</div>		
													</div>
												</div> -->


											  <div class="control-group">
												<label class="control-label" for="focusedInput">More About family  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"><?php if(!empty($customeruser_values['comm_about_family'])) echo $customeruser_values['comm_about_family']; ?></textarea>
												</div>												
											  </div>  					  							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Your Personality</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Personality  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"><?php if(!empty($customeruser_values['phy_yourpersonality'])) echo $customeruser_values['phy_yourpersonality']; ?></textarea>
												</div>												
											  </div>  					  							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<!-- <div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2></i> Search (Expectation/Looking for</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Age : </label>
												<div class="controls">
												  <select data-rel="chosen" value="From">
													<option>20</option>
													<option>23</option>
												  </select>
												</div>
												<div class="controls">
												  <select data-rel="chosen">
													<option>25</option>
													<option>26</option>
												  </select>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Marital Status :</label>
												<div class="controls">
												  <label class="checkbox inline">
													<input type="checkbox" id="inlineCheckbox1" value="option1"> Single
												  </label>
												  <label class="checkbox inline">
													<input type="checkbox" id="inlineCheckbox2" value="option2"> Widowed
												  </label>
												  <label class="checkbox inline">
													<input type="checkbox" id="inlineCheckbox3" value="option3"> Divorsed
												  </label>
												  <label class="checkbox inline">
													<input type="checkbox" id="inlineCheckbox3" value="option3"> Annualled
												  </label>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="selectError1">Education</label>
												<div class="controls">
												  <select id="selectError1" multiple data-rel="chosen">
													<option>BE/BTech</option>
													<option selected>MBBS</option>
													<option>BCom</option>
													<option>BCA</option>
													<option>BSc</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Food :</label>
												<div class="controls">
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Vegetarian
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Non-Vegetarian
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Eggetarian
												  </label>
												</div>
											  </div>  					  							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div> -->
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Expectation About Life Partner</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Expectation  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"><?php if(!empty($customeruser_values['phy_expectationabout_lifepartner'])) echo $customeruser_values['phy_expectationabout_lifepartner']; ?></textarea>
												</div>												
											  </div>  					  							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Image</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Image  : </label>
												<div class="control-group">
												  <label class="control-label" for="fileInput">Image</label>
												  <div class="controls">
													<input class="input-file uniform_on" id="fileInput" type="file">
												  </div>
												</div>												
											  </div>  					  							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Image Activation</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label">Image Active :</label>
												<div class="controls">
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">					
												  </label>
												</div>												
											  </div>  					  							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Horoscope</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal">
											<fieldset>											  
											  					  							  
											</fieldset>
										  </div>
										</div>
									</div>
								</div>
								<div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button>						
							  </div>            
					</div>
				</div><!--/span
			</div><!--/row-->
		</div><!--/.fluid-container-->
</form>
	</div>  <!-- span10 end -->
	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
?>