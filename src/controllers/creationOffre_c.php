<?php
require_once('src/models/creationOffre_m.php');
$entreprise = getEntreprise();
$isOffreCreated = createOffre();
require_once('view/creationOffre.php');