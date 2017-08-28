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
								  	<option value="">Select Category</option>
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
								<div class="controls edit-mult-img">
								  <!-- <input class="input-xlarge focused" id="focusedInput" type="file" value=""> -->
									<div class="imageupload panel panel-default">
                                        <!-- <div class="panel-heading clearfix">
                                            <h3 class="panel-title">Upload Image *</h3>
                                            <span id="upimg_error" class="registration-error"></span>
                                        </div> -->
                                        <!-- <div class="file-tab panel-body">
                                            <label class="btn btn-default btn-file">
                                                <span>Browse</span>
                                                 <input type="file" id="uploadedfile" name="uploadedfile" class="form_inputs" />
                                            </label>
                                        </div> -->
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
							   <div class="control-group">
								<label class="control-label">Active Status : </label>
								<div class="controls">
								  <select data-rel="chosen">
								  	<option value="">Select Status</option>
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