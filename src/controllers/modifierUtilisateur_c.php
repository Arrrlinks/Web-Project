<?php
require_once("src/models/modifierUtilisateur_m.php");

$user = $_GET['user'];
$getUser = getUser();
$centres = getCentres();
$promos = getPromos();
$updateUser = updateUser();

require_once("view/modifierUtilisateur.php");
