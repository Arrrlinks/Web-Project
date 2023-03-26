<?php
require_once("src/models/modifierEntreprise_m.php");

$entreprise = $_GET['entreprise'];
$getEntreprise = getEntreprise();
$updateEntreprise = updateEntreprise();
$getLocalisation = getLocalisation();

require_once("view/modifierEntreprise.php");