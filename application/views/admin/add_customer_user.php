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
					<a href="#">View Customer User</a>
				</li>
			</ul>
		</div>
		<!-- Table -->
		<form method="POST" action="add_customer_user" id="online_form" class="add_customer_user success_result" enctype="multipart/form-data">
<?php } ?>	
			<?php
			  // print_r($zodiac_data);
              if(!empty($status)) :
                echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
              endif;
            ?> 
			<p class='val_error'> </p>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Add Online User</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
					    <!-- <button class="btn pull-right reset"> 
					        Reset
					    </button> -->
					    <button type="reset" id="reset" rel="reset" class="btn reset pull-right">Reset</button>
					    <button type="submit" class="btn btn-primary pull-right">Save</button>
						<!-- <a class="btn btn-primary pull-right" id="add" href="#">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Save
					    </a> -->
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> -->User Details</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>
											  <div class="control-group">
												<label class="control-label">User Type * : </label>
												<div class="controls">
												  <select data-rel="chosen" name="cus_usertype" id="usertype_act">
												  <option value="">Select User Type</option>
												  <?php foreach (unserialize(USER_TYPE) as $key => $val): ?>
													<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
												  <?php endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Customer Email * : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="" name="cus_email">
												</div>
											  </div>
											  <div class="control-group online_user_field">
												<label class="control-label" for="focusedInput">Password * : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="new_pass" type="Password" value="" name="cus_password">
												</div>
											  </div>
											  <div class="control-group online_user_field">
												<label class="control-label" for="focusedInput">Confirm Password * : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="confirm_pass" type="Password" value="" name="cus_confpassword">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Profile Id : </label>
												<div class="controls">
												  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="" name="cus_profileid">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">File Id : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="" name="cus_fileid">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Registered By * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_regby">
												  	<option value="">Select Registered By</option>
													<?php 
									                    foreach ($selection_values['registeredby_values'] as $reg_val):      
									                        echo "<option value='".$reg_val['registeredby_id']."'>".$reg_val['name']."</option>";
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Username * : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="" name="cus_fname">
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Gender * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_gender">
												  	<option value="">Select Gender</option>
													<?php foreach (unserialize(GENDER) as $key => $val): ?>
														<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
													  <?php endforeach; ?>
												  </select>
												</div>
											  </div>
											  	<div class="control-group">
												  <label class="control-label" for="date_birth">Date of Birth * :</label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepickerdob dob_admin" id="date_birth" value="" name="cus_dob">
												  </div>
												</div>
												
											  <div class="control-group">
												<label class="control-label">Marital Status * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_marstatus">
												  	<option value="">Select Marital Status</option>
													<?php 
									                    foreach ($selection_values['maritalstatus_values'] as $mar_val):      
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
										<div class="form-horizontal form_reset1">
											<fieldset>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Payment Type : </label>
													<div class="controls">
													  <?php foreach (unserialize(PAYMENT_TYPE) as $key => $val): ?>
														  <label class="radio">
															<input type="radio" value="<?php echo $key; ?>" name="cus_paymenttype" class="paymenttype_act">
															<?php echo $val; ?>
														  </label>
														  <div style="clear:both"></div>
														<?php endforeach; ?>
													</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Bill Number </label>
												<div class="controls">
												  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" name="cus_billnumber">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Amount </label>
												<div class="controls">
												  <input class="input-xlarge focused income-box" id="focusedInput" type="text" name="cus_amount">
												</div>
											  </div>
											  	<div class="control-group online_user_field">
													<label class="control-label" for="focusedInput">Period in Months </label>
													<div class="controls">
													  <?php foreach (unserialize(PERIOD_IN_MONTH) as $key => $val): ?>
														  <label class="radio">
															 <input type="radio" class="period_monthact" value="<?php echo $key; ?>" name="cus_period">
															<?php echo $val; ?>
														  </label>
														  <div style="clear:both"></div>
														<?php endforeach; ?>
													</div>
												</div>
											  	<div class="control-group online_user_field">
													<label class="control-label" for="focusedInput">Total No. of profile : </label>
													<div class="controls">
													  <input class="input-xlarge focused mob_num" id="cus_totprofile" type="text" value="" name="cus_totprofile">
													</div>
											  	</div>
											  	<div class="control-group">
												  <label class="control-label" for="start_date">Starting Date </label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker dob_admin" id="cus_paymentstartdate" name="cus_paymentstartdate">
												  </div>
												</div>
												<div class="control-group">
												  <label class="control-label" for="end_date">Ending Date</label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker dob_admin" id="cus_paymentenddate" name="cus_paymentenddate">
												  </div>
												</div>
											  <div class="control-group">
												<label class="control-label">Payment Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_paymentactivestatus">
												  	<option value="">Select Payment Active</option>
													<option value="1">Yes</option>
													<option value="0">No</option>
												  </select>
												</div>
											  </div>
											   <div class="control-group">
												<label class="control-label">Profile Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_profileactivestatus">
												  	<option value="">Select Status</option>
													<option value="1">Active</option>
													<option value="0">Not Active</option>
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
										<div class="form-horizontal form_reset">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Time of Birth * : </label>
												<div class="controls">
												  <input class="input-xlarge focused slider_example_1" id="focusedInput" type="time" value="" name="cus_birthtime">
												</div>												
											  </div>											  
											  <div class="control-group">
												<label class="control-label">Mother Tongue * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_mothertongue">
												  	<option value="">Select Mother Tongue</option>
													<?php 
								                    foreach ($selection_values['mothertongue_values'] as $mt_val):      
								                        echo "<option value='".$mt_val['mothertongue_id']."'>".$mt_val['name']."</option>";
								                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Religion : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="Hindu" name="cus_religion" disabled>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Caste : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="Vanniyar" name="cus_caste" disabled>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Sub Caste :</label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="" name="cus_subcaste">
												</div>												
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Dhosham : </label>
													<div class="controls">
													  <select data-rel="chosen" name="cus_dosham">
														  <option value="">Select Dhosham</option>
														  <?php 
										                    foreach ($selection_values['dhosham_values'] as $dho_val):      
										                        echo "<option value='".$dho_val['dhosham_id']."'>".$dho_val['name']."</option>";                       
										                    endforeach; ?>
													  </select>
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Nakshathra * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_nakshathra">
												  	<option value="">Select Nakshathra</option>
													<?php 
								                    foreach ($selection_values['nakshathra_values'] as $nak_val):      
								                        echo "<option value='".$nak_val['nakshathra_id']."'>".$nak_val['name']."</option>";
								                    endforeach; ?>
												  </select>
												</div>
												<div class="control-group">
												<label class="control-label">Luknam : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_lukhnam">
												  	<option value="">Select Luknam</option>
													<?php 
									                    foreach ($selection_values['luknam_values'] as $luk_val):      
									                        echo "<option value='".$luk_val['luknam_id']."'>".$luk_val['name']."</option>";
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Gothra : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="Sambu Maharishi Gothra" name="cus_gothra" disabled>
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Zodiac Sign * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_zodiac">
												  	<option value="">Select Zodiac Sign</option>
													<?php 
								                    foreach ($selection_values['zodiac_values'] as $zod_val):      
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
										<h2><!-- <i class="icon-th"> -->Education & Occupation</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>
											  <div class="control-group">
												<label class="control-label">Education * : </label>
												<div class="control-group">				
													<div class="controls">
														<select data-placeholder="Education List" class="dropdrop" id="selectError2" data-rel="chosen" name="cus_education">
															<option value="">Select Education</option>
	                                                        <?php 
	                                                            foreach ($selection_values['education_values'] as $key => $edu_val):    
	                                                                echo "<optgroup class='a' label='".$key."'>"; 
	                                                                foreach ($edu_val as $e_id => $edu): 
	                                                                    echo "<option value='".$e_id."'>".$edu."</option>";
	                                                                endforeach;
	                                                                echo "</optgroup>";
	                                                            endforeach; ?>					
													  </select>
													</div>
												  </div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Education in Detail *  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_edudetail"></textarea>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Occupation * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_occupation">
												  	<option value="">Select Occupation</option>
                                                    <?php 
                                                        foreach ($selection_values['occupation_values'] as $key => $occ_val):    
                                                            echo "<optgroup class='a' label='".$key."'>"; 
                                                            foreach ($occ_val as $o_id => $ocu): 
                                                               echo "<option value='".$o_id."'>".$ocu."</option>";
                                                            endforeach;
                                                            echo "</optgroup>";
                                                        endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Employed In * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_empin">
												  	<option value="">Select Employed In</option>
													  <?php 
									                    foreach ($selection_values['employedin_values'] as $emp_val):      
									                        echo "<option value='".$emp_val['employedin_id']."'>".$emp_val['name']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Monthly Income : </label>
												<div class="controls">
												  <input class="input-xlarge focused income-box" id="focusedInput" type="text" value="" name="cus_moninc">
												</div>												
											  </div>
											  	<div class="control-group">
												<label class="control-label" for="focusedInput">Occupation in Detail *  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_ocudetail"></textarea>
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
										<div class="form-horizontal form_reset">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Resident of : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_resident">
												  	<option value="">Select Resident of</option>
													<?php 
									                    foreach ($selection_values['country_values'] as $con_val):      
									                       echo "<option value='".$con_val['name']."'>".$con_val['name']."</option>";
									                   endforeach; ?>>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Current Country : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_curcountry">
												  	<option value="">Select Current Country</option>
													<?php 
									                    foreach ($selection_values['country_values'] as $con_val):      
									                        echo "<option value='".$con_val['name']."'>".$con_val['name']."</option>";
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current City : </label>
												<div class="controls">
												  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="" name="cus_curcity">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current District : </label>
												<div class="controls">
												<select data-rel="chosen" class="dropdrop" name="cus_curdistrict">
												  	<option value="">Select Current District</option>
													<?php 
									                    foreach (unserialize(DISTRICT) as $key => $val){     
									                        echo "<option value='".$key."'>".$val."</option>";
									                    }; ?>
												  </select>
												  <!-- <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="" name="cus_curdistrict"> -->
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Communication Address  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_address"></textarea>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Phone Number : </label>
												<div class="controls">
												  <input class="input-xlarge focused ph_num" id="focusedInput" type="text" value="" name="cus_phone">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mobile Number * : </label>
												<div class="controls">
												  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="" name="cus_mobile">
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
										<h2><!-- <i class="icon-th"> -->Physical Attributes</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Height : </label>
												<div class="controls">
												  <select name="cus_heightcms" class="span3 height_act">	
												  	<option value="">In cm</option>
                                                    <?php 
                                                        foreach ($selection_values['height_values']['cms'] as $height_val):    
                                                            echo "<option value='".$height_val['cms']."'>".$height_val['cms']."</option>";
                                                        endforeach; ?>
												  </select>
												  <select name="cus_heightfeets" class="span3 feet_act">  
                                                   	<option value="">In feet</option>
                                                    <?php 
                                                        foreach ($selection_values['height_values']['feet'] as $height_val):    
                                                            echo "<option value='".$height_val['feet']."' data-heightcms='".$height_val['hcms']."'>".$height_val['feet']."</option>";                       
                                                        endforeach; ?>
                                                </select> 	  
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Weight : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_weight">
												  	<option value="">Select Weight</option>
													<?php for( $i=41; $i<=140; $i++ ):
                                                        echo "<option value =".$i."kg>".$i."</option>";
                                                    endfor; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Body Type : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_bodytype">
												  	<option value="">Select Body Type</option>
													<?php 
									                    foreach ($selection_values['bodytype_values'] as $con_val):      
									                        echo "<option value='".$con_val['bodytype_id']."'>".$con_val['typename']."</option>";                       
									                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Complexion : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_complexion">
												  	<option value="">Select Complexion</option>
													<?php 
								                    foreach ($selection_values['complexion_values'] as $con_val):      
								                        echo "<option value='".$con_val['complexion_id']."'>".$con_val['name']."</option>";
								                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Physical Status : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_phystatus">
												  	<option value="">Select Physical Status</option>
													<?php foreach (unserialize(PHYSICAL_STATUS) as $key => $val): ?>
														<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
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
										<h2><!-- <i class="icon-th"> -->Habitat</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Food * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_food">
												  	<option value="">Select Food</option>
													<?php 
									                    foreach ($selection_values['food_values'] as $con_val):      
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
										<div class="form-horizontal form_reset">
											<fieldset>
											<div class="control-group">
												<label class="control-label" for="focusedInput">Father's Name * : </label>
												<div class="controls">
													  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="" name="cus_fathername">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Father's Employment * : </label>
												<div class="controls">
													  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="" name="cus_fatheremp">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label " for="focusedInput">Mother's Name * : </label>
												<div class="controls">
													  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="" name="cus_mothername">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Employment * : </label>
												<div class="controls">
													  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="" name="cus_motheremp">
												</div>												
											  </div>										  
											  <div class="control-group">
												<label class="control-label">Family Status * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_familystatus">
												  	<option value="">Select Family Status</option>
													<?php 
								                    foreach ($selection_values['familystatus_values'] as $con_val):      
								                        echo "<option value='".$con_val['familystatus_id']."'>".$con_val['name']."</option>";                       
								                    endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Family Type * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_familytype">
												  	<option value="">Select Family Type</option>
													<?php 
								                    foreach ($selection_values['familytype_values'] as $con_val):      
								                        echo "<option value='".$con_val['familytype_id']."'>".$con_val['name']."</option>";                       
								                    endforeach; ?>
												  </select>
												</div>
											  </div>

											  <div class="control-group">
												<label class="control-label" for="prependedInput">No. of Brothers :</label>
												<div class="controls">
													<div class="input-prepend">
													  <span class="add-on">Elder</span><input class="span4 bro_sis eldyou" id="prependedInput1" style="width: 100px" type="text" value="" name="cus_broelder">
													  <span class="add-on">Younger</span><input class="span4 bro_sis eldyou" id="prependedInput2" style="width: 100px" type="text" value="" name="cus_broyoung">
													</div>
												</div>								
											  </div>
											  <div class="control-group">
												<label class="control-label" for="prependedInput">No. of Sisters : </label>
												<div class="controls">
													<div class="input-prepend">
													  <span class="add-on">Elder</span><input class="span4 bro_sis eldyou" id="prependedInput3" style="width: 100px" type="text" value="" name="cus_siselder">
													   <span class="add-on">Younger</span><input class="span4 bro_sis eldyou" id="prependedInput4" type="text" style="width: 100px" value="" name="cus_sisyoung">
													  </div>
												</div>								
											  </div>
											  <div class="control-group">
												<label class="control-label" for="prependedInput">No. of Married Brothers : </label>
												<div class="controls">
													<div class="input-prepend">
													  <span class="add-on">Elder</span><input class="span4 bro_sis eldyou" id="prependedInput5" style="width: 100px" type="text" value="" name="cus_broeldermar">
													  <span class="add-on">Younger</span><input class="span4 bro_sis eldyou" id="prependedInput6" type="text" style="width: 100px" value="" name="cus_broyoungmar">
													 </div>
												</div>								
											  </div>
											  <div class="control-group">
												<label class="control-label" for="prependedInput">No. of Married Sisters : </label>
												<div class="controls">
													<div class="input-prepend">
													  <span class="add-on">Elder</span><input class="span4 bro_sis eldyou" id="prependedInput7" style="width: 100px" type="text" value="" name="cus_siseldermar">
													  <span class="add-on">younger</span><input class="span4 bro_sis eldyou" id="prependedInput8" type="text" style="width: 100px" value="" name="cus_sisyoungmar">
													 </div>
												</div>								
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">More About family  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_abtfamily"></textarea>
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
										<h2><!-- <i class="icon-th"> --> Your Personality</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Personality  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_personality"></textarea>
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
										<h2><!-- <i class="icon-th"> --> Search (Expectation/Looking for)</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Age * : </label>
												<div class="controls">
												  <select data-rel="chosen" value="From" class="dropdrop" name="cus_startage">
													<!-- <option>20</option>
													<option>23</option> -->
													<?php 
	                                                    for($i=18;$i<=60;$i++){ ?>
	                                                    <option <?php if($i==18){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
	                                                    <?php
	                                                    } ?>
												  </select>
												</div>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_endage">
													<!-- <option>25</option>
													<option>26</option> -->
													<?php 
                                                        for($i=18;$i<=60;$i++){
                                                        ?>
                                                        <option  <?php if($i==34){?> selected="selected" <?php } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php
                                                        }
                                                        ?>
												  </select>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Marital Status * :</label>
												<div class="controls">
												<?php 
									              foreach ($selection_values['maritalstatus_values'] as $mar_val): ?>     
 												  <label class="checkbox inline">
													<input class="checks" type="checkbox" name="cus_expectmarstatus[]" id="inlineCheckbox1" value="<?php echo $mar_val['maritalcategory_id']; ?>"> <?php echo $mar_val['marital_name']; ?>
												  </label>
												  <?php endforeach; ?>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="selectError1">Education * :</label>
												<div class="controls">
												  <select id="selectError1" multiple data-rel="chosen" class="dropdrop" name="cus_expectedu[]">
													<option value="">Select Education</option>
                                                    <?php 
                                                        foreach ($selection_values['education_values'] as $key => $edu_val):    
                                                            echo "<optgroup class='a' label='".$key."'>"; 
                                                            foreach ($edu_val as $e_id => $edu): 
                                                                echo "<option value='".$e_id."'>".$edu."</option>";
                                                            endforeach;
                                                            echo "</optgroup>";
                                                        endforeach; ?>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Food * :</label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop" name="cus_expectfood">
												  	<option value="">Select Food</option>
													<?php 
									                    foreach ($selection_values['food_values'] as $con_val):      
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
										<h2><!-- <i class="icon-th"> --> Expectation About Life Partner</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Expectation  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" name="cus_expect"></textarea>
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
										<h2><!-- <i class="icon-th"> --> Images</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>											  
											  <div class="control-group">
												<div class="control-group">
												  <!-- <label class="control-label" for="fileInput">Image :</label>
												  <div class="controls">
													<input class="input-file uniform_on" id="fileInput" type="file">
												  </div> -->
												  <div class="edit-mult-img">
												  		<div class="wrap-upload-buttons">
															<span id="spanFileName" class="val-error"></span>
														</div>
														<div class="edit_img">
															<div class="modal-body login-box clearfix">
																<ul id="media-list" class="clearfix">
																	<li class="myupload">
																		<span class="user-img"><i class="icon32 icon-plus user-img" aria-hidden="true"></i><input type="file" click-type="type2" id="picupload" class="picupload per-img-box user-img" name="cus_profileimage[]" multiple></span>
																	</li>
																</ul>
															</div>
														</div>			
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
										<div class="form-horizontal form_reset">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label">Featured Profile Status :</label>
												<div class="controls">
												  <select data-rel="chosen" name="cus_featuredactivestatus">
												  	<option value="">Select Featured Status</option>
													<option value="1">Active</option>
													<option value="0">Not Active</option>
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
								<button type="submit" class="btn btn-primary">Save</button>	
								<button type="reset" id="reset" rel="reset" class="btn reset">Reset</button>
															<!-- <button class="btn">Cancel</button> -->
							  </div>            
					</div>
				</div><!--/span
			</div><!--/row-->
		</div><!--/.fluid-container-->
	</div>  <!-- span10 end -->
<?php if(!$this->input->is_ajax_request()) { ?>
	</form>
	</div>
		<!-- external javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->


	<?php 
	    include('templates/footer.php');
	?>
<?php } ?>
