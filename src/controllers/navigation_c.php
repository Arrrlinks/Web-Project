<?php
require_once('src/models/navigation_m.php');
$pageUser = $_GET['userpage'];
$pageOffre = $_GET['offrepage'];
$pageEntreprise = $_GET['entreprisepage'];

isInternshipStarted();

$usersResult = getUsersResult();
$offresResult = getOffresResult();
$entreprisesResult = getEntreprisesResult();

$totalPagesUser = totalPagesUser();
$totalPagesOffre = totalPagesOffre();
$totalPagesEntreprise = totalPagesEntreprise();

require_once('view/navigation.php');