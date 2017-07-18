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
						<a href="add_administration">Edit Gallery</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Gallery</h2>
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
								<label class="control-label">Category* : </label>
								<div class="controls">
								  <select data-rel="chosen">
									<option>Pondicherry</option>
									<option>Tindivanam</option>
									<option>Villupuram</option>
									<option>Chethpet</option>
									<option>Thiruvanamalai</option>
									<option>Chennai</option>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Description* : </label>
								<div class="controls">
								  <textarea class="input-xlarge focused" id="focusedInput" type="text" value=""></textarea>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Photo* : </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="file" value="">
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
    include('templates/footer.php');
?>