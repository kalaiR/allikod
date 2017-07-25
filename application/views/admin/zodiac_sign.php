<?php 
	$user_session = $this->session->userdata("admin_login_status");
    if (!empty($user_session)):
    	include('templates/header.php');
?>
	<div id="content" class="span11">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>index.php/admin">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Zodiac Sign</a>
					</li>
				</ul>
			</div>
			<!-- Table -->
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Zodiac Sign</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<a class="btn btn-primary pull-right" id="add" href="<?php echo base_url(); ?>index.php/admin/add_zodiac_sign">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Add
					    </a>
    						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Zodiac Sign</th>
								  <th>Active Status</th>
								  <th>Delete Status</th>
								  <th>Added Date</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							  <?php
			                      if(!empty($zodiac_values)) :
			                      $i=0;
			                      foreach ($zodiac_values as $zod_val) :
			                      $i++;
	                      	  ?>
							<tr>
								<td><?php echo $zod_val['name']; ?></td>
								<td class="center">
									<span class="label label-success">
										<?php 
				                          if ($zod_val['active_status'] == 1) 
				                            echo "Activated";
				                          else
				                            echo "Not-Activated";
				                        ?>
									</span>
								</td>
								<td class="center">
									<span class="label label-success">
										<?php 
				                          if ($zod_val['delete_status'] == 1) 
				                            echo "Deleted";
				                          else
				                            echo "Not-Deleted";
				                        ?>
									</span>
								</td>
								<td class="center">
									<?php 
			                            $created_datetime = explode(' ', $zod_val['added_date']);
			                            echo date("d/m/Y", strtotime($created_datetime[0]))."&nbsp;&nbsp;&nbsp;".$created_datetime[1]; 
			                        ?> 
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/edit_zodiac_sign/<?php echo $zod_val["zodiacsign_id"] ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger btn-setting" href="#">
										<i class="icon-trash icon-white"></i> 
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
    else :
	redirect(base_url().'index.php/admin');
	endif;
?>