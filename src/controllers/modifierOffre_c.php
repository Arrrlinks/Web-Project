<?php
require_once("src/models/modifierOffre_m.php");
$offre = $_GET['offre'];
$getOffre = getOffre();
updateOffre();
$entreprise = getEntreprise();

require_once("view/modifierOffre.php");