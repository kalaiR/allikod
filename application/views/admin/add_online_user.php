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
			<form id="online_form">
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
					    <button class="btn pull-right">Cancel</button>
						<a class="btn btn-primary pull-right" id="add" href="#">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Save
					    </a>
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
										<div class="form-horizontal form_reset">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Your Email * : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="email" value="">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Password * : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Confirm Password * : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
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
										<h2><!-- <i class="icon-th"> -->Payment Details</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset1">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Payment Type : </label>
												
												<div class="controls">
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Cash
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													DD
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													CHQ
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Net Banking
												  </label>
												</div>
											  </div>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Period in Months </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="radio" value="">3
													</div>
													<div class="controls">
													  <input style="display: inline-block;" class="input-xlarge focused" id="focusedInput" type="radio" value="">6
													</div>
												</div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">No. of profile : </label>
													<div class="controls">
													  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="">
													</div>
											  	</div>
											  	<div class="control-group">
												  <label class="control-label" for="start_date">Starting Date </label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker1" id="start_date" value="">
												  </div>
												</div>
												<div class="control-group">
												  <label class="control-label" for="end_date">Ending Date</label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker1" id="end_date" value="">
												  </div>
												</div>
											  <div class="control-group">
												<label class="control-label">Payment Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Payment Active</option>
													<option>Yes</option>
													<option>No</option>
												  </select>
												</div>
											  </div>
											   <div class="control-group">
												<label class="control-label">Profile Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Status</option>
													<option>Active</option>
													<option>Not Active</option>
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
										<h2><!-- <i class="icon-th"> -->Profile Details</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Profile No : </label>
												<div class="controls">
												  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">File No : </label>
												<div class="controls">
												  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Registered By * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Registerer By</option>
													<option>Parents</option>
													<option>Friend</option>
												  </select>
												</div>
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Name * : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Gender * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Gender</option>
													<option>Male</option>
													<option>Female</option>
												  </select>
												</div>
											  </div>
											  	<div class="control-group">
												  <label class="control-label" for="date_birth">Date of Birth * :</label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker" id="date_birth" value="">
												  </div>
												</div>
												
											  <div class="control-group">
												<label class="control-label">Marital Status * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Marital Status</option>
													<option>Single</option>
													<option>Widowed</option>
													<option>Divorced</option>
													<option>Annualled</option>
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
												  <input class="input-xlarge focused slider_example_1" id="focusedInput" type="time" value="">
												</div>												
											  </div>											  
											  <div class="control-group">
												<label class="control-label">Mother Tongue * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Mother Tongue</option>
													<option>Tamil</option>
													<option>Malayalam</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Religion : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="Hindu">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Caste : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="Vanniar">
												</div>												
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Dhosham : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Nakshathra * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Nakshathra</option>
													<option>Star</option>
													<option>Sun</option>
												  </select>
												</div>
												<div class="control-group">
												<label class="control-label">Luknam : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Luknam</option>
													<option>Star</option>
													<option>Sun</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Gothra : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Zodiac Sign * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Zodiac Sign</option>
													<option>Virgo</option>
													<option>Capricon</option>
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
														<select data-placeholder="Education List" class="dropdrop" id="selectError2" data-rel="chosen">
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
												<label class="control-label" for="focusedInput">Education in Detail *  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Occupation * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Occupation</option>
													<option>Admin</option>
													<option>Manager</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Employed In * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Employed In</option>
													<option>Government</option>
													<option>Not Working</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Monthly Income : </label>
												<div class="controls">
												  <input class="input-xlarge focused income-box" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  	<div class="control-group">
												<label class="control-label" for="focusedInput">Occupation in Detail *  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
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
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Resident of</option>
													<option>India</option>
													<option>Sri Lanka</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Current Country : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Current Country</option>
													<option>India</option>
													<option>Sri Lanka</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current City : </label>
												<div class="controls">
												  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current District : </label>
												<div class="controls">
												  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Communication Address  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Phone Number : </label>
												<div class="controls">
												  <input class="input-xlarge focused ph_num" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mobile Number * : </label>
												<div class="controls">
												  <input class="input-xlarge focused mob_num" id="focusedInput" type="text" value="">
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
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">In CMs</option>
													<option>140</option>
													<option>141</option>
												  </select>
												  <select data-rel="chosen" class="dropdrop">
													<option value="">In Feet</option>
													<option>5</option>
													<option>6</option>
												  </select>														  
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Weight : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Weight</option>
													<option>60</option>
													<option>65</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Body Type : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Body Type</option>
													<option>Slim</option>
													<option>Heavy</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Complexion : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Complexion</option>
													<option>Wheatish</option>
													<option>Dark</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Physical Status : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Physical Status</option>
													<option>Normal</option>
													<option>Phisically Challenged</option>
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
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Food</option>
													<option>Vegetarian</option>
													<option>Non-Vegetarian</option>
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
													  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Father's Employment * : </label>
												<div class="controls">
													  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label " for="focusedInput">Mother's Name * : </label>
												<div class="controls">
													  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Employment * : </label>
												<div class="controls">
													  <input class="input-xlarge focused alphaonly" id="focusedInput" type="text" value="">
												</div>												
											  </div>										  
											  <div class="control-group">
												<label class="control-label">Family Status * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Family Status</option>
													<option>Middle</option>
													<option>Upper Middle</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Family Type * : </label>
												<div class="controls">
												  <select data-rel="chosen" class="dropdrop">
												  	<option value="">Select Family Type</option>
													<option>Nuclear</option>
													<option>Join</option>
												  </select>
												</div>
											  </div>

											  <div class="control-group">
												<label class="control-label" for="prependedInput">No. of Brothers :</label>
												<div class="controls">
													<div class="input-prepend">
													  <span class="add-on">Elder</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="">
													  <span class="add-on">Younger</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="">
													</div>
												</div>								
											  </div>
											  <div class="control-group">
												<label class="control-label" for="prependedInput">No. of Sisters : </label>
												<div class="controls">
													<div class="input-prepend">
													  <span class="add-on">Elder</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="">
													   <span class="add-on">Younger</span><input class="span4 bro_sis" id="prependedInput" type="text" style="width: 100px" value="">
													  </div>
												</div>								
											  </div>
											  <div class="control-group">
												<label class="control-label" for="prependedInput">No. of Married Brothers : </label>
												<div class="controls">
													<div class="input-prepend">
													  <span class="add-on">Elder</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="">
													  <span class="add-on">Younger</span><input class="span4 bro_sis" id="prependedInput" type="text" style="width: 100px" value="">
													 </div>
												</div>								
											  </div>
											  <div class="control-group">
												<label class="control-label" for="prependedInput">No. of Married Sisters : </label>
												<div class="controls">
													<div class="input-prepend">
													  <span class="add-on">Elder</span><input class="span4 bro_sis" id="prependedInput" style="width: 100px" type="text" value="">
													  <span class="add-on">younger</span><input class="span4 bro_sis" id="prependedInput" type="text" style="width: 100px" value="">
													 </div>
												</div>								
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">More About family  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
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
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
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
												  <select data-rel="chosen" value="From" class="dropdrop">
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
												  <select data-rel="chosen" class="dropdrop">
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
												  <label class="checkbox inline">
													<input class="checks" type="checkbox" id="inlineCheckbox1" value="option1"> Single
												  </label>
												  <label class="checkbox inline">
													<input class="checks" type="checkbox" id="inlineCheckbox2" value="option2"> Widowed
												  </label>
												  <label class="checkbox inline">
													<input class="checks" type="checkbox" id="inlineCheckbox3" value="option3"> Divorced
												  </label>
												  <label class="checkbox inline">
													<input class="checks" type="checkbox" id="inlineCheckbox3" value="option3"> Annualled
												  </label>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="selectError1">Education * :</label>
												<div class="controls">
												  <select id="selectError1" multiple data-rel="chosen" class="dropdrop">
													<option>BE/BTech</option>
													<option selected>MBBS</option>
													<option>BCom</option>
													<option>BCA</option>
													<option>BSc</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Food * :</label>
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
												<label class="control-label" for="focusedInput">Personality  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
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
																		<span class="user-img"><i class="icon32 icon-plus user-img" aria-hidden="true"></i><input type="file" click-type="type2" id="picupload" class="picupload per-img-box user-img" multiple></span>
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
										<h2><!-- <i class="icon-th"> --> Image Activation</h2>	  			
									</div>
									<div class="box-content">
										<div class="form-horizontal form_reset">
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
	</div>  <!-- span10 end --></form></div>
	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
?>