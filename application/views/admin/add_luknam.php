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
						<a href="<?php echo base_url(); ?>admin/luknam">Luknam</a>
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
						<form class="form-horizontal add_form" method="post" action="luknam">
<?php } ?>						
							<?php
			                  if(!empty($status)) :
			                    echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
			                  endif;
			                ?> 
			                <p class='val_error'> <p>
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Luknam : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="text" name="luk_name">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Active Status : </label>
								<div class="controls">
								  <select class="form_inputs" data-rel="chosen" name="luk_status">
									<option value="">Select Status</option>
									<option value="1">Enabled</option>
									<option value="0">Disabled</option>
								  </select>
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