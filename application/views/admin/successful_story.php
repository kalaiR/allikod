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
						<a href="#">Successful Story</a>
					</li>
				</ul>
			</div>
			<!-- Table -->
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Successful Story</h2>
						<div class="box-icon">
							<a href="#" class="btn b tn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<a class="btn btn-primary pull-right" id="add" href="<?php echo base_url(); ?>admin/add_successful_story">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Add
					    </a>
    						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Bride</th>
								  <th>Groom</th>
								  <th>Marriage Date</th>
								  <th>Active Status</th>
								  <th>Delete Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							  <?php
			                      if(!empty($successtory_values)) :
			                      $i=0;
			                      foreach ($successtory_values as $suc_val) :
			                      $i++;
	                      	  ?>
							<tr>
								<td><?php echo $suc_val['female_name']; ?></td>
								<td class="center"><?php echo $suc_val['male_name']; ?></td>
								<td class="center">
									<?php 
			                            echo date("d/m/Y", strtotime($suc_val['added_date']));
			                        ?> 
								</td>
								<td class="center">
									<span class="label label-success">
										<?php 
				                          if ($suc_val['active_status'] == 1) 
				                            echo "Activated";
				                          else
				                            echo "Not-Activated";
				                        ?>
				                    </span>
								</td>
								<td class="center">
									<span class="label label-success">
										<?php 
				                          if ($suc_val['delete_status'] == 1) 
				                            echo "Deleted";
				                          else
				                            echo "Not-Deleted";
				                        ?>
				                    </span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_successful_story/<?php echo $suc_val["successstories_id"] ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="#">
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
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
?>