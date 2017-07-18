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
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-user"></i> Customer User</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
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
								<div class="box-content">
									<!-- <a class="btn btn-info pull-right" id="add" href="<?php //echo base_url(); ?>admin/add_online_user">
								        <i class="glyphicon glyphicon-edit icon-white"></i>
								        Add Online User
								    </a> -->
								    <a class="btn btn-info pull-right" id="add" href="<?php echo base_url(); ?>admin/add_online_user">
								        <i class="glyphicon glyphicon-edit icon-white"></i>
								        Add Simple User
								    </a>
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
					                      	if($cus_val['user_online_or_simple'] == 'online'):
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
												<a class="btn btn-warning" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
													<i class="icon-refresh icon-white" title="Renew"></i>  
												</a>
													<a class="btn btn-success" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-zoom-in icon-white" title="View"></i>  
												</a>
													<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_customer_user">
														<i class="icon-edit icon-white" title="Edit"></i>  
												</a>
													<a class="btn btn-danger btn-setting" href="#">
														<i class="icon-trash icon-white" title="Delete"></i> 
												</a>
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
					                      	if($cus_val['user_online_or_simple'] == 'simple'):
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
												<a class="btn btn-warning" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
													<i class="icon-refresh icon-white" title="Renew"></i>  
												</a>
													<a class="btn btn-success" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-zoom-in icon-white" title="View"></i>  
												</a>
													<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_customer_user">
														<i class="icon-edit icon-white" title="Edit"></i>  
												</a>
													<a class="btn btn-danger btn-setting" href="#">
														<i class="icon-trash icon-white" title="Delete"></i> 
												</a>
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
												<a class="btn btn-warning" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
													<i class="icon-refresh icon-white" title="Renew"></i>  
												</a>
													<a class="btn btn-success" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-zoom-in icon-white" title="View"></i>  
												</a>
													<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_customer_user">
														<i class="icon-edit icon-white" title="Edit"></i>  
												</a>
													<a class="btn btn-danger btn-setting" href="#">
														<i class="icon-trash icon-white" title="Delete"></i> 
												</a>
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