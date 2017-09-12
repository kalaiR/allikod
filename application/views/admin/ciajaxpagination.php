<?php
foreach($results as $data) {
 echo $data->user_email . " - " . $data->user_fname . "<br>";
}
?>
<ul class="pagination" id="ajax_pagingsearc">
<p><?php echo $links; ?></p>
</ul>