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
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Add Online User</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">
						<a class="btn btn-primary pull-right" id="add" href="add_successful_story.php">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Save
					    </a>
					    <a class="btn btn-primary pull-right" id="add" href="<?php echo base_url(); ?>admin/customer_user">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Cancel
					    </a>
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
										<form class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Your Email : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="email" value="">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Password : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Confirm Password : </label>
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
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
													</div>
											  	</div>
											  	<div class="control-group">
												  <label class="control-label" for="date01">Starting Date </label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker" id="date01" value="">
												  </div>
												</div>
												<div class="control-group">
												  <label class="control-label" for="date01">Ending Date</label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker" id="date01" value="">
												  </div>
												</div>
											  <div class="control-group">
												<label class="control-label">Payment Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Payment Active</option>
													<option>Yes</option>
													<option>No</option>
												  </select>
												</div>
											  </div>
											   <div class="control-group">
												<label class="control-label">Profile Active Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Status</option>
													<option>Active</option>
													<option>Not Active</option>
												  </select>
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
										<h2><!-- <i class="icon-th"> --></i> Profile Details</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Profile No : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">File No : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Registered By : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Registerer By</option>
													<option>Parents</option>
													<option>Friend</option>
												  </select>
												</div>
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Name : </label>
													<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
													</div>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Gender : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Gender</option>
													<option>Male</option>
													<option>Female</option>
												  </select>
												</div>
											  </div>
											  	<div class="control-group">
												  <label class="control-label" for="date01">Date of Birth </label>
												  <div class="controls">
													<input type="text" class="input-xlarge datepicker" id="date01" value="">
												  </div>
												</div>
												
											  <div class="control-group">
												<label class="control-label">Marital Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Marital Status</option>
													<option>Single</option>
													<option>Widowed</option>
													<option>Divorced</option>
													<option>Annualled</option>
												  </select>
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
										<h2><!-- <i class="icon-th"> --></i> Religion & Ethnicity</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Time of Birth : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="time" value="">
												</div>												
											  </div>											  
											  <div class="control-group">
												<label class="control-label">Mother Tongue : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Mother Tongue</option>
													<option>Tamil</option>
													<option>Malayalam</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Religion No : </label>
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
												<label class="control-label">Nakshathra : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Nakshathra</option>
													<option>Star</option>
													<option>Sun</option>
												  </select>
												</div>
												<div class="control-group">
												<label class="control-label">Luknam : </label>
												<div class="controls">
												  <select data-rel="chosen">
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
												<label class="control-label">Zodiac Sign : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Zodiac Sign</option>
													<option>Virgo</option>
													<option>Capricon</option>
												  </select>
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
										<h2><!-- <i class="icon-th"> --></i> Education & Occupation</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
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
												<label class="control-label" for="focusedInput">Education in Detail  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label">Occupation : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Occupation</option>
													<option>Admin</option>
													<option>Manager</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Employed In : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Employed In</option>
													<option>Government</option>
													<option>Not Working</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Monthly Income : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  	<div class="control-group">
												<label class="control-label" for="focusedInput">Occupation in Detail  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
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
										<h2><!-- <i class="icon-th"> --></i> Communication details</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Resident of : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Resident of</option>
													<option>India</option>
													<option>Sri Lanka</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Current Country : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Current Country</option>
													<option>India</option>
													<option>Sri Lanka</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current City : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current District : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
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
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mobile Number : </label>
												<div class="controls">
												  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
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
										<h2><!-- <i class="icon-th"> --></i> Physical Attributes</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
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
													<option>Slim</option>
													<option>Heavy</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Complexion : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Complexion</option>
													<option>Wheatish</option>
													<option>Dark</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Physical Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Physical Status</option>
													<option>Normal</option>
													<option>Phisically Challenged</option>
												  </select>
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
										<h2><!-- <i class="icon-th"> --></i> Habitat</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>										  
											  <div class="control-group">
												<label class="control-label">Food : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Food</option>
													<option>Vegetarian</option>
													<option>Non-Vegetarian</option>
												  </select>
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
										<h2><!-- <i class="icon-th"> --></i> Family Profile</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>
											<div class="control-group">
												<label class="control-label" for="focusedInput">Father's Name : </label>
												<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Father's Employment : </label>
												<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Name : </label>
												<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Employment : </label>
												<div class="controls">
													  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
												</div>												
											  </div>										  
											  <div class="control-group">
												<label class="control-label">Family Status : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Family Status</option>
													<option>Middle</option>
													<option>Upper Middle</option>
												  </select>
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Family Type : </label>
												<div class="controls">
												  <select data-rel="chosen">
												  	<option value="">Select Family Type</option>
													<option>Nuclear</option>
													<option>Join</option>
												  </select>
												</div>
											  </div>

											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Brothers : </label>
												<div class="controls">
													  <input class="span4" id="focusedInput"  type="text" value="Yelder" >
												</div>
												<div class="controls">
													  <input class="span4" id="focusedInput" type="text" value="Younger" >
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Sisters : </label>
												<div class="controls">
													  <input class="span4" id="focusedInput"  type="text" value="Yelder" >
												</div>
												<div class="controls">
													  <input class="span4" id="focusedInput" type="text" value="Younger" >
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Married Brothers : </label>
												<div class="controls">
													  <input class="span4" id="focusedInput"  type="text" value="Yelder" >
												</div>
												<div class="controls">
													  <input class="span4" id="focusedInput" type="text" value="Younger" >
												</div>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Married Sisters : </label>
												<div class="controls">
													  <input class="span4" id="focusedInput"  type="text" value="Yelder" >
												</div>
												<div class="controls">
													  <input class="span4" id="focusedInput" type="text" value="Younger" >
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
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
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
										<h2><!-- <i class="icon-th"> --></i> Your Personality</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>											  
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Personality  : </label>
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
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
										<h2><!-- <i class="icon-th"> --></i> Search (Expectation/Looking for</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
											<fieldset>									
												<div class="control-group">
													<label class="control-label">Age : </label>
													<div class="controls">
													  <select data-rel="chosen">
														<option value="">From</option>
														<option>25</option>
														<option>26</option>
													  </select>
													  <select data-rel="chosen">
														<option value="">To</option>
														<option>35</option>
														<option>36</option>
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
												<div class="controls">
												  <textarea class="input-xlarge focused" id="focusedInput" type="text" value="Hindu"></textarea>
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
										<h2><!-- <i class="icon-th"> --></i> Your Personality</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
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
										  </form>
										</div>
									</div>
								</div>
								<div class="row-fluid sortable">
								<div class="box span8">
									<div class="box-header well">
										<h2><!-- <i class="icon-th"> --></i> Image Activation</h2>	  			
									</div>
									<div class="box-content">
										<form class="form-horizontal">
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
										<form class="form-horizontal">
											<fieldset>											  
											  					  							  
											</fieldset>
										  </form>
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
	</div>  <!-- span10 end -->
	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
?>