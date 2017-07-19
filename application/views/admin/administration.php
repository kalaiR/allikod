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
						<a href="#">Administration</a>
					</li>
				</ul>
			</div>
			<!-- Table -->
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Admin</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a href="#admin">Admin</a></li>
							<!-- <li><a href="#selling">Selling Admin</a></li> -->
							<!-- <li><a href="#simple">Simple</a></li>
							<li><a href="#waiting">Waiting</a></li> -->
						</ul>
						 
						<div id="myTabContent" class="tab-content">
						<!-- Admin Tab Begins -->
							<div class="tab-pane active" id="admin">
								<div class="box-content">
								<a class="btn btn-primary pull-right" id="add" href="<?php echo base_url(); ?>admin/add_administration">
								        <i class="glyphicon glyphicon-edit icon-white"></i>
								        Add
								    </a>
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									  <thead>
										  <tr>
											  <th>Username</th>
											  <th>Active Status</th>
											  <th>Delete Status</th>
											  <th>Registered Date</th>
											  <th>Admin Type</th>
											  <th>Actions</th>
										  </tr>
									  </thead>   
									  <tbody>
										<?php
					                      if(!empty($admin_values)) :
					                      $i=0;
					                      foreach ($admin_values as $adm_val) :
					                      $i++;
			                      	  	?>
										<td><?php echo $adm_val['admin_username']; ?></td>
										<td class="center">
									<span class="label label-success">
										<?php 
				                          if ($adm_val['active_status'] == 1) 
				                            echo "Activated";
				                          else
				                            echo "Not-Activated";
				                        ?>
									</span>
								</td>
								<td class="center">
									<span class="label label-success">
										<?php 
				                          if ($adm_val['delete_status'] == 1) 
				                            echo "Deleted";
				                          else
				                            echo "Not-Deleted";
				                        ?>
									</span>
								</td>
								<td class="center">
									<?php 
			                            $created_datetime = explode(' ', $adm_val['admin_regdate']);
			                            echo date("d/m/Y", strtotime($created_datetime[0]))."&nbsp;&nbsp;&nbsp;".$created_datetime[1]; 
			                        ?> 
								</td>
								<td class="center">
									<span class="label label-success">
										<?php 
				                          if ($adm_val['admin_permission'] == 1) 
				                            echo "Admin";
				                          else
				                            echo "Selling Admin";
				                        ?>
									</span>
								</td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_administration/<?php echo $adm_val["admin_id"] ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<!-- <a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a> -->
									<a class="btn btn-danger btn-setting delete" href="#myModal1" data-toggle="modal" data-id="<?php echo $adm_val["admin_id"] ?>" title="Delete">
                        <i class="glyphicon glyphicon-trash icon-white"></i>
                        Delete
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
							<!-- Admin Tab Ends -->
							<!-- Selling Tab Begins -->
							<div class="tab-pane" id="selling">
								<div class="box-content">
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									  <thead>
										  <tr>
											  <th>Username</th>
											  <th>Date registered</th>
											  <th>Admin Type</th>
											  <th>User Status</th>
											  <th>Actions</th>
										  </tr>
									  </thead>
									  <tbody>
										<tr>
											<td>David R</td>
											<td class="center">2012/01/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label label-success">Activated</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/edit_administration">
													<i class="icon-edit icon-white"></i>  
													Edit                                            
												</a>
												<a class="btn btn-danger btn-setting" href="#">
													<i class="icon-trash icon-white"></i> 
													Delete
												</a>
											</td>
										</tr>
										<tr>
											<td>Chris Jack</td>
											<td class="center">2012/01/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/edit_administration">
													<i class="icon-edit icon-white"></i>  
													Edit                                            
												</a>
												<a class="btn btn-danger btn-setting" href="#">
													<i class="icon-trash icon-white"></i> 
													Delete
												</a>
											</td>
										</tr>
										<tr>
											<td>Jack Chris</td>
											<td class="center">2012/01/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/edit_administration">
													<i class="icon-edit icon-white"></i>  
													Edit                                            
												</a>
												<a class="btn btn-danger btn-setting" href="#">
													<i class="icon-trash icon-white"></i> 
													Delete
												</a>
											</td>
										</tr>
									  </tbody>
								  </table>
								</div>
							</div><!-- Selling Tab Ends -->
						</div>
					</div><!-- Tab Ends -->
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/.fluid-container-->
	</div>  <!-- span10 end -->
	<!-- external javascript
	================================================== -->
	<hr>
		<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
			<input type="hidden" name="delete" id="vId" value=""/>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Alert !</h3>
			</div>
			<div class="modal-body">
				<p>Are you sure want to delete?</p>
			</div>
			<form method="post" action="">
				<div class="modal-footer">
				<input type="hidden" name="delete" id="vId" value=""/>
					<a href="#" class="btn" data-dismiss="modal">Cancel</a>
					<a href="#" class="btn btn-danger yes_btn_act" value="Delete" id="del_link">Delete</a>
				</div>
		</div>

		 <!-- <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body delete_message_style">
                    <input type="hidden" name="delete" id="vId" value="5"/>
                        <button type="button" class="close popup_tx" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center class="popup_tx">
                            <h5>Are you sure you want to delete this item? </h5>
                        </center>
                </div>
                <div id="delete_btn" class="modal-footer footer_model_button" >
                    <a name="action" class="btn btn-danger popup_btn yes_btn_act" id="popup_btn1" value="Delete">Yes</a>                
                    <button type="button" class="btn btn-info popup_btn" id="popup_btn" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>  -->
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
?>
<script type="text/javascript" >
	$(document).on("click", ".delete", function () {
	var myId = $(this).data('id');
	$(".modal-body #vId").val( myId );
	$("#del_link").prop("href", "<?php echo $adm_val["admin_id"] ?>");
});
</script>