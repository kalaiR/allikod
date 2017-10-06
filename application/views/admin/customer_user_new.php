<?php if(!$this->input->is_ajax_request()) { ?>
<?php 
    include('templates/header.php');
?>
<div class="loader_holder"></div>
	<div id="content" class="span11 cust_user">
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>admin">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Customer User</a>
					</li>
				</ul>
			</div>
			<!-- Hidden Search Div Begins -->
			<div class="row-fluid sortable slidingDiv">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-zoom-in"></i> Search</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn slidingDivs btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form method="post" action="customer_user_new" class="searchfilter">
		                  	<div class="row-fluid">
		                        <div class="span4">
		                        	<div class="form-horizontal">
										<fieldset>
											 <div class="control-group">
													<label class="control-label" for="focusedInput">Vallikodi ID</label>
												<div class="controls">
											  		<input class="input-xlarge focused v_id" id="focusedInput" type="text" style="width: 150px" name="cususer_id">
												</div>
										  	</div>
										  	<div class="control-group">
											<label class="control-label" for="focusedInput">Name</label>
											<div class="controls">
											  <input class="input-xlarge focused" id="focusedInput" type="text" style="width: 150px" name="cususer_name">
											</div>
										  </div>								
										  <div class="control-group">
											<label class="control-label">Age : </label>
											<div class="controls">
											  <select data-rel="chosen" style="width: 75px" name="cusage_from" class="dropdrop f_age"> 
												<option value="">From</option>
                                                        <?php for( $i=18; $i<=60; $i++ ):
                                                        if($i == $customeruser_values['phy_searchage_from'])
                                                            echo "<option value =".$i." selected>".$i."</option>";
                                                        else
                                                            echo "<option value =".$i.">".$i."</option>";
                                                        endfor; ?>
											  </select>
											  <select data-rel="chosen" style="width: 75px" name="cusage_to" class="dropdrop t_age">
												<option value="">To</option>
														<?php for( $i=18; $i<=60; $i++ ):
                                                        if($i == $customeruser_values['phy_searchage_from'])
                                                            echo "<option value =".$i." selected>".$i."</option>";
                                                        else
                                                            echo "<option value =".$i.">".$i."</option>";
                                                        endfor; ?>
											  </select>
											</div>
										  </div>								 
										 </fieldset>
									</div>
		                        </div>
		                        <div class="span4">
		                        	<div class="form-horizontal">
										<fieldset>
											<div class="control-group">
											<label class="control-label" for="focusedInput">Profile</label>
											<div class="controls">
											  <input class="input-xlarge focused pro_id" id="focusedInput" type="text"  style="width: 150px" name="cus_profileid">
											</div>
										  </div>
										  <div class="control-group">
												<label class="control-label">Gender</label>
												<div class="controls">
												  <select data-rel="chosen" style="width: 150px" name="cus_gender" class="dropdrop">
		            									<option value="">Gender</option>
														<option value="1">Male</option>
														<option value="2">Female</option>
		             								</select>
												</div>
										  </div>  
										 </fieldset>
									</div>
		                        </div>
		                        <div class="span4">
		                        	<div class="form-horizontal">
										<fieldset>
											<!-- <div class="control-group">
											<label class="control-label" for="focusedInput">Profile</label>
											<div class="controls">
											  <input class="input-xlarge focused" id="focusedInput" type="text"  style="width: 150px">
											</div>
										  </div> -->
										  <div class="control-group">
											<label class="control-label" for="focusedInput">File No ID</label>
											<div class="controls">
											  <input class="input-xlarge focused file_id" id="focusedInput" type="text"  style="width: 150px" name="cus_fileid">
											</div>
										  </div>
										  <div class="control-group">
											  <label class="control-label" for="date01">DOB</label>
											  <div class="controls">
												<input type="text" class="input-xlarge datepicker dob_admin" id="date01" style="width: 150px" value="02/16/12" name="cus_dob">
											  </div>
											</div>
										  <div class="control-group">
											<button style="margin-right: 15px" class="btn btn-primary pull-right hide_search" id="add" type="submit">Search</button>
										  </div>
										 </fieldset>
										 </div>
		                        </div>    
                    		</div>  
                		</form>                     
                  	</div>
				</div><!--/span-->
			</div><!--/row-->
			<!-- Hidden Search Div Begins -->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-user"></i> Customer User</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<!-- <ul class="nav nav-tabs" id="myTab">
							<li class="active"><a href="#view">View</a></li>
							<li><a href="#online">Online</a></li>
							<li><a href="#simple">Simple</a></li>
							<li><a href="#waiting">Waiting</a></li>
						</ul>	 -->					 
						<div id="myTabContent" class="tab-content">
							<!-- View Tab Begins -->
							<div class="tab-pane active" id="view">
								<div class="box-contents row">
									
								    <a class="btn btn-primary pull-right search_customer" id="adds" href="#">
								        <!-- <i class="glyphicon glyphicon-edit icon-white"></i> -->
								        search
								    </a>
								    <a class="btn btn-primary pull-right" id="add" href="<?php //echo base_url(); ?>admin/add_online_user">
								        <!-- <i class="glyphicon glyphicon-edit icon-white"></i> -->
								        Add Online User
								    </a>
								    <div class="control-group pull-left">
										<label class="control-label" for="selectError3"></label>
										<div class="controls">
										  <select id="selectError3" style="float: left; width: 160px" class="filter_act userstatus_data drops_reset">
										  	<option value="">Select By Userstatus</option>
										  	<!-- <option value="">All users</option> -->
											<option value="active">Active</option>
											<option value="inactive">Inactive</option>
											<option value="deleted">Deleted</option>
										  </select>
										  <select id="selectError3" style="margin:0px 20px 0px 10px; float: left; width: 160px" class="filter_act usertype_data drop_reset">
										  	<option value="" >Select By Usertype</option>
										  	<!-- <option value="">All Users</option> -->
											<option value="online">Online</option>
											<option value="simple">Simple</option>
											<option value="waiting">Waiting</option>
										  </select>
										  	<!-- <button type="reset" class="btn btn-primary search_customer reset" id="search" href="#" style="float: left; margin-left: 5px;">
									        <i class="glyphicon glyphicon-edit icon-white"></i>
									        Search
									    	</button> -->
										</div>										
									</div>
								</div>
								<!-- <div class="box-contents row">
									<div class="control-group pull-right">
										<div class="controls">
										  Search <input class="input-xlarge " id="" type="text" style="width: 75%">
										</div>
									</div>
								    <div class="control-group pull-left">
										<label class="control-label" for="selectError3"></label>
										<div class="controls">
										  <select id="selectError3" style="float: left; width: 50px">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select> records per page
										</div>										
									</div>
								</div> -->
								<div id="table_wrapper_Datatable" style="overflow: auto;overflow-y: hidden;-ms-overflow-y: hidden;position:relative;margin-right:5px;padding-bottom: 15px;display:block;" class="ajaxdata">
<?php } ?>								
									<table class="table table-striped table-bordered bootstrap-datatable" id="cd-grid">
									  <thead>
										  <tr>
											  <!-- <th><span><input id="inlineCheckbox1" style="opacity: 0;" type="checkbox"></span> -->
											  <th><span><input id="inlineCheckbox1" type="checkbox"></span>
											  </th>
											  <th>S.No</th>
											  <th>Vallikodi ID</th>
											  <!-- <th>Profile ID</th> -->		  
											  <th>Name</th>
											  <th>Mail</th>
											  <!-- <th>Profile <br>Viewed</th> -->
											  <!-- <th>Reg. <br>By</th> -->
											  <th>User <br>Type</th>
											  <th>Profile Status</th>
											  <th>Payment Status</th>
											  <th>Reg. <br>Date</th>	  
											  <th>Action</th>
										  </tr>
									  </thead>   
									  <tbody>
										<?php
						                      if(!empty($customeruser_values)) :
						                      // echo "<pre>";
						                      // print_r($customeruser_values);
						                      // echo "</pre>";
						                      // $i = $this->uri->segment(3);
						                      $i=$offset;
						                      foreach ($customeruser_values as $cus_val) :
						                      $i++;
			                      	    ?>
										<tr>
											<td><span><input id="inlineCheckbox1" type="checkbox"></span></td>
											<td class="center"><?php echo $i; ?></td>
											<td class="center"><?php echo "VM".$cus_val['userdetail_id']; ?></td>
											<!-- <td class="center">259</td> -->
											<td class="center"><?php echo $cus_val['user_fname']; ?></td>
											<td class="center"><?php echo $cus_val['user_email']; ?></td>
											<!-- <td class="center">
												<?php //echo "self"; ?>
											</td> -->
											<!-- <td class="center">0 / 60</td> -->
											<td class="center">
												<span class="label label-success"> <!--class for simpleuser <span class="label label-warning"> -->
													<?php 
							                          if ($cus_val['user_online_or_simple'] == 'online') 
							                            echo "Online";
							                          else
							                            echo "Simple";
							                        ?>  
												</span>
											</td>
											<td class="center">
												<span class="label label-success"> <!--class for Not-activated <span class="label label-Danger"> -->
													<?php 
							                          if ($cus_val['user_active_status'] == 1) 
							                            echo "Activated";
							                          else
							                            echo "Not-Activated";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<span class="label label-success"> <!--class for not-paid <span class="label label-important"> -->
													<?php 
							                          if ($cus_val['payment_status'] == 1) 
							                            echo "Paid";
							                          else
							                            echo "Not Paid";
							                        ?>    	
				                        		</span>
											</td>
											<td class="center">
												<?php 
						                            $created_datetime = explode(' ', $cus_val['user_added_date']);
						                            echo date("d/m/Y", strtotime($created_datetime[0]))."&nbsp;&nbsp;&nbsp;".$created_datetime[1]; 
						                        ?>
											</td>											
											<td class="center">
												<div style="width: 115px;">
													<!-- <a class="btn btn-warning" href="<?php //echo base_url(); ?>admin/view_customer_user/<?php //echo $cus_val["userdetail_id"] ?>">
														<i class="icon-refresh icon-white" title="Renew"></i>  
													</a>
													<a class="btn btn-primary cboxElement"  href="http://libertyshoewarehouse.com/mt-content/uploads/2016/12/comingsoon.png">
														<i class="icon-picture icon-white" title="Image"></i> 
													</a> -->
													<a class="btn btn-success" href="<?php echo base_url(); ?>admin/view_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-zoom-in icon-white" title="View"></i>  
													</a>
													<a class="btn btn-info" href="<?php echo base_url(); ?>admin/edit_customer_user/<?php echo $cus_val["userdetail_id"] ?>">
														<i class="icon-edit icon-white" title="Edit"></i>  
													</a>
													<a class="btn btn-danger btn-setting" href="#">
														<i class="icon-trash icon-white" title="Delete"></i> 
													</a>
												</div>
											</td>
										</tr>
										<?php
					                      endforeach;
					                      endif;
					                     ?>
				                    </tbody>
								  </table>
								  <!-- Pagination without datatable -->
									<div class="col-md-5">
										<!-- <div>Showing 1 to 10 of 500 entries</div> -->
								  		<div>
									  		<!-- <div style="margin-left: 40%" id="ajax_pagingsearc">	 -->
									  		<div class="pagination cus_page"  id="ajax_pagingsearc">
											  <!-- <a href="#">&laquo; Prev</a>
											  <a href="#">1</a>
											  <a href="#">2</a>
											  <a href="#">3</a>
											  <a href="#">4</a>
											  <a href="#">5</a>
											  <a href="#">6</a>
											  <a href="#">Next&raquo;</a> -->
											  <?php echo $links; ?>
											</div>
									  	</div>
							  		</div>
<?php if(!$this->input->is_ajax_request()) { ?>									  
								</div>
							</div>
						</div>
					</div>		  		
				</div>
			<!-- Table -->
		</div>  <!-- span10 end -->
	<!-- external javascript
	================================================== -->
	<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Alert !</h3>
			</div>
			<div class="modal-body">
				<p>Are you sure want to delete?</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancel</a>
				<a href="#" class="btn btn-danger">Delete</a>
			</div>
		</div>
	<!-- Placed at the end of the document so the pages load faster -->


<?php 
    include('templates/footer.php');
?>
<script type="text/javascript">
    $(function() { 
	    applyPagination();  
	    function applyPagination() {
	        $("#ajax_pagingsearc a").click(function(e) {
		        e.preventDefault();
		        var url = $(this).attr("href");
		        var userstatus = $('.userstatus_data :selected').val();
		        var usertype = $('.usertype_data :selected').val();
		        $(".searchfilter").submit();
		        formdata = $('.searchfilter').serialize();
		        // alert(JSON.stringify(formdata));
		          $.ajax({
		            type: "POST",
		            // data: "ajax=1&"+csrf_name+'='+csfrData[csrf_name]+"&userstatus="+userstatus+"&usertype="+usertype,
		            data: formdata+"&filtersearch=1&ajax=1&pagination=1&"+csrf_name+"="+csfrData[csrf_name]+"&userstatus="+userstatus+"&usertype="+usertype,
		            url: url,
		            beforeSend: function () 
					{ 
						$(".loader_holder").show();
						$(".cust_user").hide();
							 
	                },
		           success: function(msg) {
		           	$(".loader_holder").hide();	
		           	$(".cust_user").show();  
		              $(".ajaxdata").html(msg);
		              applyPagination();
		            }
		          });
		        return false;
	        });
	    }
        $('.filter_act').on('change',function(e){
        	e.preventDefault();
        	var userstatus = $('.userstatus_data :selected').val();
        	var usertype = $('.usertype_data :selected').val();
        	$.ajax({
        		// $(".loader_holder").show();	  
            	type: "POST",
	            data: "ajax=1&"+csrf_name+'='+csfrData[csrf_name]+"&userstatus="+userstatus+"&usertype="+usertype,
	            url: admin_baseurl+"customer_user_new",
	            beforeSend: function () 
				{ 
					$(".loader_holder").show();
					$(".cust_user").hide();
						 
                },
	           	success: function(msg) {   
	           		$(".loader_holder").hide();	
	           		$(".cust_user").show();        		
	              $(".ajaxdata").html(msg);
	              applyPagination();
	            }
	        });
	         
        });

        $('.searchfilter').on('submit',function(e){
        	e.preventDefault();
        	formdata = $(this).serialize();
        	$.ajax({
            	type: "POST",
	            data: formdata+"&filtersearch=1&ajax=1&"+csrf_name+"="+csfrData[csrf_name],
	            url: admin_baseurl+"customer_user_new",
	             beforeSend: function () 
				{ 
					$(".loader_holder").show();
					$(".cust_user").hide();
						 
                },
	           	success: function(msg) {
	           		$(".loader_holder").hide();	
	           		$(".cust_user").show();  
	              $(".ajaxdata").html(msg);
	              applyPagination();
	            }
	        });
        });
    });
</script>
<script type= 'text/javascript'>
    // $(document).ready(function () {
    //     $('#cd-grid').DataTable({
    //         "processing": true,
    //         "serverSide": true,
    //         "ajax": admin_baseurl."cd_list"
    //     });
    // });
</script>
<?php } ?>