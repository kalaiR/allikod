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
		<footer>
			<p class="pull-left">&copy; <a href="http://www.vallikodivanniarmatrimonial.com/" target="_blank">Vallikodi</a> 2017</p>
			<p class="pull-right">Powered by: <a href="http://www.etekchnoservices.com/">ETekchno Sertvices</a></p>
		</footer>
			<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url(); ?>assets/admin/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url(); ?>assets/admin/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url(); ?>assets/admin/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url(); ?>assets/admin/js/charisma.js"></script>
	<!-- Custom.js for functionality -->
	<script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/sidebar-menu.js"></script>
    <script>
        $.sidebarMenu($('.sidebar-menu'))
    </script>
	<script>
		//CSRF Protection declaration
        var csfrData = {};
        csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
        var csrf_name = "<?php echo $this->security->get_csrf_token_name(); ?>";

        //Admin base url declaration (route path)
        var admin_baseurl = "<?php echo base_url(); ?>index.php/admin/";
    </script>
	
		
</body>
</html>