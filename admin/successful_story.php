<?php 
    include('header.php');
?>
	<div id="content" class="span11">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
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
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content row">
						<a class="btn btn-primary pull-right" id="add" href="add_successful_story.php">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Add
					    </a>
					    </div>
						<div id="table_wrapper_Datatable" style="overflow: auto;overflow-y: hidden;-ms-overflow-y: hidden;position:relative;margin-right:5px;margin-left:5px;padding-bottom: 15px;display:block;">
    						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Bride</th>
								  <th>Groom</th>
								  <th>Marriage Date</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td>Others</td>
								<td class="center">Test1</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>10th</td>
								<td class="center">Test2</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>PhD</td>
								<td class="center">Test3</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Rishabam (Taurus)</td>
								<td class="center">Test4</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Mithunam (Gemini)</td>
								<td class="center">Test5</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Mesham (Aries)</td>
								<td class="center">Test6</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Meenam (Pisces)</td>
								<td class="center">Test7</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Makara (Capricorn)</td>
								<td class="center">Test8</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Kumbha (Aquarius)</td>
								<td class="center">Test9</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Katagam (Cancer)</td>
								<td class="center">Test10</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Kanni (Virgo)</td>
								<td class="center">Test11</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
								<td>Dhanus (Sagittarius)</td>
								<td class="center">Test12</td>
								<td class="center">2012/01/01</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<!-- <a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a> -->
									<a class="btn btn-primary" href="edit_successful_story.php">
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
    include('footer.php');
?>