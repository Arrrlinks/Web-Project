<?php


// Then include the required models and retrieve the results
require_once('src/models/navigation_m.php');
$page = $_GET['page'];
$usersResult = getUsersResult();
$offresResult = getOffresResult();
$entreprisesResult = getEntreprisesResult();

// Calculate the total number of pages based on the number of results
$totalPages = totalPages();
require_once('view/navigation.php');