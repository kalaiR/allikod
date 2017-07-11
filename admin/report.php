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
				<div class="box span12">	
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Report</legend>
							<div class="control-group">
							  <label class="control-label" for="date01">From Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date02">To Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date02" value="">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label">Online Number of Registration</label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input">0</span>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Simple Number of Registration</label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input">0</span>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Total Number of Registration</label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input">0</span>
								</div>
							  </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">View</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->

<?php 
    include('footer.php');
?>