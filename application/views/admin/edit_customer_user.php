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
			<form method="POST" action="edit_customer_user/<?php if(!empty($customeruser_values['userdetail_id'])) echo $customeruser_values['userdetail_id']; ?>" class="customer_edit_form" name="customer_edit_form" enctype="multipart/form-data" data-id="<?php echo $this->uri->segment(3); ?>">
<?php } ?>	
					<?php
					  // print_r($zodiac_data);
					if($customerid_status == TRUE){
	                  if(!empty($status)) :
	                    echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
	                  endif;
	                ?> 
					<!-- <p class='val_error'> </p> -->
					<div class="row-fluid sortable">
							<input type="hidden" name="cus_profileoldactivestatus" 
							value="<?php echo $customeruser_values['user_active_status'] ?>">		
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
													<h2><!-- <i class="icon-th"> -->Login Details</h2>
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
															  <input class="input-xlarge focused" type="email" value="<?php if(!empty($customeruser_values['user_email'])) echo $customeruser_values['user_email'];  ?>" name="cus_email">
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Password : </label>
															<div class="controls">
															  <input class="input-xlarge focused" type="text" value="<?php if(!empty($customeruser_values['user_pwd'])) echo $customeruser_values['user_pwd'];  ?>" name="cus_password" id="new_pass">
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Confirm Password : </label>
															<div class="controls">
															  <input class="input-xlarge focused" type="text" value="<?php if(!empty($customeruser_values['user_pwd'])) echo $customeruser_values['user_pwd'];  ?>" name="cus_confpassword" id="confirm_pass">
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
													<h2><!-- <i class="icon-th"> -->Profile Details</h2>	  			
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
															<label class="control-label" for="focusedInput">Vallikodi Id: </label>
															<div class="controls">
																<label for="focusedInput"><?php echo "VM".$customeruser_values['userdetail_id'];  ?> </label>
															</div>
														  </div>										
														  <div class="control-group">
																<label class="control-label" for="focusedInput">Profile Id: </label>
																<div class="controls">
																  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['userdetail_profile_id'])) echo $customeruser_values['userdetail_profile_id'];  ?>" name="cus_profileid">
																</div>
														  </div>
														  <div class="control-group">
																<label class="control-label" for="focusedInput">File Id: </label>
																<div class="controls">
																  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['userdetail_file_id'])) echo $customeruser_values['userdetail_file_id'];  ?>" name="cus_fileid">
																</div>
														  </div>
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
																<input type="text" class="input-xlarge datepicker" value="<?php if(!empty($customeruser_values['user_dob'])) echo date("Y-m-d", strtotime($customeruser_values['user_dob'])); ?>" name="cus_dob">
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
													<h2><!-- <i class="icon-th"> -->Payment Details</h2>	  			
												</div>
												<div class="box-content">
													<div class="form-horizontal">
														<fieldset>
														  <?php //echo "<pre>"; print_r($customeruser_values);echo "</pre>";  ?>
														  <div class="control-group">
															<label class="control-label">Payment Mode: </label>
															<div class="controls">
															  <?php 
															  	if(empty($customeruser_values['renewdetail_id']) && empty($customeruser_values['regpayment_id']))
															  		$selected = "not_paid";
															  	else if(!empty($customeruser_values['renewdetail_id'])) 
															  		$selected = "renewal"; 
															  	else 
															  		$selected = "initial"; 
															  	?>
															  <input type="hidden" name="payment_mode" value="<?php echo $selected; ?>" class="payment_mode">
															  <select data-rel="chosen" name="cus_paymentmode" class="paymentmode_act">
															  	<option value="" <?php if($selected == "not_paid") echo "selected"; ?>>Select Payment Mode</option>
															  	<option value="initial" <?php if($selected == "initial") echo "selected"; ?>>Initial</option>
															  	<option value="renewal" <?php if($selected == "renewal") echo "selected"; ?>>Renewal</option>
															  </select>
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label">User Type : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_usertype" id="usertype_act">
															  <option value="">Select User Type</option>
															  <?php foreach (unserialize(USER_TYPE) as $key => $val): ?>
																<option value="<?php echo $key; ?>" <?php if($customeruser_values['user_online_or_simple'] == $key) echo "selected"; ?>><?php echo $val; ?></option>
															  <?php endforeach; ?>
															  </select>
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Payment Type : </label>
															
															<div class="controls">
															<?php foreach (unserialize(PAYMENT_TYPE) as $key => $val): ?>
															  <label class="radio">
																<input type="radio" value="<?php echo $key; ?>" <?php if(($customeruser_values['payment_type'] == $key && $selected == "initial") || ($customeruser_values['plan_id'] == $key && $selected == "renewal")) echo "checked";  ?> name="cus_paymenttype" class="paymenttype_act">
																<?php echo $val; ?>
															  </label>
															  <div style="clear:both"></div>
															<?php endforeach; ?>
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Bill Number </label>
															<div class="controls">
															  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="<?php if($selected == 'initial') echo $customeruser_values['bill_number']; if($selected == 'renewal') echo $customeruser_values['ren_bill_number']; ?>" name="cus_billnumber">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label" for="focusedInput">Amount </label>
															<div class="controls">
															  <input class="input-xlarge focused income-box" id="focusedInput" type="text" value="<?php if($selected == 'initial') echo $customeruser_values['amount']; if($selected == 'renewal') echo $customeruser_values['ren_amount']; ?>" name="cus_amount">
															</div>
														</div>
														  <div class="control-group online_user_field" <?php if($customeruser_values['user_online_or_simple'] == "online") ?> style="display:block;">
																<label class="control-label" for="focusedInput">Period in Months </label>
																<div class="controls">
																<?php foreach (unserialize(PERIOD_IN_MONTH) as $key => $val): ?>
																  <label class="radio">
																	 <input type="radio" class="period_monthact" value="<?php echo $key; ?>" 
																	 <?php if($customeruser_values['user_online_or_simple'] == "online"): if(($selected == 'initial' && $customeruser_values['period_in_month'] == $val) || ($selected == 'renewal' && $customeruser_values['ren_period_in_month'] == $val)) echo "checked"; 
																	 endif; ?> 
																	 name="cus_period">
																	<?php echo $val; ?>
																  </label>
																  <div style="clear:both"></div>
																<?php endforeach; ?>
																</div>
															</div>
														  	<div class="control-group online_user_field" <?php if($customeruser_values['user_online_or_simple'] == "online") ?> style="display:block;">
																<label class="control-label" for="focusedInput">Total No. of profile: </label>
																<div class="controls">
																  <!-- <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php //if(!empty($customeruser_values['totalno_of_profile'])) echo $customeruser_values['totalno_of_profile'];  ?>" name="cus_totprofile" disabled> -->
																	<input class="input-xlarge focused mob_num" id="cus_totprofile" type="text" value="<?php if($customeruser_values['user_online_or_simple'] == "online"): if($selected == 'initial') echo $customeruser_values['paytotprofile']; if($selected == 'renewal') echo $customeruser_values['rentotprofile']; endif;  ?>" name="cus_totprofile">
																</div>
														  	</div>
														  	<div class="control-group online_user_field" <?php if($customeruser_values['user_online_or_simple'] == "online") ?> style="display:block;">
																<label class="control-label" for="focusedInput">No. of profile Viewed: </label>
																<div class="controls">
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if($customeruser_values['user_online_or_simple'] == "online"): if($selected == 'initial') echo $customeruser_values['no_of_profiles_viewed']; if($selected == 'renewal') echo $customeruser_values['no_of_profile_viewed']; endif; ?>" name="cus_viewprofile" disabled>
																</div>
														  	</div>
														  	<div class="control-group">
															  <label class="control-label" for="date01">Starting Date </label>
															  <div class="controls">
																<!-- <input type="text" class="input-xlarge datepicker" value="<?php //if(!empty($customeruser_values['startdate'])) echo date("d/m/Y", strtotime($customeruser_values['startdate'])); ?>" name="cus_paymentstartdate"> -->
															  	<input type="text" class="input-xlarge datepicker" id="cus_paymentstartdate" value="<?php if($selected == 'initial') echo date("Y-m-d", strtotime($customeruser_values['startdate'])); else if($selected == 'renewal') echo date("Y-m-d", strtotime($customeruser_values['starting_date'])); ?>" name="cus_paymentstartdate">
															  </div>
															</div>
															<div class="control-group">
															  <label class="control-label" for="date01">Ending Date</label>
															  <div class="controls">
																<input type="text" class="input-xlarge datepicker" id="cus_paymentenddate" value="<?php if($selected == 'initial') echo date("Y-m-d", strtotime($customeruser_values['enddate'])); else if($selected == 'renewal') echo date("Y-m-d", strtotime($customeruser_values['ending_date'])); ?>" name="cus_paymentenddate">
															  </div>
															</div>
														  <div class="control-group">
															<label class="control-label">Payment Active Status : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_paymentactivestatus">
															  	<option value="">Select Payment Active</option>
																<option value="1" <?php if (($customeruser_values['payment_status'] == 1 && $selected == 'initial') || ($customeruser_values['renewalstatus'] == 1 && $selected == 'renewal')) echo "selected"; ?>>Yes</option>
																<option value="0" <?php if (($customeruser_values['payment_status'] == 0 && $selected == 'initial') || ($customeruser_values['renewalstatus'] == 0 && $selected == 'renewal')) echo "selected"; ?>>No</option>
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
													<h2><!-- <i class="icon-th"> -->Religion & Ethnicity</h2>	  			
												</div>
												<div class="box-content">
													<div class="form-horizontal">
														<fieldset>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Time of Birth : </label>
															<div class="controls">
															  <input class="input-xlarge focused slider_example_1" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_timeofbirth'])) echo $customeruser_values['rel_timeofbirth']; ?>" name="cus_birthtime">
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
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_religion'])) echo $customeruser_values['rel_religion']; ?>" name="cus_religion" disabled>
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Caste : </label>
															<div class="controls">
															  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_caste'])) echo $customeruser_values['rel_caste']; ?>" name="cus_caste" disabled>
															</div>												
														  </div>
														  	<div class="control-group">
																<label class="control-label" for="focusedInput">Dhosham : </label>
																<div class="controls">
																<select data-rel="chosen" name="cus_dosham">
																  <option value="">Select Dhosham</option>
																  <?php 
												                    foreach ($selection_values['dhosham_values'] as $dho_val):      
												                        if($dho_val['dhosham_id'] == $customeruser_values['rel_dhosham'])  
												                        	echo "<option selected value='".$dho_val['dhosham_id']."'>".$dho_val['name']."</option>";
												                        else
												                            echo "<option value='".$dho_val['dhosham_id']."'>".$dho_val['name']."</option>";                       
												                    endforeach; ?>
																  </select>
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
																  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['rel_gothra'])) echo $customeruser_values['rel_gothra']; ?>" name="cus_gothra" disabled>
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
				                                                        <?php 
				                                                            foreach ($selection_values['education_values'] as $key => $edu_val):    
				                                                                echo "<optgroup class='a' label='".$key."'>"; 
				                                                                foreach ($edu_val as $e_id => $edu): 
				                                                                    if($e_id == $customeruser_values['edu_education'])  
				                                                                        echo "<option selected value='".$e_id."'>".$edu."</option>";
				                                                                    else
				                                                                        echo "<option value='".$e_id."'>".$edu."</option>";
				                                                                endforeach;
				                                                                echo "</optgroup>";
				                                                            endforeach; ?>				
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
																<option value="">Select Occupation</option>
		                                                        <?php 
		                                                            foreach ($selection_values['occupation_values'] as $key => $occ_val):    
		                                                                echo "<optgroup class='a' label='".$key."'>"; 
		                                                                foreach ($occ_val as $o_id => $ocu): 
		                                                                    if($o_id == $customeruser_values['edu_occupation'])  
		                                                                        echo "<option selected value='".$o_id."'>".$ocu."</option>";
		                                                                    else
		                                                                        echo "<option value='".$o_id."'>".$ocu."</option>";
		                                                                endforeach;
		                                                                echo "</optgroup>";
		                                                            endforeach; ?>
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
															<label class="control-label" for="focusedInput">Monthly Income : </label>
															<div class="controls">
															  <input class="input-xlarge focused income-box" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['edu_montlyincome'])) echo $customeruser_values['edu_montlyincome']; ?>" name="cus_moninc" class="form_inputs">
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
													<h2><!-- <i class="icon-th"> -->Communication details</h2>	  			
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
															  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_current_city'])) echo $customeruser_values['comm_current_city']; ?>" name="cus_curcity">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Current District : </label>
															<div class="controls">
															  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_current_district'])) echo $customeruser_values['comm_current_district']; ?>" name="cus_curdistrict">
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
															  <input class="input-xlarge focused ph_num" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_phone_no'])) echo $customeruser_values['comm_phone_no']; ?>" name="cus_phone">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Mobile Number : </label>
															<div class="controls">
															  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mobile_no'])) echo $customeruser_values['comm_mobile_no']; ?>" name="cus_mobile">
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
													<h2><!-- <i class="icon-th"> --> Physical Attributes</h2>	  			
												</div>
												<div class="box-content">
													<div class="form-horizontal">
														<fieldset>										  
														  <div class="control-group">
															<label class="control-label">Height : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_heightcms" class="span3 height_act">
															  	<option value="">In cm</option>
		                                                        <?php 
		                                                            foreach ($selection_values['height_values'] as $height_val):  
		                                                                if (strpos($customeruser_values['phy_height'], 'cm') == false) 
		                                                                    $customeruser_values['phy_height'] += "cm";   
		                                                                if($height_val['cms']."cm" == $customeruser_values['phy_height'])  
		                                                                    echo "<option selected value='".$height_val['cms']."cm'>".$height_val['cms']."</option>";
		                                                                else
		                                                                    echo "<option value='".$height_val['cms']."cm'>".$height_val['cms']."</option>";                       
		                                                            endforeach; ?>
															  </select>
															  <select data-rel="chosen" name="cus_heightfeets" class="span3 feet_act">
		                                                        <option value="">In feet</option>
		                                                        <?php 
		                                                            foreach ($selection_values['height_values']['feet'] as $height_val):    
		                                                                if($height_val['feet'] == $customeruser_values['phy_feet'])  
		                                                                    echo "<option selected value='".$height_val['feet']."' data-heightcms='".$hrel_val['hcms']."'>".$height_val['feet']."</option>";
		                                                                else
		                                                                    echo "<option value='".$height_val['feet']."' data-heightcms='".$height_val['hcms']."'>".$height_val['feet']."</option>";                       
		                                                            endforeach; ?>
		                                                    </select> 
															  <!-- <select data-rel="chosen" name="cus_heightfeet" class="span3">
																<option value="">In Feet</option>
																<option>5</option>
																<option>6</option>
															  </select> -->
															</div>
														  </div>
														  <div class="control-group">
															<label class="control-label">Weight : </label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_weight">
															  	<option value="">Weight in Kgs</option>
		                                                        <?php for( $i=41; $i<=140; $i++ ):
		                                                            if (strpos($customeruser_values['phy_weight'], 'kg') == false) 
		                                                                    $customeruser_values['phy_weight'] += "kg"; 
		                                                            if($i."kg" == $customeruser_values['phy_weight'])
		                                                                echo "<option value =".$i."kg selected>".$i."</option>";
		                                                            else
		                                                                echo "<option value =".$i."kg>".$i."</option>";
		                                                        endfor; ?>
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
													<h2><!-- <i class="icon-th"> --> Habitat</h2>	  			
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
													<h2><!-- <i class="icon-th"> --> Family Profile</h2>	  			
												</div>
												<div class="box-content">
													<div class="form-horizontal">
														<fieldset>
														<div class="control-group">
															<label class="control-label" for="focusedInput">Father's Name<b>*</b> : </label>
															<div class="controls">
																  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_father_name'])) echo $customeruser_values['comm_father_name']; ?>" name="cus_fathername" class="form_inputs">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Father's Employment<b>*</b> : </label>
															<div class="controls">
																  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_father_employment'])) echo $customeruser_values['comm_father_employment']; ?>" name="cus_fatheremp" class="form_inputs">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Mother's Name<b>*</b> : </label>
															<div class="controls">
																  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mother_name'])) echo $customeruser_values['comm_mother_name']; ?>" name="cus_mothername" class="form_inputs">
															</div>												
														  </div>
														  <div class="control-group">
															<label class="control-label" for="focusedInput">Mother's Employment<b>*</b> : </label>
															<div class="controls">
																  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="<?php if(!empty($customeruser_values['comm_mother_employment'])) echo $customeruser_values['comm_mother_employment']; ?>" name="cus_motheremp" class="form_inputs">
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
																  <span class="add-on">Elder</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_brothers_el'])) echo $customeruser_values['comm_number_of_brothers_el']; ?>" name="cus_broelder">
																  <span class="add-on">Younger</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_brothers_yo'])) echo $customeruser_values['comm_number_of_brothers_yo']; ?>" name="cus_broyoung">
																</div>
															</div>								
														  </div>
														  <div class="control-group">
															<label class="control-label" for="prependedInput">No. of Sisters : </label>
															<div class="controls">
																<div class="input-prepend">
																  <span class="add-on">Elder</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_el'])) echo $customeruser_values['comm_number_of_sisters_el']; ?>" name="cus_siselder">
																   <span class="add-on">Younger</span><input class="span4 bro_sis" id="prependedInput" type="text" style="width: 100px" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_yo'])) echo $customeruser_values['comm_number_of_sisters_yo']; ?>" name="cus_sisyoung">
																  </div>
															</div>								
														  </div>
														  <div class="control-group">
															<label class="control-label" for="prependedInput">No. of Married Brothers : </label>
															<div class="controls">
																<div class="input-prepend">
																  <span class="add-on">Elder</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_brothers_el_mar'])) echo $customeruser_values['comm_number_of_brothers_el_mar']; ?>" name="cus_broeldermar">
																  <span class="add-on">Younger</span><input class="span4 bro_sis" id="prependedInput" type="text" style="width: 100px" value="<?php if(!empty($customeruser_values['comm_number_of_brothers_yo_mar'])) echo $customeruser_values['comm_number_of_brothers_yo_mar']; ?>" name="cus_broyoungmar">
																 </div>
															</div>								
														  </div>
														  <div class="control-group">
															<label class="control-label" for="prependedInput">No. of Married Sisters : </label>
															<div class="controls">
																<div class="input-prepend">
																  <span class="add-on">Elder</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_el_mar'])) echo $customeruser_values['comm_number_of_sisters_el_mar']; ?>" name="cus_siseldermar">
																  <span class="add-on">younger</span><input class="span4 bro_sis" id="prependedInput" type="text" style="width: 100px" value="<?php if(!empty($customeruser_values['comm_number_of_sisters_yo_mar'])) echo $customeruser_values['comm_number_of_sisters_yo_mar']; ?>" name="cus_sisyoungmar">
																 </div>
															</div>								
														  </div>
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
													<h2><!-- <i class="icon-th"> -->  Your Personality</h2>	  			
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
															  <select data-rel="chosen" value="From" class="span3">
																<option>20</option>
																<option>23</option>
															  </select>
															</div>
															<div class="controls">
															  <select data-rel="chosen" class="span3">
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
																<input type="checkbox" id="inlineCheckbox3" value="option3"> Divorced
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
													<h2><!-- <i class="icon-th"> --> Expectation About Life Partner</h2>	  			
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
													<h2><!-- <i class="icon-th"> --> Image</h2>	  			
												</div>
												<div class="box-content">
													<div class="form-horizontal">
														<fieldset>											  
														  <div class="edit-mult-img">
															<!-- <label class="control-label" for="focusedInput">Image  : </label> -->
															<!-- <div class="control-group">
															  <div class="controls">
																<input class="input-file uniform_on" id="fileInput" type="file" name="cus_profileimage">
															  </div>
															</div>	 -->
															<div class="wrap-upload-buttons">
																<span id="spanFileName" class="val-error"></span>
																<!-- <ul class="btn-nav">
																	<li><span class="btn btn-default"> Browers<input type="file" name="cus_profileimage[]" click-type="type1" class="picupload img_view" multiple accept="image/*" / id="picupload"></span></li>
																</ul> -->
															</div>
															 <div class="edit_img">
															<div class="modal-body login-box clearfix">
																<ul id="media-list" class="clearfix">
																<?php 
																$image_count = 0;
		                                                        if(!empty($customeruser_values['images_id'])){
		                                                            $images_id = explode(",",$customeruser_values['images_id']);
		                                                            $images = explode(",",$customeruser_values['images']);
		                                                            $img_data = array_map(null,$images_id,$images);
		                                                            $image_count = sizeof($img_data);
		                                                            // echo "<pre>";
		                                                            // print_r($img_data);
		                                                            // echo "</pre>";
		                                                            foreach ($img_data as $value) {
		                                                        ?>
		                                                        <li>
		                                                            <img class="cus_img" src="<?php echo media_url().USER_PROFILE_PATH."th_".$value[1]; ?>" alt="img" data-id="<?php echo $value[0]; ?>">
		                                                            <div class="post-thumb">
		                                                                <div class="inner-post-thumb">
		                                                                    <a href="javascript:void(0);" class="remove-pic remove_act"><i class="icon icon-color icon-close" aria-hidden="true"></i></a>
		                                                                </div>
		                                                            </div>
		                                                        </li>
		                                                        <?php }} //if($image_count <8){ ?>
																	<li class="myupload">
																		<span class="user-img"><i class="icon32 icon-plus user-img" aria-hidden="true"></i><input type="file" click-type="type2" id="picupload" class="picupload per-img-box user-img" name="cus_profileimage[]" multiple></span>
																	</li>
																<?php //} ?>	
																</ul>
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
													<h2><!-- <i class="icon-th"> --> Featured Profile</h2>	  			
												</div>
												<div class="box-content">
													<div class="form-horizontal">
														<fieldset>			  
														  <div class="control-group">
															<label class="control-label">Featured Profile Status :</label>
															<div class="controls">
															  <select data-rel="chosen" name="cus_featuredactivestatus">
															  	<option value="">Select Featured Status</option>
																<option value="1" <?php if ($customeruser_values['user_featured_profile_status'] == 1) echo "selected"; ?>>Active</option>
																<option value="0" <?php if ($customeruser_values['user_featured_profile_status'] == 0) echo "selected"; ?>>Not Active</option>
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
													<h2><!-- <i class="icon-th"> -->Horoscope</h2> 			
												</div>
												<div class="box-content">
													<div class="col-md-6 rs_box" style="display: inline-block;">	
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
		                                                        <div id="rasi_cont" class="rasi_box">
		                                                            <select style="width: 70px" id="rasi_name" class="drop_horo styled-select blue semi-square" name="rasi_name">    
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
		                                                            <select id="box_id" style="width: 70px" class="drop_horo styled-select blue semi-square" >
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
		                                                                <!-- <img src="assets/img/add.png" type="button" id="add_rasi" value="ADD" name="add_rasi" /> -->
		                                                                <i style="cursor:pointer" class="icon-plus" aria-hidden="true" id="add_rasi" name="add_rasi"></i>
		                                                                <select style="width: 70px" id="crasi_name" class="drop_horo styled-select blue semi-square" name="crasi_name">
		                                                                </select>    
		                                                                <i style="cursor:pointer" class="icon-remove"   aria-hidden="true" type="button" id="remove_rasi" name="add_rasi"></i>
		                                                        </div> 
		                                                    </div>
		                                                    <!-- Rasi Horoscope - End -->
		                                                </div>  <!-- row col 6 ends -->
		                                                <div class="col-md-6 asham-box" style="display: inline-block;">
		                                                    <!-- Asham Horoscope - start -->
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
		                                              <!-- </div> --><!-- Asham Horoscope - end -->
		                                              		<div id="asham_cont" class="rasi_box">
		                                                        <select style="width: 70px;" id="asham_name" class="drop_horo styled-select blue semi-square" name="asham_name">    
		                                                            <option value="a_1">&#2994;&#2965;&#3021;</option> 
		                                                            <option value="a_2">&#2992;&#3006;&#2965;&#3009;</option>
		                                                            <option value="a_3">&#2970;&#2984;&#3021;</option>   
		                                                            <option value="a_4">&#2965;&#3015;&#2980;&#3009;</option>
		                                                            <option value="a_5">&#2970;&#2985;&#3007;</option>
		                                                            <option value="a_6">&#2970;&#3014;&#2997;&#3021; </option>
		                                                            <option value="a_7"> &#2965;&#3009;&#2992;&#3009;</option>
		                                                            <option value="a_8"> &#2970;&#3009;&#2965;&#3021;</option>
		                                                            <option value="a_9">&#2970;&#3010;&#2992;&#3007;</option>
		                                                            <option value="a_10"> &#2986;&#3009;&#2980;&#2985;&#3021;</option> 
		                                                        </select>

		                                                        <select id="ashambox_id" style="width: 70px" class="drop_horo styled-select blue semi-square" >
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

		                                                            <!-- <img src="assets/img/add.png" type="button" id="add_rasi" value="ADD" name="add_rasi" /> -->
		                                                            <i style="cursor:pointer" class="icon-plus" aria-hidden="true" id="add_asham" name="add_asham"></i>
		                                                            <select style="width: 70px" id="casham_name" class="drop_horo styled-select blue semi-square" name="casham_name">
		                                                            </select>    
		                                                            <i style="cursor:pointer" class="icon-remove" aria-hidden="true" type="button" id="remove_asham" name="remove_asham"></i>
		                                                    </div> 
		                                              	</div> <!-- col 6 ends  -->     
												</div> <!-- box content Ends -->
												</div>
											</div>
											<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save Changes</button>						
										  </div>            
								</div>
							</div><!--/span-->
						</div><!--/row-->
					</div><!--/.fluid-container-->
<?php }else echo "No record found to edit for this ID"; 
	if(!$this->input->is_ajax_request()) { ?>
				</form>
		</div>  <!-- span10 end -->
		<!-- external javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->


	<?php 
	    include('templates/footer.php');
	?>
<?php } ?>