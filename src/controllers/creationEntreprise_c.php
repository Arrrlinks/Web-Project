<?php
include_once('src/models/creationEntreprise_m.php');
$isEntrepriseCreated = createEntreprise();
include_once('view/creationEntreprise.php');
?>