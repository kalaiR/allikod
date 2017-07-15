<?php 
    include('header.php');
?>
	<div id="content" class="span10">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="administration.php">Administration</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit</h2>
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

<?php 
    include('footer.php');
?>