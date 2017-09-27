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
						<a href="#">Galley Category</a>
					</li>
				</ul>
			</div>
			<!-- Table -->
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>Galley Category</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
						<div class="box-content">
							<a class="btn btn-primary pull-right" id="add" href="<?php echo base_url(); ?>admin/add_gallery_category">
							        <i class="glyphicon glyphicon-edit icon-white"></i>
							        Add
							    </a>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
								  <thead>
									  <tr>
										  <th>Role</th>
										  <th>Status</th>
										  <th>Actions</th>
									  </tr>
								  </thead>   
								  <tbody>
									<tr>
										<td>Kalpakkam</td>
										<td class="center">
											<span class="label label-success">Activated</span>
										</td>
										<td class="center">
											<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/edit_gallery_category">
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
										<td>Pondicherry</td>
										<td class="center">
											<span class="label label-success">Activated</span>
										</td>
										<td class="center">
											<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/edit_gallery_category">
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
										<td>Villupuram</td>
										<td class="center">
											<span class="label label-success">Activated</span>
										</td>
										<td class="center">
											<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/edit_gallery_category">
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
										<td>Tindivanam</td>
										<td class="center">
											<span class="label label-success">Activated</span>
										</td>
										<td class="center">
											<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/edit_gallery_category">
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
										<td>Thiruvannamalai</td>
										<td class="center">
											<span class="label label-success">Activated</span>
										</td>
										<td class="center">
											<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/edit_gallery_category">
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
							
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/.fluid-container-->
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