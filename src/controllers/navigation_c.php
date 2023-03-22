<?php
require_once('src/models/navigation_m.php');
$usersResult = getUsersResult();
$offresResult = getOffresResult();
$entreprisesResult = getEntreprisesResult();
$page= $_GET['page'];
require_once('view/navigation.php');