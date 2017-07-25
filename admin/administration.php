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
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a href="#admin">Admin</a></li>
							<li><a href="#selling">Selling Admin</a></li>
							<!-- <li><a href="#simple">Simple</a></li>
							<li><a href="#waiting">Waiting</a></li> -->
						</ul>
						 
						<div id="myTabContent" class="tab-content">
						<!-- Admin Tab Begins -->
							<div class="tab-pane active" id="admin">
								<div class="box-content row">
								<a class="btn btn-primary pull-right" id="add" href="add_administration.php">
								        <i class="glyphicon glyphicon-edit icon-white"></i>
								        Add
								    </a>
								</div>
								<div id="table_wrapper_Datatable" style="overflow: auto;overflow-y: hidden;-ms-overflow-y: hidden;position:relative;margin-right:5px;padding-bottom: 15px;display:block;">
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
												<a class="btn btn-primary" href="edit_administration.php">
													<i class="icon-edit icon-white"></i>  
													Edit                                            
												</a>
												<a class="btn btn-danger btn-setting " href="#">
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
												<a class="btn btn-primary" href="edit_administration.php">
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
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Muhammad Usman</td>
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
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Sheikh Heera</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Helen Garner</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Saruar Ahmed</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Ahemd Saruar</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Habib Rizwan</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Rizwan Habib</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Amrin Sana</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Sana Amrin</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Ifrah Jannat</td>
											<td class="center">Admin</td>
											<td class="center">2012/06/01</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Jannat Ifrah</td>
											<td class="center">2012/06/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Robert</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Dave Robert</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Brown Robert</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Usman Muhammad</td>
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
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Abdullah</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Dow John</td>
											<td class="center">2012/02/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>John R</td>
											<td class="center">2012/02/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Paul Wilson</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Wilson Paul</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Heera Sheikh</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Sheikh Heera</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Christopher</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Andro Christopher</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Jhon Doe</td>
											<td class="center">2012/06/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Lorem Ipsum</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Abraham</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Brown Blue</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Worth Name</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
							</div>
							<!-- Admin Tab Ends -->
							<!-- Selling Tab Begins -->
							<div class="tab-pane" id="selling">
								<div class="box-content">								
								<div id="table_wrapper_Datatable" style="overflow: auto;overflow-y: hidden;-ms-overflow-y: hidden;position:relative;margin-right:5px;padding-bottom: 15px;display:block;">
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
												<a class="btn btn-primary" href="edit_administration.php">
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
												<a class="btn btn-primary" href="edit_administration.php">
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
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Muhammad Usman</td>
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
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Sheikh Heera</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Helen Garner</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Saruar Ahmed</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Ahemd Saruar</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Habib Rizwan</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Rizwan Habib</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Amrin Sana</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Sana Amrin</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Ifrah Jannat</td>
											<td class="center">Admin</td>
											<td class="center">2012/06/01</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Jannat Ifrah</td>
											<td class="center">2012/06/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Robert</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Dave Robert</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Brown Robert</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Usman Muhammad</td>
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
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Abdullah</td>
											<td class="center">2012/02/01</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Dow John</td>
											<td class="center">2012/02/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>John R</td>
											<td class="center">2012/02/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Paul Wilson</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Wilson Paul</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Heera Sheikh</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Sheikh Heera</td>
											<td class="center">2012/01/21</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-success">Active</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Christopher</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Andro Christopher</td>
											<td class="center">2012/08/23</td>
											<td class="center">Staff</td>
											<td class="center">
												<span class="label label-important">Banned</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Jhon Doe</td>
											<td class="center">2012/06/01</td>
											<td class="center">Admin</td>
											<td class="center">
												<span class="label">Inactive</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Lorem Ipsum</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Abraham</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Brown Blue</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
											<td>Worth Name</td>
											<td class="center">2012/03/01</td>
											<td class="center">Member</td>
											<td class="center">
												<span class="label label-warning">Pending</span>
											</td>
											<td class="center">
												<!-- <a class="btn btn-success" href="#">
													<i class="icon-zoom-in icon-white"></i>  
													View                                            
												</a> -->
												<a class="btn btn-primary" href="edit_administration.php">
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
						</div>
					</div><!-- Tab Ends -->
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