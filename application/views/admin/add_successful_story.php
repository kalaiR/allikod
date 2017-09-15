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
							<a href="<?php echo base_url(); ?>admin/successful_story">Successful Story</a>
						</li>
					</ul>
				</div>
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header well" data-original-title>
							<h2><i class="icon-edit"></i> Add</h2>
							<div class="box-icon"></a>
								<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
								<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							<form enctype="multipart/form-data" class="form-horizontal add_form" method="post" action="successful_story">
<?php } ?>
							<?php
			                  if(!empty($status)) :
			                    echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
			                  endif;
			                ?> 
			                <p class='val_error'> <p>
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Bride Name(Female) : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="text" name="suc_bridename">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Groom Name(Male) : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="text" name="suc_groomname">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Marriage Date : </label>
								<div class="controls">
								<input type="text" class="input-xlarge focused form_inputs datepicker1" id="date01" name="suc_marriagedate">
								  <!-- <input class="input-xlarge focused form_inputs" id="focusedInput" type="date" name="suc_marriagedate"> -->
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Vallikodi ID of Bride or Groom : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs mob_num" id="focusedInput" type="text" name="suc_vallikodiid">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Success Story : </label>
								<div class="controls">
								  <textarea class="input-xlarge focused form_inputs" id="focusedInput" type="text" rows="5" name="suc_description"></textarea>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Photo : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="file" name="suc_couplephoto">
								</div>
							  </div>
								<label class="control-label">Status : </label>
								<div class="controls">
								  <select data-rel="chosen" class="form_inputs dropdrop" name="suc_status">
								  	<option value="">Select Status</option>
									<option value="1">Active</option>
									<option value="0">Inactive</option>									
								  </select>
								</div>
							    <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button type="reset" id="reset" class="btn reset">Reset</button>
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