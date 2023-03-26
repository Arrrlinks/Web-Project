<?php
require_once('src/models/statEntreprise_m.php');
$test =$_GET['idEnt'];
$data=gettest($test);
require_once('view/statEntreprise.php');
?>