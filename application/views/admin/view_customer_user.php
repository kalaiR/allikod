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
											  <?php 
											  // echo "<pre>";
											  // print_r($customeruser_values); 
											  // echo "<pre>";
											  ?>
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
												<label class="control-label" for="focusedInput"><?php echo $customeruser_values['user_online_or_simple']; ?> </label>												
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
												<label class="control-label" for="focusedInput">Payment Type : </label>
												<label class="control-label" for="focusedInput">
													<?php 
													if(!empty($customeruser_values['payment_type'])):
														foreach (unserialize(PAYMENT_TYPE) as $key => $val):
															if($customeruser_values['payment_type'] == $key):
																echo $val; 
															endif;
														endforeach; 
													else:
														echo "--";
													endif;
													?>
												</label>
											  </div>
											  <div class="control-group">
													<label class="control-label" for="focusedInput">Period in Months :</label>
													<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['period_in_month'])) echo $customeruser_values['period_in_month']; else echo "--"; ?></label>
												</div>
											  	<div class="control-group">
												  <label class="control-label" for="date01">Starting Date : </label>
												  <label class="control-label" for="date01"><?php if(!empty($customeruser_values['startdate'])) echo date("d/m/Y", strtotime($customeruser_values['startdate'])); else echo "--"; ?> </label>
												</div>
												<div class="control-group">
												  <label class="control-label" for="date01">Ending Date :</label>
												  <label class="control-label" for="date01"><?php if(!empty($customeruser_values['endate'])) echo date("d/m/Y", strtotime($customeruser_values['endate'])); else echo "--"; ?> </label>
												</div>
											  <div class="control-group">
												<label class="control-label">Payment Active Status : </label>
												<label class="control-label" for="focusedInput">
													<?php 
							                          if ($customeruser_values['payment_status'] == 1) 
							                            echo "Paid";
							                          else
							                            echo "Not Paid";
							                        ?>   </label>
												</div>
											   <div class="control-group">
												<label class="control-label">Profile Active Status : </label>
												<label class="control-label" for="focusedInput">
													<?php 
							                          if ($customeruser_values['user_active_status'] == 1) 
							                            echo "Activated";
							                          else
							                            echo "Not-Activated";
							                        ?>  </label>
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
												<label class="control-label" for="focusedInput">Religion No : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['rel_religion'])) echo $customeruser_values['rel_religion']; else echo "--"; ?></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Caste : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['rel_caste'])) echo $customeruser_values['rel_caste']; else echo "--"; ?></label>
											  </div>
											  	<div class="control-group">
													<label class="control-label" for="focusedInput">Dhosham : </label>
													<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['rel_dhosham'])) echo $customeruser_values['rel_dhosham']; else echo "--"; ?></label>
											  	</div>
											  	<div class="control-group">
												<label class="control-label">Nakshathra : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['nakshathra_name'])) echo $customeruser_values['nakshathra_name']; else echo "--"; ?></label>
												</div>
												<div class="control-group">
												<label class="control-label">Luknam : </label>
												<label class="control-label" for="focusedInput"><?php if(!empty($customeruser_values['luknam_name'])) echo $customeruser_values['luknam_name']; else echo "--"; ?></label>
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
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Current Country : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current City : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Current District : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Communication Address  : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Phone Number : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mobile Number : </label>
												<label class="control-label" for="focusedInput"></label>
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
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Weight : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Body Type : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Complexion : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Physical Status : </label>
												<label class="control-label" for="focusedInput"></label>
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
												<label class="control-label" for="focusedInput"></label>
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
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Father's Employment : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Name : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Mother's Employment : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>										  
											  <div class="control-group">
												<label class="control-label">Family Status : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Family Type : </label>
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput"></label>
												<label style="width: 100px" class="control-label" for="focusedInput">Elder</label>
												<label style="width: 100px" class="control-label" for="focusedInput">Younger</label>					
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Brothers : </label>
												<label style="width: 100px" class="control-label" for="focusedInput">0</label>
												<label style="width: 100px" class="control-label" for="focusedInput">0</label>										
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Sisters : </label>
												<label style="width: 100px" class="control-label" for="focusedInput">0</label>
												<label style="width: 100px" class="control-label" for="focusedInput">0</label>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Married Brothers : </label>
												<label style="width: 100px" class="control-label" for="focusedInput">0</label>
												<label style="width: 100px" class="control-label" for="focusedInput">0</label>												
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">No. of Married Sisters : </label>
												<label style="width: 100px" class="control-label" for="focusedInput">0</label>
												<label style="width: 100px" class="control-label" for="focusedInput">0</label>												
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
												<label class="control-label" for="focusedInput"></label>
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
												<label class="control-label" for="focusedInput"></label>
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
												<label class="control-label" for="focusedInput">Age : </label>
												<label class="control-label" for="focusedInput">From 25</label>
												<label class="control-label" for="focusedInput">To 28</label>												
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
												<label class="control-label" for="focusedInput"></label>
											  </div>
											  <div class="control-group">
												<label class="control-label">Food :</label>
												<label class="control-label" for="focusedInput"></label>
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
												<label class="control-label" for="focusedInput"></label>
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
												  <label class="control-label" for="focusedInput"></label>
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
												<label class="control-label" for="focusedInput"></label>
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
                                              <!-- </div>  -->
                                             </div>     
										</div> <!-- box content Ends -->
									</div>
								</div>
								<div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button>						
							  </div>            
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