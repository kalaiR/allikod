<?php if(!$this->input->is_ajax_request()) { ?>
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
			<form method="POST" action="edit_customer_user/<?php echo $customeruser_values['userdetail_id']; ?>" class="customer_edit_form" name="customer_edit_form" enctype="multipart/form-data" data-id="<?php echo $this->uri->segment(3); ?>">
<?php } ?>	
					<?php
					  // print_r($zodiac_data);
	                  if(!empty($status)) :
	                    echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
	                  endif;
	                ?> 
					<p class='val_error'> <p>
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
								    <!-- <button type="submit" class="btn btn-primary pull-right">Save changes</button> -->
								    <!-- <button type="reset" class="btn btn-primary pull-right">Reset</button> -->
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
															  <input class="input-xlarge focused form_inputs" type="email" value="<?php if(!empty($customeruser_values['user_email'])) echo $customeruser_values['user_email'];  ?>" name="cus_email">
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Password : </label>
															<div class="controls">
															  <input class="input-xlarge focused form_inputs" type="Password" value="<?php if(!empty($customeruser_values['user_pwd'])) echo $customeruser_values['user_pwd'];  ?>" name="cus_password" id="new_pass">
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Confirm Password : </label>
															<div class="controls">
															  <input class="input-xlarge focused form_inputs" type="Password" value="<?php if(!empty($customeruser_values['user_pwd'])) echo $customeruser_values['user_pwd'];  ?>" name="cus_confpassword" id="confirm_pass">
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
																<input type="radio" id="optionsRadios1" value="1" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 1) echo "checked";  ?> name="cus_paymenttype">
																Cash
															  </label>
															  <div style="clear:both"></div>
															  <label class="radio">
																<input type="radio" id="optionsRadios2" value="2" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 2) echo "checked";  ?> name="cus_paymenttype">
																DD
															  </label>
															  <div style="clear:both"></div>
															  <label class="radio">
																<input type="radio" id="optionsRadios2" value="3" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 3) echo "checked";  ?> name="cus_paymenttype">
																CHQ
															  </label>
															  <div style="clear:both"></div>
															  <label class="radio">
																<input type="radio" id="optionsRadios2" value="4" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 4) echo "checked";  ?> name="cus_paymenttype">
																Net Banking
															  </label>
															</div>
														  </div>
														  <div class="control-group">
																<label class="control-label" for="focusedInput">Period in Months </label>
																<div class="controls">
																  <label class="radio">
																	<input type="radio" id="optionsRadios1" value="3" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 3) echo "checked";  ?> name="cus_period">
																	3
																  </label>
																  <div style="clear:both"></div>
																  <label class="radio">
																	<input type="radio" id="optionsRadios1" value="6" <?php if(!empty($customeruser_values['payment_type'])) if($customeruser_values['payment_type'] == 6) echo "checked";  ?> name="cus_period">
																	6
																  </label>
																</div>
															</div>
															<div class="control-group">
																<label class="control-label" for="focusedInput">Bill Number </label>
																<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['bill_number'])) echo $customeruser_values['bill_number'];  ?>" name="cus_billnumber">
																</div>
															</div>
															<div class="control-group">
																<label class="control-label" for="focusedInput">Amount </label>
																<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['amount'])) echo $customeruser_values['amount'];  ?>" name="cus_amount">
																</div>
															</div>
														  	<div class="control-group">
																<label class="control-label" for="focusedInput">Total No. of profile: </label>
																<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['totalno_of_profile'])) echo $customeruser_values['totalno_of_profile'];  ?>" name="cus_totprofile" disabled>
																</div>
														  	</div>
														  	<div class="control-group">
																<label class="control-label" for="focusedInput">No. of profile Viewed: </label>
																<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['no_of_profiles_viewed'])) echo $customeruser_values['no_of_profiles_viewed'];  ?>" name="cus_viewprofile" disabled>
																</div>
														  	</div>
														  	<div class="control-group">
															  <label class="control-label" for="date01">Starting Date </label>
															  <div class="controls">
																<input type="text" class="input-xlarge datepicker" value="<?php if(!empty($customeruser_values['startdate'])) echo date("d/m/Y", strtotime($customeruser_values['startdate'])); ?>" name="cus_paymentstartdate" readonly>
															  </div>
															</div>
															<div class="control-group">
															  <label class="control-label" for="date01">Ending Date</label>
															  <div class="controls">
																<input type="text" class="input-xlarge datepicker" value="<?php if(!empty($customeruser_values['enddate'])) echo date("d/m/Y", strtotime($customeruser_values['enddate'])); ?>" name="cus_paymentenddate" readonly>
															  </div>
															</div>
														  <div class="control-group">
															<label class="control-label">Payment Active Status : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_paymentactivestatus">
															  	<option value="">Select Payment Active</option>
																<option value="1" <?php if ($customeruser_values['payment_status'] == 1) echo "selected"; ?>>Yes</option>
																<option value="0" <?php if ($customeruser_values['payment_status'] == 0) echo "selected"; ?>>No</option>
															  </select>
															</div>
														  </div>
														   <div class="control-group">
															<label class="control-label">Profile Active Status : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_profileactivestatus">
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
															  <select data-rel="chosen" name="cus_regby">
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
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['user_fname'])) echo $customeruser_values['user_fname']; ?>" name="cus_fname">
																</div>
														  	</div>
														  	<div class="control-group">
															<label class="control-label">Gender : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_gender">
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
																<input type="text" class="input-xlarge datepicker" value="<?php if(!empty($customeruser_values['user_dob'])) echo date("d/m/Y", strtotime($customeruser_values['user_dob'])); ?>" name="cus_dob">
															  </div>
															</div>
															
														  <div class="control-group">
															<label class="control-label">Marital Status : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_marstatus">
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
															  <input class="input-xlarge focused" id="focusedInput" type="time" value="<?php if(!empty($customeruser_values['rel_timeofbirth'])) echo $customeruser_values['rel_timeofbirth']; ?>" name="cus_birthtime">
															</div>												
														  </div>											  
														  <div class="control-group">
															<label class="control-label">Mother Tongue : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_mothertongue">
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
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_religion'])) echo $customeruser_values['rel_religion']; ?>" name="cus_religion">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Caste : </label>
															<div class="controls">
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_caste'])) echo $customeruser_values['rel_caste']; ?>" name="cus_caste">
															</div>												
														  </div>
														  	<div class="control-group">
																<label class="control-label" for="focusedInput">Dhosham : </label>
																<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_dhosham'])) echo $customeruser_values['rel_dhosham']; ?>" name="cus_dosham">
																</div>
														  	</div>
														  	<div class="control-group">
															<label class="control-label">Nakshathra<b>*</b> : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_nakshathra" class="form_inputs">
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
															  <select data-rel="chosen" name="cus_lukhnam">
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
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_gothra'])) echo $customeruser_values['rel_gothra']; ?>" name="cus_gothra">
																</div>
														  	</div>
														  	<div class="control-group">
															<label class="control-label">Zodiac Sign<b>*</b> : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_zodiac">
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
																	<select data-placeholder="Education List" id="selectError2" data-rel="chosen" name="cus_education" class="form_inputs">
																		<option value="">Select Education</option>
																		<optgroup label="Bachelors- Engineering">
																		  <option value="1">BE</option>
																		  <option value="2">BTech</option>
																		  <option value="3">BArch</option>
																		</optgroup>
																		<optgroup label="Bachelors- Arts and Science">
																		  <option value="4">BSc</option>
																		  <option value="5">BCom</option>
																		  <option value="6">BCA</option>
																		</optgroup>						
																  </select>
																</div>
															  </div>
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Education in Detail<b>*</b>  : </label>
															<div class="controls">
															  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_edudetail" class="form_inputs"><?php if(!empty($customeruser_values['edu_educationdetails'])) echo $customeruser_values['edu_educationdetails']; ?></textarea>
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label">Occupation<b>*</b> : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_occupation" class="form_inputs">
																<option>Admin</option>
																<option>Manager</option>
															  </select>
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label">Employed In<b>*</b> : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_empin" class="form_inputs">
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
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['edu_montlyincome'])) echo $customeruser_values['edu_montlyincome']; ?>" name="cus_moninc" class="form_inputs">
															</div>											
															</div>
														  	<div class="control-group">
															<label class="control-label" for="focusedInput">Occupation in Detail<b>*</b>  : </label>
															<div class="controls">
															  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_ocudetail" class="form_inputs"><?php if(!empty($customeruser_values['edu_occupationdetail'])) echo $customeruser_values['edu_occupationdetail']; ?></textarea>
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
															  <select data-rel="chosen" name="cus_resident">
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
															  <select data-rel="chosen" name="cus_curcountry">
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
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_current_city'])) echo $customeruser_values['comm_current_city']; ?>" name="cus_curcity">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Current District : </label>
															<div class="controls">
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_current_district'])) echo $customeruser_values['comm_current_district']; ?>" name="cus_curdistrict">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Communication Address  : </label>
															<div class="controls">
															  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_address"><?php if(!empty($customeruser_values['comm_communication_address'])) echo $customeruser_values['comm_communication_address']; ?></textarea>
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Phone Number : </label>
															<div class="controls">
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_phone_no'])) echo $customeruser_values['comm_phone_no']; ?>" name="cus_phone">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Mobile Number : </label>
															<div class="controls">
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mobile_no'])) echo $customeruser_values['comm_mobile_no']; ?>" name="cus_mobile">
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
															  <select data-rel="chosen" name="cus_heightcms">
															  	<option value="">In CMs</option>
																<option>140</option>
																<option>141</option>
															  </select>
															  <select data-rel="chosen" name="cus_heightfeet">
																<option value="">In Feet</option>
																<option>5</option>
																<option>6</option>
															  </select>
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label">Weight : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_weight">
															  	<option value="">Select Weight</option>
																<option>60</option>
																<option>65</option>
															  </select>
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label">Body Type : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_bodytype">
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
															  <select data-rel="chosen" name="cus_complexion">
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
															  <select data-rel="chosen" name="cus_phystatus">
															  <option value="">Select Physical Status</option>
															  <?php foreach (unserialize(PHYSICAL_STATUS) as $key => $val): ?>
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
															  <select data-rel="chosen" name="cus_food">
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
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_father_name'])) echo $customeruser_values['comm_father_name']; ?>" name="cus_fathername" class="form_inputs">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Father's Employment<b>*</b> : </label>
															<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_father_employment'])) echo $customeruser_values['comm_father_employment']; ?>" name="cus_fatheremp" class="form_inputs">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Mother's Name<b>*</b> : </label>
															<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mother_name'])) echo $customeruser_values['comm_mother_name']; ?>" name="cus_mothername" class="form_inputs">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Mother's Employment<b>*</b> : </label>
															<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mother_employment'])) echo $customeruser_values['comm_mother_employment']; ?>" name="cus_motheremp" class="form_inputs">
															</div>												
														  </div>										  
														  <div class="control-group">
															<label class="control-label">Family Status<b>*</b> : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_familystatus" class="form_inputs"> 
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
															  <select data-rel="chosen" name="cus_familytype" class="form_inputs">
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
															<label class="control-label" for="prependedInput">No. of Brothers :</label>
															<div class="controls">
																<div class="input-prepend">
																  <span class="add-on">Elder</span><input class="span4" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_brothers_el'])) echo $customeruser_values['comm_number_of_brothers_el']; ?>" name="cus_broelder">
																  <span class="add-on">Younger</span><input class="span4" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_brothers_el'])) echo $customeruser_values['comm_number_of_brothers_el']; ?>" name="cus_broyoung">
																</div>
															</div>								
														  </div>
														  <div class="control-group">
															<label class="control-label" for="prependedInput">No. of Sisters : </label>
															<div class="controls">
																<div class="input-prepend">
																  <span class="add-on">Elder</span><input class="span4" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_el'])) echo $customeruser_values['comm_number_of_sisters_el_mar']; ?>" name="cus_siselder">
																   <span class="add-on">Younger</span><input class="span4" id="prependedInput" type="text" style="width: 100px" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_yo'])) echo $customeruser_values['comm_number_of_sisters_yo']; ?>" name="cus_sisyoung">
																  </div>
															</div>								
														  </div>
														  <div class="control-group">
															<label class="control-label" for="prependedInput">No. of Married Brothers : </label>
															<div class="controls">
																<div class="input-prepend">
																  <span class="add-on">Elder</span><input class="span4" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['	comm_number_of_brothers_el_mar'])) echo $customeruser_values['	comm_number_of_brothers_el_mar']; ?>" name="cus_broeldermar">
																  <span class="add-on">Younger</span><input class="span4" id="prependedInput" type="text" style="width: 100px" value="<?php if(!empty($customeruser_values['	comm_number_of_brothers_yo_mar'])) echo $customeruser_values['	comm_number_of_brothers_yo_mar']; ?>" name="cus_broyoungmar">
																 </div>
															</div>								
														  </div>
														  <div class="control-group">
															<label class="control-label" for="prependedInput">No. of Married Sisters : </label>
															<div class="controls">
																<div class="input-prepend">
																  <span class="add-on">Elder</span><input class="span4" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_el_mar'])) echo $customeruser_values['comm_number_of_sisters_el_mar']; ?>" name="cus_siseldermar">
																  <span class="add-on">younger</span><input class="span4" id="prependedInput" type="text" style="width: 100px" value="<?php if(!empty($customeruser_values['	comm_number_of_sisters_yo_mar'])) echo $customeruser_values['	comm_number_of_sisters_yo_mar']; ?>" name="cus_sisyoungmar">
																 </div>
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
															  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_abtfamily"><?php if(!empty($customeruser_values['comm_about_family'])) echo $customeruser_values['comm_about_family']; ?></textarea>
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
															  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_personality"><?php if(!empty($customeruser_values['phy_yourpersonality'])) echo $customeruser_values['phy_yourpersonality']; ?></textarea>
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
															  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_expect"><?php if(!empty($customeruser_values['phy_expectationabout_lifepartner'])) echo $customeruser_values['phy_expectationabout_lifepartner']; ?></textarea>
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
																<input class="input-file uniform_on" id="fileInput" type="file" name="cus_profileimage">
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
															  <select data-rel="chosen">
															  	<option value="">Select Active Status</option>
																<option>Active</option>
																<option>Inactive</option>
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
											<button type="submit" class="btn btn-primary">Save Changes</button>						
										  </div>            
								</div>
							</div><!--/span
						</div><!--/row-->
					</div><!--/.fluid-container-->
<?php if(!$this->input->is_ajax_request()) { ?>
				</form>
		</div>  <!-- span10 end -->
		<!-- external javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->


	<?php 
	    include('templates/footer.php');
	?>
<?php } ?>