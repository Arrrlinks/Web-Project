<?php
require_once('src/models/statEtudiant_m.php');
$test =$_GET['id'];
$data=gettest($test);
require_once('view/statEtudiant.php');
?>
