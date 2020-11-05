<?php
$mURL = $_GET['url'];
// Get content of a GET call (file_get_contents) from the given URL given from AJAX GET call
echo file_get_contents($mURL);
?>
