<?php 
	$user_session = $this->session->userdata("admin_login_status");
    if (!empty($user_session)):
    	include('templates/header.php');
?>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">		
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			<div class="sortable row-fluid">
				<a data-rel="tooltip" class="well span3 top-block" href="<?php echo base_url(); ?>admin/administration">
					<span class="icon32 icon-red icon-user"></span>
					<div>Administrator</div>
					<!-- <div>507</div> -->
					<!-- <span class="notification">6</span> -->
				</a>

				<a data-rel="tooltip" class="well span3 top-block" href="<?php echo base_url(); ?>admin/report">
					<span class="icon32 icon-orange icon-document"></span>
					<div>Report</div>
					<!-- <div>228</div> -->
					<!-- <span class="notification green">4</span> -->
				</a>

				<a data-rel="tooltip" class="well span3 top-block" href="<?php echo base_url(); ?>admin/customer_user">
					<span class="icon32 icon-green icon-users"></span>
					<div>Customer</div>
					<!-- <div>$13320</div> -->
					<!-- <span class="notification yellow">$34</span> -->
				</a>
				
				<a data-rel="tooltip" class="well span3 top-block" href="<?php echo base_url(); ?>admin/successful_story">
					<span class="icon32 icon-blue icon-book"></span>
					<div>Success Story</div>
					<!-- <div>25</div> -->
					<!-- <span class="notification red">12</span> -->
				</a>
			</div>
			<div class="sortable row-fluid">
				<a data-rel="tooltip" class="well span3 top-block" href="<?php echo base_url(); ?>admin">
					<span class="icon32 icon-blue icon-envelope-closed"></span>
					<div>Mail</div>
					<!-- <div>507</div> -->
					<!-- <span class="notification">6</span> -->
				</a>

				<a data-rel="tooltip" class="well span3 top-block" href="<?php echo base_url(); ?>admin">
					<span class="icon32 icon-green icon-image"></span>
					<div>Photo Gallry</div>
					<!-- <div>228</div> -->
					<!-- <span class="notification green">4</span> -->
				</a>

				<a data-rel="tooltip" class="well span3 top-block" href="<?php echo base_url(); ?>admin/zodiac_sign">
					<span class="icon32 icon-red icon-gear"></span>
					<div>Master Data Settings</div>
					<!-- <div>$13320</div> -->
					<!-- <span class="notification yellow">$34</span> -->
				</a>
			</div>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i> User Details</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<div class="row-fluid show-grid">
							<div class="span3" style="color: green;">Name</div>
							<div class="span3" style="color: green;">All User</div>
							<div class="span3" style="color: green;">Active</div>
							<div class="span3" style="color: green;">InActive</div>
						</div>
						<div class="row-fluid show-grid">
							<div class="span3">Online Registration</div>
							<div class="span3"><?php echo $user_results['all_onlineuser']; ?></div>
							<div class="span3"><?php echo $user_results['active_onlineuser']; ?></div>
							<div class="span3"><?php echo $user_results['inactive_onlineuser']; ?></div>
						</div>
						<div class="row-fluid show-grid">
							<div class="span3">Simple Registration</div>
							<div class="span3"><?php echo $user_results['all_simpleuser']; ?></div>
							<div class="span3"><?php echo $user_results['active_simpleuser']; ?></div>
							<div class="span3"><?php echo $user_results['inactive_simpleuser']; ?></div>		
						</div>
						<div class="row-fluid show-grid">
							<div class="span3">Total No. of Registration</div>
							<div class="span3"><?php echo $user_results['total_user']; ?></div>
							<div class="span3"><?php echo $user_results['total_activeuser']; ?></div>
							<div class="span3"><?php echo $user_results['total_inactiveuser']; ?></div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
					
			<!-- <div class="row-fluid sortable">
				<div class="box span4">
					<div class="box-header well">
						<h2><i class="icon-th"></i> Tabs</h2>
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
								<h3>Messages <small>small text</small></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
							</div>
						</div>
					</div>
				</div><!--/span-->
						
				<!-- <div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Member Activity</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="box-content">
							<ul class="dashboard-list">
								<li>
									<a href="#">
										<img class="dashboard-avatar" alt="Usman" src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50"></a>
										<strong>Name:</strong> <a href="#">Usman
									</a><br>
									<strong>Since:</strong> 17/05/2012<br>
									<strong>Status:</strong> <span class="label label-success">Approved</span>                                  
								</li>
								<li>
									<a href="#">
										<img class="dashboard-avatar" alt="Sheikh Heera" src="http://www.gravatar.com/avatar/3232415a0380253cfffe19163d04acab.png?s=50"></a>
										<strong>Name:</strong> <a href="#">Sheikh Heera
									</a><br>
									<strong>Since:</strong> 17/05/2012<br>
									<strong>Status:</strong> <span class="label label-warning">Pending</span>                                 
								</li>
								<li>
									<a href="#">
										<img class="dashboard-avatar" alt="Abdullah" src="http://www.gravatar.com/avatar/46056f772bde7c536e2086004e300a04.png?s=50"></a>
										<strong>Name:</strong> <a href="#">Abdullah
									</a><br>
									<strong>Since:</strong> 25/05/2012<br>
									<strong>Status:</strong> <span class="label label-important">Banned</span>                                  
								</li>
								<li>
									<a href="#">
										<img class="dashboard-avatar" alt="Saruar Ahmed" src="http://www.gravatar.com/avatar/564e1bb274c074dc4f6823af229d9dbb.png?s=50"></a>
										<strong>Name:</strong> <a href="#">Saruar Ahmed
									</a><br>
									<strong>Since:</strong> 17/05/2012<br>
									<strong>Status:</strong> <span class="label label-info">Updates</span>                                  
								</li>
							</ul>
						</div>
					</div>
				</div> --><!--/span-->
						
				<!-- <div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i> Realtime Traffic</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div id="realtimechart" style="height:190px;"></div>
							<p class="clearfix">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
							<p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
					</div>
				</div>--><!--/span-->
			<!--</div> --> <!--/row-->

			<!-- <div class="row-fluid sortable">
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Buttons</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content buttons">
						<p class="btn-group">
							  <button class="btn">Left</button>
							  <button class="btn">Middle</button>
							  <button class="btn">Right</button>
						</p>
						<p>
							<button class="btn btn-small"><i class="icon-star"></i> Icon button</button>
							<button class="btn btn-small btn-primary">Small button</button>
							<button class="btn btn-small btn-danger">Small button</button>
						</p>
						<p>
							<button class="btn btn-small btn-warning">Small button</button>
							<button class="btn btn-small btn-success">Small button</button>
							<button class="btn btn-small btn-info">Small button</button>
						</p>
						<p>
							<button class="btn btn-small btn-inverse">Small button</button>
							<button class="btn btn-large btn-primary btn-round">Round button</button>
							<button class="btn btn-large btn-round"><i class="icon-ok"></i></button>
							<button class="btn btn-primary"><i class="icon-edit icon-white"></i></button>
						</p>
						<p>
							<button class="btn btn-mini">Mini button</button>
							<button class="btn btn-mini btn-primary">Mini button</button>
							<button class="btn btn-mini btn-danger">Mini button</button>
							<button class="btn btn-mini btn-warning">Mini button</button>
						</p>
						<p>
							<button class="btn btn-mini btn-info">Mini button</button>
							<button class="btn btn-mini btn-success">Mini button</button>
							<button class="btn btn-mini btn-inverse">Mini button</button>
						</p>
					</div>
				</div --><!--/span-->
					
				<!-- <div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Buttons</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content  buttons">
						<p>
							<button class="btn btn-large">Large button</button>
							<button class="btn btn-large btn-primary">Large button</button>
						</p>
						<p>
							<button class="btn btn-large btn-danger">Large button</button>
							<button class="btn btn-large btn-warning">Large button</button>
						</p>
						<p>
							<button class="btn btn-large btn-success">Large button</button>
							<button class="btn btn-large btn-info">Large button</button>
						</p>
						<p>
							<button class="btn btn-large btn-inverse">Large button</button>
						</p>
						<div class="btn-group">
							<button class="btn btn-large">Large Dropdown</button>
							<button class="btn btn-large dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-star"></i> Action</a></li>
								<li><a href="#"><i class="icon-tag"></i> Another action</a></li>
								<li><a href="#"><i class="icon-download-alt"></i> Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-tint"></i> Separated link</a></li>
							</ul>
						</div>
						
					</div>
				</div> --><!--/span-->
					
				<!-- <div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Weekly Stat</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<li>
								<a href="#">
									<i class="icon-arrow-up"></i>                               
									<span class="green">92</span>
									New Comments                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down"></i>
							  <span class="red">15</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus"></i>
							  <span class="blue">36</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment"></i>
							  <span class="yellow">45</span>
							  User reviews                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-up"></i>                               
							  <span class="green">112</span>
							  New Comments                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down"></i>
							  <span class="red">31</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus"></i>
							  <span class="blue">93</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment"></i>
							  <span class="yellow">254</span>
							  User reviews                                    
							</a>
						  </li>
						</ul>
					</div>
				</div> --><!--/span-->
			</div><!--/row-->
				  

		  
       
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
    else :
	redirect(base_url().'admin');
	endif;
?>