<?php
require_once('src/models/statUser_m.php');
$test =$_GET['id'];
$data=gettest($test);
require_once('view/statUser.php');
?>
