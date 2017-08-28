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
						<a href="#">Customer User</a>
					</li>
				</ul>
			</div>
			<!-- Hidden Search Div Begins -->
			<div class="row-fluid sortable slidingDiv">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-zoom-in"></i> Search</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                  	<div class="row-fluid">
                        <div class="span4">
                        	<form class="form-horizontal">
								<fieldset>
									<div class="control-group">
										<label class="control-label">Gender</label>
										<div class="controls">
										  <label class="radio">
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
											Male
										  </label>
										  <div style="clear:both"></div>
										  <label class="radio">
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											Female
										  </label>
										</div>
								  </div>	  
								  <div class="control-group">
									<label class="control-label">Age : </label>
									<div class="controls">
									  <select data-rel="chosen" style="width: 75px">
										<option value="">From</option>
										<option>25</option>
										<option>26</option>
									  </select>
									  <select data-rel="chosen" style="width: 75px">
										<option value="">To</option>
										<option>35</option>
										<option>36</option>
									  </select>
									</div>
								  </div>
								  <div class="control-group">
									<label class="control-label" for="focusedInput">Vallikodi ID</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" type="text" style="width: 150px">
									</div>
								  </div>
								 </fieldset>
							</form>
                        </div>
                        <div class="span4">
                        	<form class="form-horizontal">
								<fieldset>
									<div class="control-group">
									<label class="control-label" for="focusedInput">Name</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" type="text" style="width: 150px">
									</div>
								  </div>
								  <div class="control-group">
									<label class="control-label" for="focusedInput">Reg ID</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" type="text" style="width: 150px">
									</div>
								  </div>
								  <div class="control-group">
									  <label class="control-label" for="date01">DOB</label>
									  <div class="controls">
										<input type="text" class="input-xlarge datepicker" id="date01" style="width: 150px" value="02/16/12">
									  </div>
									</div>
								 </fieldset>
							</form>
                        </div>
                        <div class="span4">
                        	<form class="form-horizontal">
								<fieldset>
									<div class="control-group">
									<label class="control-label" for="focusedInput">Profile</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" type="text"  style="width: 150px">
									</div>
								  </div>
								  <div class="control-group">
									<label class="control-label" for="focusedInput">File No ID</label>
									<div class="controls">
									  <input class="input-xlarge focused" id="focusedInput" type="text"  style="width: 150px">
									</div>
								  </div>
								  <div class="control-group">
									<a style="margin-right: 15px" class="btn btn-primary pull-right" id="add" href="#">
								        <i class="glyphicon glyphicon-edit icon-white"></i>
								        Search
								    </a>
								  </div>
								 </fieldset>
							</form>
                        </div>
                    </div>                   
                  </div>
				</div><!--/span-->
			</div><!--/row-->
			<!-- Hidden Search Div Begins -->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-user"></i> Customer User</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a href="#view">View</a></li>
							<li><a href="#online">Online</a></li>
							<li><a href="#simple">Simple</a></li>
							<li><a href="#waiting">Waiting</a></li>
						</ul>						 
						<div id="myTabContent" class="tab-content">
							<!-- View Tab Begins -->
							<div class="tab-pane active" id="view">
								<div class="box-content row">
									<!-- <a class="btn btn-info pull-right" id="add" href="<?php //echo base_url(); ?>admin/add_online_user">
								        <i class="glyphicon glyphicon-edit icon-white"></i>
								        Add Online User
								    </a> -->
								    <a class="btn btn-primary pull-right" id="add" href="<?php echo base_url(); ?>admin/add_online_user">
								        <i class="glyphicon glyphicon-edit icon-white"></i>
								        Add Online User
								    </a>
								    <div class="control-group pull-left">
										<label class="control-label" for="selectError3"></label>
										<div class="controls">
										  <select id="selectError3" style="float: left; width: 80px">
											<option>Active</option>
											<option>Inactive</option>
											<option>Delete</option>
										</select>
										  	<a class="btn btn-primary search_customer" id="search" href="#" style="float: left; margin-left: 5px;">
									        <i class="glyphicon glyphicon-edit icon-white"></i>
									        Search
									    	</a>
										</div>										
									</div>
								</div>
								<div id="table_wrapper_Datatable" style="overflow: auto;overflow-y: hidden;-ms-overflow-y: hidden;position:relative;margin-right:5px;padding-bottom: 15px;display:block;">
									<table class="table table-striped table-bordered bootstrap-datatable datatable" id="cd-grid">
									  <thead>
										  <tr>
											  <th><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span>
											  </th>
											  <th>No</th>
											  <th>Vallikodi ID</th>
											  <!-- <th>Profile ID</th> -->		  
											  <th>Name</th>
											  <th>Mail</th>
											  <!-- <th>Profile <br>Viewed</th> -->
											  <!-- <th>Reg. <br>By</th> -->
											  <th>User <br>Type</th>
											  <th>Profile Status</th>
											  <th>Payment Status</th>
											  <th>Reg. <br>Date</th>	  
											  <th>Action</th>
										  </tr>
									  </thead>   
									  <tbody>
									  	<?php
						                      if(!empty($customeruser_values)) :
						                      // echo "<pre>";
						                      // print_r($customeruser_values);
						                      // echo "</pre>";
						                      $i=0;
						                      foreach ($customeruser_values as $cus_val) :
						                      $i++;
			                      	    ?>
										<tr>
											<td><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span></td>
											<td class="center"><?php echo $i; ?></td>
											<td class="center"><?php echo "VM".$cus_val['userdetail_id']; ?></td>
											<!-- <td class="center">259</td> -->
											<td class="center"><?php echo $cus_val['user_fname']; ?></td>
											<td class="center"><?php echo $cus_val['user_email']; ?></td>
											<!-- <td class="center">
												<?php //echo "self"; ?>
											</td> -->
											<!-- <td class="center">0 / 60</td> -->
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['user_online_or_simple'] == 'online') 
							                            echo "Online";
							                          else
							                            echo "Simple";
							                        ?>  
												</span>
											</td>
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['user_active_status'] == 1) 
							                            echo "Activated";
							                          else
							                            echo "Not-Activated";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['payment_status'] == 1) 
							                            echo "Paid";
							                          else
							                            echo "Not Paid";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<?php 
						                            $created_datetime = explode(' ', $cus_val['user_added_date']);
						                            echo date("d/m/Y", strtotime($created_datetime[0]))."&nbsp;&nbsp;&nbsp;".$created_datetime[1]; 
						                        ?>
											</td>											
											<td class="center">
												<div style="width: 193px;">
													<a class="btn btn-warning" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-refresh icon-white" title="Renew"></i>  
													</a>
													<a class="btn btn-primary cboxElement"  href="http://libertyshoewarehouse.com/mt-content/uploads/2016/12/comingsoon.png">
														<i class="icon-picture icon-white" title="Image"></i> 
													</a>
													<a class="btn btn-success" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-zoom-in icon-white" title="View"></i>  
													</a>
													<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-edit icon-white" title="Edit"></i>  
													</a>
													<a class="btn btn-danger btn-setting" href="#">
														<i class="icon-trash icon-white" title="Delete"></i> 
													</a>
												</div>
											</td>
										</tr>
										<?php
					                      endforeach;
					                      endif;
					                     ?>						
									  </tbody>
								  </table>
								</div>
							</div>
							<!-- View Tab Ends -->
							<!-- Online Tab Begins -->
							<div class="tab-pane" id="online">
								<div class="box-content">
								</div>
								<div id="table_wrapper_Datatable" style="overflow: auto;overflow-y: hidden;-ms-overflow-y: hidden;position:relative;margin-right:5px;padding-bottom: 15px;display:block;">
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									  <thead>
										  <tr>
											  <th><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span>
											  </th>
											  <th>No</th>
											  <th>Vallikodi ID</th>
											  <!-- <th>Profile ID</th> -->		  
											  <th>Name</th>
											  <th>Mail</th>
											  <!-- <th>Profile <br>Viewed</th> -->
											  <!-- <th>Reg. <br>By</th> -->
											  <th>DOB</th>
											  <th>Profile Status</th>
											  <th>Payment Status</th>
											  <th>Reg. <br>Date</th>	  
											  <th>Action</th>
										  </tr>
									  </thead>   
									  <tbody>
									  	<?php
					                      if(!empty($customeruser_values)) :
					                      // echo "<pre>";
					                      // print_r($customeruser_values);
					                      // echo "</pre>";
					                      $i=0;
					                      foreach ($customeruser_values as $cus_val) :
					                      	if(strtolower($cus_val['user_online_or_simple']) == 'online'):
					                      		$i++;
			                      	    ?>
										<tr>											
											<td><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span></td>
											<td class="center"><?php echo $i; ?></td>
											<td class="center"><?php echo "VM".$cus_val['userdetail_id']; ?></td>
											<!-- <td class="center">259</td> -->
											<td class="center"><?php echo $cus_val['user_fname']; ?></td>
											<td class="center"><?php echo $cus_val['user_email']; ?></td>
											<!-- <td class="center">
												<?php //echo "self"; ?>
											</td> -->
											<td class="center">
												<?php 
						                            echo date("d/m/Y", strtotime($cus_val['user_dob'])); 
						                        ?>
						                    </td>
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['user_active_status'] == 1) 
							                            echo "Activated";
							                          else
							                            echo "Not-Activated";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['payment_status'] == 1) 
							                            echo "Paid";
							                          else
							                            echo "Not Paid";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<?php 
						                            $created_datetime = explode(' ', $cus_val['user_added_date']);
						                            echo date("d/m/Y", strtotime($created_datetime[0]))."&nbsp;&nbsp;&nbsp;".$created_datetime[1]; 
						                        ?>
											</td>										
											<td class="center">
											<div style="width: 160px;">
												<a class="btn btn-warning" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
													<i class="icon-refresh icon-white" title="Renew"></i>  
												</a>
													<a class="btn btn-success" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-zoom-in icon-white" title="View"></i>  
												</a>
													<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-edit icon-white" title="Edit"></i>  
												</a>
													<a class="btn btn-danger btn-setting" href="#">
														<i class="icon-trash icon-white" title="Delete"></i> 
												</a>
											</div>
											</td>
										</tr>
										<?php
											endif;
					                      endforeach;
					                      endif;
					                    ?>							
									  </tbody>
								  </table>
								</div>
							</div>
							<!-- Online Tab Ends -->
							<!-- Simple Tab Begins -->
							<div class="tab-pane" id="simple">
								<div class="box-content">
								</div>
								<div id="table_wrapper_Datatable" style="overflow: auto;overflow-y: hidden;-ms-overflow-y: hidden;position:relative;margin-right:5px;padding-bottom: 15px;display:block;">
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									  <thead>
										  <tr>
											   <th><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span>
											  </th>
											  <th>No</th>
											  <th>Vallikodi ID</th>
											  <!-- <th>Profile ID</th> -->		  
											  <th>Name</th>
											  <th>Mail</th>
											  <!-- <th>Profile <br>Viewed</th> -->
											  <!-- <th>Reg. <br>By</th> -->
											  <th>DOB</th>
											  <th>Profile Status</th>
											  <th>Payment Status</th>
											  <th>Reg. <br>Date</th>	  
											  <th>Action</th>
										  </tr>
									  </thead>   
									  <tbody>
									  	<?php
					                      if(!empty($customeruser_values)) :
					                      // echo "<pre>";
					                      // print_r($customeruser_values);
					                      // echo "</pre>";
					                      $i=0;
					                      foreach ($customeruser_values as $cus_val) :
					                      	if(strtolower($cus_val['user_online_or_simple']) == 'simple'):
					                      		$i++;
			                      	    ?>
										<tr>											
											<td><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span></td>
											<td class="center"><?php echo $i; ?></td>
											<td class="center"><?php echo "VM".$cus_val['userdetail_id']; ?></td>
											<!-- <td class="center">259</td> -->
											<td class="center"><?php echo $cus_val['user_fname']; ?></td>
											<td class="center"><?php echo $cus_val['user_email']; ?></td>
											<!-- <td class="center">
												<?php //echo "self"; ?>
											</td> -->
											<td class="center">
												<?php 
						                            echo date("d/m/Y", strtotime($cus_val['user_dob'])); 
						                        ?>
						                    </td>
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['user_active_status'] == 1) 
							                            echo "Activated";
							                          else
							                            echo "Not-Activated";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['payment_status'] == 1) 
							                            echo "Paid";
							                          else
							                            echo "Not Paid";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<?php 
						                            $created_datetime = explode(' ', $cus_val['user_added_date']);
						                            echo date("d/m/Y", strtotime($created_datetime[0]))."&nbsp;&nbsp;&nbsp;".$created_datetime[1]; 
						                        ?>
											</td>										
											<td class="center">
											<div style="width: 160px;">
												<a class="btn btn-warning" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
													<i class="icon-refresh icon-white" title="Renew"></i>  
												</a>
													<a class="btn btn-success" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-zoom-in icon-white" title="View"></i>  
												</a>
													<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-edit icon-white" title="Edit"></i>  
												</a>
													<a class="btn btn-danger btn-setting" href="#">
														<i class="icon-trash icon-white" title="Delete"></i> 
												</a>
											</div>
											</td>
										</tr>
										<?php
											endif;
					                      endforeach;
					                      endif;
					                    ?>							
									  </tbody>
								  </table>
								</div> <!-- End of box content -->
							</div>
							<!-- Simple Tab Ends -->
							<!-- Waiting Tab Begins -->
							<div class="tab-pane" id="waiting">
								<div class="box-content">
								</div>
								<div id="table_wrapper_Datatable" style="overflow: auto;overflow-y: hidden;-ms-overflow-y: hidden;position:relative;margin-right:5px;padding-bottom: 15px;display:block;">								
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									  <thead>
										  <tr>
											   <th><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span>
											  </th>
											  <th>No</th>
											  <th>Vallikodi ID</th>
											  <!-- <th>Profile ID</th> -->		  
											  <th>Name</th>
											  <th>Mail</th>
											  <!-- <th>Profile <br>Viewed</th> -->
											  <!-- <th>Reg. <br>By</th> -->
											  <th>DOB</th>
											  <th>Profile Status</th>
											  <th>Payment Status</th>
											  <!-- <th>Reg. <br>Date</th>	   -->
											  <th>Action</th>
										  </tr>
									  </thead>   
									  <tbody>
									  	<?php
					                      if(!empty($customeruser_values)) :
					                      // echo "<pre>";
					                      // print_r($customeruser_values);
					                      // echo "</pre>";
					                      $i=0;
					                      foreach ($customeruser_values as $cus_val) :
					                      	if($cus_val['user_active_status'] == 0):
					                      		$i++;
			                      	    ?>
										<tr>											
											<td><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span></td>
											<td class="center"><?php echo $i; ?></td>
											<td class="center"><?php echo "VM".$cus_val['userdetail_id']; ?></td>
											<!-- <td class="center">259</td> -->
											<td class="center"><?php echo $cus_val['user_fname']; ?></td>
											<td class="center"><?php echo $cus_val['user_email']; ?></td>
											<!-- <td class="center">
												<?php //echo "self"; ?>
											</td> -->
											<td class="center">
												<?php 
						                            echo date("d/m/Y", strtotime($cus_val['user_dob'])); 
						                        ?>
						                    </td>
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['user_active_status'] == 1) 
							                            echo "Activated";
							                          else
							                            echo "Not-Activated";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<span class="label label-success">
													<?php 
							                          if ($cus_val['payment_status'] == 1) 
							                            echo "Paid";
							                          else
							                            echo "Not Paid";
							                        ?>    	
				                        		</span>
											</td>
																				
											<td class="center">
											<div style="width: 160px;">
												<a class="btn btn-warning" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
													<i class="icon-refresh icon-white" title="Renew"></i>  
												</a>
													<a class="btn btn-success" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-zoom-in icon-white" title="View"></i>  
												</a>
													<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-edit icon-white" title="Edit"></i>  
												</a>
													<a class="btn btn-danger btn-setting" href="#">
														<i class="icon-trash icon-white" title="Delete"></i> 
												</a>
											</div>
											</td>
										</tr>
										<?php
											endif;
					                      endforeach;
					                      endif;
					                    ?>							
									  </tbody>
								  </table>
								</div> <!-- End of box content -->
							</div>
							<!-- Waiting Tab Ends -->
						</div>
					</div>
				</div>
			<!-- Table -->
		</div>  <!-- span10 end -->
	<!-- external javascript
	================================================== -->
	<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Alert !</h3>
			</div>
			<div class="modal-body">
				<p>Are you sure want to delete?</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancel</a>
				<a href="#" class="btn btn-danger">Delete</a>
			</div>
		</div>
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
?>
<script type= 'text/javascript'>
    // $(document).ready(function () {
    //     $('#cd-grid').DataTable({
    //         "processing": true,
    //         "serverSide": true,
    //         "ajax": admin_baseurl."cd_list"
    //     });
    // });
</script>
