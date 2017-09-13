<html>
<head>
<title>Codeigniter Ajax Pagination Example  </title>
</head>
<body>
<h3>Codeigniter Ajax Pagination Example  </h3>
<div class="row" id="ajaxdata">
<?php
foreach($results as $data) {
 echo $data->user_email . " - " . $data->user_fname . "<br>";
}
?>
<ul class="pagination" id="ajax_pagingsearc">
<p><?php echo $links; ?></p>
</ul>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
<script type="text/javascript">
    $(function() {
      var csfrData = {};
        csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
      var csrf_name = "<?php echo $this->security->get_csrf_token_name(); ?>";
      applyPagination();
   
      function applyPagination() {
        $("#ajax_pagingsearc a").click(function() {
        var url = $(this).attr("href");
    
          $.ajax({
            type: "POST",
            data: "ajax=1&"+csrf_name+'='+csfrData[csrf_name],
            url: url,
           success: function(msg) {
            
              $("#ajaxdata").html(msg);
              applyPagination();
            }
          });
        return false;
        });
      }
    });
</script>
</body>
</html>