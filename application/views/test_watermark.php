<form name="frmRegistration" id="registration-form" method="post" action="test_watermark" enctype="multipart/form-data">
	<input type="file" click-type="type1" id="uploadedfile" class="picupload" name="uploadedfile">
	<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
	<input type="submit" name="finish" id="finish" value="Finish">
</form>