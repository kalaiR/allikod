<?php if(!$this->input->is_ajax_request()) { ?>
<?php 
    include('templates/header.php');
?>
	<div id="content" class="span11">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>index.php/admin/">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>index.php/admin/administration">Administration</a>
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
						<form class="form-horizontal edit_form" method="post" action="administration" data-id="<?php echo $this->uri->segment(3); ?>">
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
								<label class="control-label" for="focusedInput_pwd">Password : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput_pwd" type="password" name="adm_password" value="<?php if(!empty($admin_data)) echo $admin_data['admin_pwd']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Active Status : </label>
								<div class="controls">
								  <select class="form_inputs" data-rel="chosen" name="adm_status">
									<option value="">Select Status</option>
									<option value="1" <?php if ($admin_data['active_status'] == 1) echo "selected"; ?>>Enabled</option>
									<option value="0" <?php if ($admin_data['active_status'] == 0) echo "selected"; ?>>Disabled</option>
								  </select>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label">Admin Type : </label>
								<div class="controls">
								  <select class="form_inputs" data-rel="chosen" name="adm_type">
									<option value="">Select Status</option>
									<option value="1" <?php if ($admin_data['admin_permission'] == 1) echo "selected"; ?>>Admin</option>
									<option value="2" <?php if ($admin_data['admin_permission'] == 0) echo "selected"; ?>>Selling Admin</option>
								  </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button type="reset" class="btn">Reset</button>
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