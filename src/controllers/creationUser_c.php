<?php
require_once('src/models/creationUser_m.php');
$isUserCreated = createUser();
$centres = getCentres();
require_once('view/creationUser.php');