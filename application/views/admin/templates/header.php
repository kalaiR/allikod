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
	<title>Vallikodi Martimonial</title>
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
	<link href='<?php echo media_url(); ?>assets/admin/css/sidebar-menu.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo media_url(); ?>assets/admin/img/fav.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo base_url(); ?>admin/"> <img alt="Vallikodi Logo" src="<?php echo media_url(); ?>assets/admin/img/logo1.png" /></a>
				
				<!-- theme selector starts -->
				<!-- <div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div> -->
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<?php
                            $session_data = $this->session->userdata("admin_login_session");
                        ?>
						<i class="icon-user"></i><span class="hidden-phone"> Welcome <?php echo $session_data['adminuser_name']; ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<!-- <li><a href="<?php echo base_url(); ?>admin">Profile</a></li> -->
						<!-- <li class="divider"></li> -->
						<li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="<?php echo base_url(); ?>">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>


	<!-- left menu starts -->
	<div class="span2 main-menu-span">
		<div class="well nav-collapse sidebar-nav">
			<ul class="nav nav-tabs nav-stacked sidebar-menu main-menu">
				<!-- New Menu List With Dropdown Begins -->
				<li id="dashboard"><a href="<?php echo base_url(); ?>admin/"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
				<li id="administration"><a class="ajax-link" href="#"><i class="icon-user"></i><span> Administration</a>
					<ul class="sidebar-submenu">
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/administration"><i class="icon-eye-open"></i><span> Administration View</span></a></li>
					</ul>
				</li>
				<li class="" id="report"><a href="<?php echo base_url(); ?>admin/report"><i class="icon-list-alt"></i><span> Report</a>
					<!-- <ul class="sidebar-submenu">
						<li><a class="ajax-link" href="report.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Report</span></a></li>
					</ul> -->
				</li>
				<li class="" id="customer_user"><a href="<?php echo base_url(); ?>admin/customer_user"><i class="icon icon-darkgray icon-users"></i><span> Customer User</a>
					<!-- <ul class="sidebar-submenu" >
						<li><a class="ajax-link" href="customer_user.php"><i class="icon icon-darkgray icon-users"></i><span class="hidden-tablet"> Customer User</span></a></li>
					</ul> -->
				</li>
				<li class="" id="successful_story"><a href="<?php echo base_url(); ?>admin/successful_story"><i class="icon icon-darkgray icon-book"></i><span> Successful Story</a>
					<!-- <ul class="sidebar-submenu">
						<li><a class="ajax-link" href="successful_story.php"><i class="icon icon-darkgray icon-book"></i><span class="hidden-tablet"> Successful Story</span></a></li>
					</ul> -->
				</li>
				<li class="" id="mail"><a href="#"><i class="icon-envelope"></i><span> Mail</a>
					<ul class="sidebar-submenu">
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/"><i class="icon-envelope"></i><span class="hidden-tablet"> Mail</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/"><i class="icon-envelope"></i><span class="hidden-tablet"> Send Mail</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/"><i class="icon-comment"></i><span class="hidden-tablet">Send SMS</span></a></li>
					</ul>
				</li>
				<li class="" id="gallery"><a href="#"><i class="icon-picture"></i> Gallery</a>
					<ul class="sidebar-submenu">
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/gallery_upload"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery Upload</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/gallery_category"><i class="icon-align-justify"></i><span class="hidden-tablet">Gallery category</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/contact_gallery_upload"><i class="icon-calendar"></i><span class="hidden-tablet">Contact Gallery Upload</span></a></li>
					</ul>
				</li>
				<li class="" id="settings"><a href="#"><i class="icon-cog"></i> Settings</a>
					<ul class="sidebar-submenu">
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/zodiac_sign"><i class="icon-screenshot"></i><span class="hidden-tablet">Zodiac Sign</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/nakshathra"><i class="icon-star"></i><span class="hidden-tablet">Nakshathra</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/mother_tongue"><i class="icon-font"></i><span class="hidden-tablet">Mother Tongue</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/luknam"><i class="icon-folder-open"></i><span class="hidden-tablet">Luknam</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/country"><i class="icon-globe"></i><span class="hidden-tablet">Country</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/education"><i class="icon-edit"></i><span class="hidden-tablet">Education</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/occupation"><i class="icon-briefcase"></i><span class="hidden-tablet">Occupation</span></a></li>
					</ul>
				</li>
				<!-- New Menu List With Dropdown Begins -->
				
				<!-- <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
				<li class="nav-header hidden-tablet">Administration</li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/administration"><i class="icon-eye-open"></i><span class="hidden-tablet"> Administration View</span></a></li> -->
				<!-- <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/selling_admin"><i class="icon-list-alt"></i><span class="hidden-tablet"> Selling Administration View</span></a></li> -->
				<!-- <li class="nav-header hidden-tablet">Report</li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/report"><i class="icon-edit"></i><span class="hidden-tablet"> Report</span></a></li>
				<li class="nav-header hidden-tablet">Customer User</li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/customer_user"><i class="icon-user"></i></i><span class="hidden-tablet">View Customer User</span></a></li>
				<li class="nav-header hidden-tablet">Successful Story</li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/successful_story"><i class="icon-font"></i><span class="hidden-tablet"> Successful Story</span></a></li>
				<li class="nav-header hidden-tablet">Mail</li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin"><i class="icon-align-justify"></i><span class="hidden-tablet"> Mail</span></a></li>
				
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin"><i class="icon-picture"></i><span class="hidden-tablet"> Send Mail</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin"><i class="icon-calendar"></i><span class="hidden-tablet"> Send SMS</span></a></li>
				<li class="nav-header hidden-tablet">Gallery</li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/gallery_upload"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery Upload</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/gallery_category"><i class="icon-align-justify"></i><span class="hidden-tablet"> Gallery Category</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/contact_gallery_upload"><i class="icon-calendar"></i><span class="hidden-tablet">Contact Gallery Upload</span></a></li>
				<li class="nav-header hidden-tablet">Setting</li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/zodiac_sign"><i class="icon-calendar"></i><span class="hidden-tablet"> Zodiac Sign</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/nakshathra"><i class="icon-calendar"></i><span class="hidden-tablet"> Nakshathra</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/mother_tongue"><i class="icon-calendar"></i><span class="hidden-tablet"> Mother Tongue</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/luknam"><i class="icon-calendar"></i><span class="hidden-tablet"> Luknam</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/country"><i class="icon-calendar"></i><span class="hidden-tablet"> Country</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/education"><i class="icon-calendar"></i><span class="hidden-tablet"> Education</span></a></li>
				<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/occupation"><i class="icon-calendar"></i><span class="hidden-tablet"> Occupation</span></a></li> -->
			</ul>
		</div><!--/.well -->
	</div><!-- left menu ends -->