<?php 
    include('header.php');
?>
	<div id="content" class="span11">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="successful_story.php">Successful Story</a>
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
								<label class="control-label" for="focusedInput">Bride Name(Female) : </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Groom Name(Male) : </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Marriage Date : </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="date" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Vallikodi ID of Bride or Groom : </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Success Story : </label>
								<div class="controls">
								  <textarea class="input-xlarge focused" id="focusedInput" type="text" rows="5" value=""></textarea>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Photo : </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="file" value="">
								</div>
							  </div>
								<label class="control-label">Status : </label>
								<div class="controls">
								  <select data-rel="chosen">
									<option>Activated</option>
									<option>Diabled</option>									
								  </select>
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
    include('footer.php');
?>