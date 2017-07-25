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
						<a href="#">Report</a>
					</li>
				</ul>
			</div>
			<form method="post" action="<?php echo base_url(); ?>admin/report">
				<?php
                  if(!empty($status)) :
                    echo "<p class='db_status update_success_md'><i class=' icon-ok-sign'></i>  $status </p>";
                  endif;
                ?> 
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				<!-- Table -->
				<div class="row-fluid sortable">		
						<div class="box span12">
							<div class="box-header well" data-original-title>
								<h2><i class="icon-user"></i> Report</h2>
								<div class="box-icon">
									<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
									<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
									<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
								</div>
							</div>
							<div class="box-content span4">
							<!-- <a class="btn btn-info pull-right" id="add" href="add_administration.php">
							        <i class="glyphicon glyphicon-edit icon-white"></i>
							        Add
							    </a> -->
								<div class="control-group">
								  <label class="control-label" for="date01">From Date</label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" name="report_fromdate">
								  </div>
								</div>            
							</div>
							<div class="box-content span4">
							<!-- <a class="btn btn-info pull-right" id="add" href="add_administration.php">
							        <i class="glyphicon glyphicon-edit icon-white"></i>
							        Add
							    </a> -->
								<div class="control-group">
								  <label class="control-label" for="date01">To Date</label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" name="report_todate">
								  </div>
								</div>
							</div>
							<div class="box-content span3">
							<!-- <a class="btn btn-info pull-right" id="add" href="add_administration.php">
							        <i class="glyphicon glyphicon-edit icon-white"></i>
							        Add
							    </a> -->
								<div class="control-group">
								  <!-- <label class="control-label" for="date01">Click</label>
								  <div class="controls">
									<a class="btn btn-primary pull-left" id="add" href="<?php //echo base_url(); ?>admin/report">
							        	<i class="glyphicon glyphicon-edit icon-white"></i>
							        View
							    	</a>
								  </div> -->
								  <!-- <div class="form-actions"> -->
										<button type="submit" class="btn btn-primary pull-left mar">View Report</button>
								    <!-- </div> -->
								</div>
							</div>
							<div class="box-content span7 row pull-right">
							<!-- <a class="btn btn-info pull-right" id="add" href="add_administration.php">
							        <i class="glyphicon glyphicon-edit icon-white"></i>
							        Add
							    </a> -->
								<div class="control-group">
									<label class="control-label">Online No. of registration :0</label>
									<div class="controls">
									  <!-- <span class="input-xlarge uneditable-input span1"><?php //if(!empty($report_data)) echo $report_data['all_onlineuser']; ?></span> -->
									  <!-- <span class="input-xlarge uneditable-input span1"><?php if(!empty($post_report_data)) echo $post_report_data['all_onlineuser']; else if(!empty($report_data)) echo $report_data['total_onlineuser']; ?></span> -->
									</div>
								</div>
								<div class="control-group pad">
									<label class="control-label">Simple No. of registration :0</label>
									<!-- <div class="controls">
									  <span class="input-xlarge uneditable-input span1"><?php if(!empty($post_report_data)) echo $post_report_data['all_simpleuser']; else if(!empty($report_data)) echo $report_data['total_simpleuser']; ?></span>
									</div> -->
								</div>
								<div class="control-group pad">
									<label class="control-label">Total No. of registration :0</label>
									<div class="controls">
									  <!-- <span class="input-xlarge uneditable-input span1"><?php if(!empty($post_report_data)) echo $post_report_data['totaluser']; else if(!empty($report_data)) echo $report_data['total']; ?></span> -->
									</div>
								</div>
							</div>
								         
							</div>
						</div><!--/span-->
				</form>
			</div><!--/row-->
		</div><!--/.fluid-container-->
	</div>  <!-- span10 end -->

<?php 
    include('templates/footer.php');
?>