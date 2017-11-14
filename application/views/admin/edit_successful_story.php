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
							<h2><i class="icon-edit"></i> Edit</h2>
							<div class="box-icon">
								<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
								<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							<form enctype="multipart/form-data" class="form-horizontal edit_form success_result" method="post" action="successful_story" data-id="<?php echo $this->uri->segment(3); ?>">
<?php } ?>
							<?php
							  // print_r($zodiac_data);
			                  if(!empty($status)) :
			                    echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
			                  endif;
			                ?> 
			                <p class='val_error'> <p>
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Bride Name(Female) : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="text" name="suc_bridename" value="<?php if(!empty($successtory_data)) echo $successtory_data['female_name']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Groom Name(Male) : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs" id="focusedInput" type="text" name="suc_groomname" value="<?php if(!empty($successtory_data)) echo $successtory_data['male_name']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Marriage Date : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs datepicker" id="date01" type="date" name="suc_marriagedate" value="<?php if(!empty($successtory_data)) echo date('Y-m-d',strtotime($successtory_data['marriage_date'])); ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Vallikodi ID of Bride or Groom : </label>
								<div class="controls">
								  <input class="input-xlarge focused form_inputs mob_num" id="focusedInput" type="text" name="suc_vallikodiid" value="<?php if(!empty($successtory_data)) echo $successtory_data['vallikodi_id']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Success Story : </label>
								<div class="controls">
								  <textarea class="input-xlarge focused form_inputs" id="focusedInput" type="text" rows="5" name="suc_description"><?php if(!empty($successtory_data['description'])) echo $successtory_data['description']; ?></textarea>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Photo : </label>
								<div class="controls edit-mult-img">
								  <!-- <input class="input-xlarge focused form_inputs" id="focusedInput" type="file" name="suc_couplephoto"> -->
								  <!-- <div class="imageupload panel panel-default">
                                        <div class="panel-heading clearfix">
                                            <h3 class="panel-title">Upload Image *</h3>
                                            <span id="upimg_error" class="registration-error"></span>
                                        </div>
                                        <div class="file-tab panel-body">
                                            <label class="btn btn-default btn-file">
                                                <span>Browse</span>
                                                 <input type="file" id="uploadedfile" name="uploadedfile" class="form_inputs" />
                                            </label>
                                        </div>
	                                </div> -->
	                                <div class="imageupload panel panel-default">
										<div class="panel-heading clearfix">
										    <h4 class="panel-title">Upload Image</h4>
										</div>
										<div class="edit_img">
										    <!-- <span id="spanFileName" class="registration-error error-msg"></span> -->
										    <div class="file-tab panel-body img-post-box">
										        <ul>
										            <li class="btn btn-default btn-file">
										                <span>Browse</span>
										                <input type="file" click-type="type1" id="picupload" class="picupload" multiple>
										            </li>
										        </ul>     
										    </div>
									        <div class="img-post"> 
									            <ul id="media-list" class="clearfix">
									            </ul>    
									        </div>
										</div>
	                                </div>
								</div>
							  </div>
								<label class="control-label">Status : </label>
								<div class="controls">
								  <select data-rel="chosen" class="form_inputs dropdrop" name="suc_status">
								  	<option value="">Select Status</option>
									<option value="1" <?php if ($successtory_data['active_status'] == 1) echo "selected"; ?>>Active</option>
									<option value="0" <?php if ($successtory_data['active_status'] == 0) echo "selected"; ?>>Inactive</option>							
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