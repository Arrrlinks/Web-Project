<?php


require_once('src/models/navigation_m.php');
$page = $_GET['page'];
$usersResult = getUsersResult();
$offresResult = getOffresResult();
$entreprisesResult = getEntreprisesResult();

$totalPages = totalPages();
require_once('view/navigation.php');