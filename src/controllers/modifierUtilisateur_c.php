<?php
require_once("src/models/modifierUtilisateur_m.php");

$user = $_GET['user'];
$getUser = getUser();
$updateUser = updateUser();

require_once("view/modifierUtilisateur.php");
