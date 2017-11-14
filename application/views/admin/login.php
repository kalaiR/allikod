<?php if(!$this->input->is_ajax_request()) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Vallikodi Matrimonial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo media_url(); ?>assets/admin/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo media_url(); ?>assets/admin/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo media_url(); ?>assets/admin/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo media_url(); ?>assets/admin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo media_url(); ?>assets/admin/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo media_url(); ?>assets/admin/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/uploadify.css' rel='stylesheet'>
	<link href='<?php echo media_url(); ?>assets/admin/css/style.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo media_url(); ?>assets/admin/img/fav.ico">
		
</head>

<body class="bgcolor">
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<a class="center" href="<?php echo base_url(); ?>admin"> <img alt="Vallikodi Logo" src="<?php echo media_url(); ?>assets/admin/img/logo1.png" /></a>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<form class="form-horizontal admin_login_form" action="<?php echo base_url(); ?>admin" method="post">					
<?php } ?>
						<div class="alert alert-info admin_status"></div>
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10 form_inputs" name="username" id="username" type="text" placeholder="Username" autocomplete="off" style="margin-top: 5px" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10 form_inputs" name="password" id="password" type="password" placeholder="Password" autocomplete="off" style="margin-top: 5px"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" name="remember_me"/>Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-success">Login</button>
							</p>
						</fieldset>
<?php if(!$this->input->is_ajax_request()) { ?>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-transition.js"></script>
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery-ui-timepicker-addon.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo media_url(); ?>assets/admin/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo media_url(); ?>assets/admin/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo media_url(); ?>assets/admin/js/excanvas.js"></script>
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.flot.min.js"></script>
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.flot.stack.js"></script>
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo media_url(); ?>assets/admin/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo media_url(); ?>assets/admin/js/charisma.js"></script>
	<script src="<?php echo media_url(); ?>assets/admin/js/custom.js"></script>
	
	<script>
		//CSRF Protection declaration
        var csfrData = {};
        csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
        var csrf_name = "<?php echo $this->security->get_csrf_token_name(); ?>";

        //Admin base url declaration (route path)
        var admin_baseurl = "<?php echo base_url(); ?>admin/";
    </script>

</body>
</html>
<?php } ?>
