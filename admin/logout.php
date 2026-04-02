<?php 
session_start();
include('include/config.php'); 
session_unset();
session_destroy();
echo "<script>window.location.href='".BASEURL."/admin'</script>";

?>