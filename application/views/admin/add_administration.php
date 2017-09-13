<?php if(!$this->input->is_ajax_request()) { ?>
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
						<a href="<?php echo base_url(); ?>admin/administration">Administration</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal add_form" method="post" action="administration" id="admin_form">
<?php } ?>						
							<?php
			                  if(!empty($status)) :
			                    echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
			                  endif;
			                ?> 
			                <p class='val_error'> <p>						
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Admin : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="text" name="adm_name" value="<?php if(!empty($admin_data)) echo $admin_data['admin_username']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="password" name="adm_password">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Active Status : </label>
								<div class="controls">
								  <select class="form_inputs dropdrop" id="" data-rel="chosen" name="adm_status">
									<option value="">Select Status</option>
									<option value="1">Enabled</option>
									<option value="0">Disabled</option>
								  </select>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label">Select Admin Type : </label>
								<div class="controls">
								  <select class="form_inputs dropdrop" id="" data-rel="chosen" name="adm_type">
									<option value="">Admin Type</option>
									<option value="1">Admin</option>
									<option value="0">Selling Admin</option>
								  </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button type="reset" class="btn" id="reset">Reset</button>
							  </div>
							</fieldset>
<?php if(!$this->input->is_ajax_request()) { ?>							
							  </form>
							</div>
					</div><!--/span-->
				</div><!--/row-->
		<!-- content ends -->
		</div><!--/fluid-row-->

<?php 
    include('templates/footer.php');
?>
<?php } ?>