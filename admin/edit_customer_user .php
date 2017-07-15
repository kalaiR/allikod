<?php 
    include('header.php');
?>
<!-- left menu starts -->
	<div class="span2 main-menu-span">
		<div class="well nav-collapse sidebar-nav">
			<ul class="nav nav-tabs nav-stacked main-menu">
				<li class="nav-header hidden-tablet">Main</li>
				<li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
				<li><a class="ajax-link" href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> Administration</span></a></li>
				<li><a class="ajax-link" href="form.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Report</span></a></li>
				<li><a class="ajax-link" href="chart.html"><i class="icon-edit"></i><span class="hidden-tablet"> Customer User</span></a></li>
				<li><a class="ajax-link" href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Successful Story</span></a></li>
				<li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Mail</span></a></li>
				<!-- <li class="nav-header hidden-tablet">Sample Section</li> -->
				<li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery Upload</span></a></li>
				<li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Settings</span></a></li>
		</div><!--/.well -->
	</div><!-- left menu ends -->
	<div id="content" class="span10">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Customer User</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Customer Add</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Admin : </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password : </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="Password" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Active Status : </label>
								<div class="controls">
								  <select data-rel="chosen">
									<option>Enabled</option>
									<option>Disabled</option>
								  </select>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label">Admin Type : </label>
								<div class="controls">
								  <select data-rel="chosen">
									<option>Admin</option>
									<option>Selling Admin</option>
								  </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
						</div>
				</div><!--/span-->
			</div><!--/row-->
	<!-- content ends -->
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

<?php 
    include('footer.php');
?>