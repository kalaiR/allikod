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
							<li class="active"><a href="#info">Info</a></li>
							<li><a href="#custom">Custom</a></li>
							<li><a href="#messages">Messages</a></li>
							<li><a href="#messages">Messages</a></li>
						</ul>
						 
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane active" id="info">
								<h3>Charisma <small>a fully featued template</small></h3>
								<p>Its a fully featured, responsive template for your admin panel. Its optimized for tablet and mobile phones. Scan the QR code below to view it in your mobile device.</p> <img alt="QR Code" class="charisma_qr center" src="img/qrcode136.png" />
							</div>
							<div class="tab-pane" id="custom">
								<h3>Custom <small>small text</small></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
							</div>
							<div class="tab-pane" id="messages">
								<div class="box-content">
								<a class="btn btn-info pull-right" id="add" href="add_customer_user.php">
								        <i class="glyphicon glyphicon-edit icon-white"></i>
								        Add
								    </a>
									<table class="table table-striped table-bordered bootstrap-datatable datatable">
									  <thead>
										  <tr>
											  <th><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span>
											  </th>
											  <th>No</th>
											  <th>Vallikodi ID</th>
											  <th>Profile ID</th>
											  <th>Reg. Date</th>
											  <th>Name</th>
											  <th>Mail</th>
											  <th>No.of profile Viewed</th>
											  <th>Reg. From</th>
											  <th>User Type</th>
											  <th>Profile</th>
											  <th>Payment</th>
											  
											  <th>Action</th>
										  </tr>
									  </thead>   
									  <tbody>
										<tr>
											<td><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span></td>
											<td class="center">1</td>
											<td class="center">66699</td>
											<td class="center">259</td>
											<td class="center">21-June-2017</td>
											<td class="center">Madhivanan</td>
											<td class="center">v.madhivanan@gmail.com</td>
											<td class="center">0 / 60</td>
											<td class="center">
												<span class="label label-success">CUSTOMER</span>
											</td>
											<td class="center">
												<span class="label label-success">Online</span>
											</td>
											<td class="center">
												<span class="label label-success">Activated</span>
											</td>
											<td class="center">
												<span class="label label-success">Paid</span>
											</td>
											
											<td class="center">
												<a class="btn btn-warning" href="#">
													<i class="icon-refresh icon-white"></i>  
													Renew                                            
												</a>
												<a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a>
												<a class="btn btn-info" href="edit_customer_user.php">
													<i class="icon-edit icon-white"></i>  
													Edit                                            
												</a>
												<a class="btn btn-danger" href="#">
													<i class="icon-trash icon-white"></i> 
													Delete
												</a>
											</td>
										</tr>
										<tr>
											<td><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span></td>
											<td class="center">1</td>
											<td class="center">66698</td>
											<td class="center">269</td>
											<td class="center">21-June-2017</td>
											<td class="center">Madhi</td>
											<td class="center">madhi_vanan@yahoo.co.in</td>
											<td class="center">1 / 60</td>
											<td class="center">
												<span class="label label-success">CUSTOMER</span>
											</td>
											<td class="center">
												<span class="label label-success">Online</span>
											</td>
											<td class="center">
												<span class="label label-success">Activated</span>
											</td>
											<td class="center">
												<span class="label label-success">Paid</span>
											</td>
											
											<td class="center">
												<li id="image-2" class="thumbnail">
											<a title="Sample Image 2" href="img/gallery/2.jpg"><img src="img/logo20.png" alt="Sample Image 2"></a>
										</li>
												<a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a>
												<a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a>
												<a class="btn btn-info" href="edit_customer_user.php">
													<i class="icon-edit icon-white"></i>  
													Edit                                            
												</a>
												<a class="btn btn-danger" href="#">
													<i class="icon-trash icon-white"></i> 
													Delete
												</a>
											</td>
										</tr>							
									  </tbody>
								  </table>
								</div> <!-- End of box content -->
							</div>
						</div>
					</div>
				</div>
			<!-- Table -->
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Customer User</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<a class="btn btn-info pull-right" id="add" href="add_customer_user.php">
					        <i class="glyphicon glyphicon-edit icon-white"></i>
					        Add
					    </a>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span>
								  </th>
								  <th>No</th>
								  <th>Vallikodi ID</th>
								  <th>Profile ID</th>
								  <th>Reg. Date</th>
								  <th>Name</th>
								  <th>Mail</th>
								  <th>No.of profile Viewed</th>
								  <th>Reg. From</th>
								  <th>User Type</th>
								  <th>Profile</th>
								  <th>Payment</th>
								  <th>Renewal</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span></td>
								<td class="center">1</td>
								<td class="center">66699</td>
								<td class="center">259</td>
								<td class="center">21-June-2017</td>
								<td class="center">Madhivanan</td>
								<td class="center">v.madhivanan@gmail.com</td>
								<td class="center">0 / 60</td>
								<td class="center">
									<span class="label label-success">CUSTOMER</span>
								</td>
								<td class="center">
									<span class="label label-success">Online</span>
								</td>
								<td class="center">
									<span class="label label-success">Activated</span>
								</td>
								<td class="center">
									<span class="label label-success">Paid</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-white"></i>  
										Renewal                                            
									</a>
								</td>
								<td class="center">
									<li id="image-2" class="thumbnail">
								<a title="Sample Image 2" href="img/gallery/2.jpg"><img src="img/logo20.png" alt="Sample Image 2"></a>
							</li>
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="edit_customer_user.php">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							<tr>
								<td><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span></td>
								<td class="center">1</td>
								<td class="center">66698</td>
								<td class="center">269</td>
								<td class="center">21-June-2017</td>
								<td class="center">Madhi</td>
								<td class="center">madhi_vanan@yahoo.co.in</td>
								<td class="center">1 / 60</td>
								<td class="center">
									<span class="label label-success">CUSTOMER</span>
								</td>
								<td class="center">
									<span class="label label-success">Online</span>
								</td>
								<td class="center">
									<span class="label label-success">Activated</span>
								</td>
								<td class="center">
									<span class="label label-success">Paid</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-white"></i>  
										Renewal                                            
									</a>
								</td>
								<td class="center">
									<li id="image-2" class="thumbnail">
								<a title="Sample Image 2" href="img/gallery/2.jpg"><img src="img/logo20.png" alt="Sample Image 2"></a>
							</li>
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="edit_customer_user.php">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="#">
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
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('footer.php');
?>