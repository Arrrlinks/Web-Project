<?php
require_once('src/models/postuler_m.php');
$offre=getOffre($_GET['id']);
require_once('view/postuler.php');
?>