<?php if(!$this->input->is_ajax_request()) { ?>
<?php 
    include('templates/header.php');
?>
	<div id="content" class="span11">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>admin/index">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>admin/mother_tongue">Mother Tongue</a>
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
						<form class="form-horizontal add_form" method="post" action="mother_tongue">
<?php } ?>					
							<?php
				                  if(!empty($status)) :
				                    echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
				                  endif;
				                ?> 
				                <p class='val_error'> <p>		
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Mother Tongue : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="text" name="mt_name">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Active Status : </label>
								<div class="controls">
								  <select class="form_inputs" data-rel="chosen" name="mt_status">
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
    include('templates/footer.php');
?>
<?php } ?>