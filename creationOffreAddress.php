<?php
require_once('src/models/init.php');
require_once ('src/models/creationOffre_m.php');

if (isset($_POST['Entr'])) {
    $address = $_POST['Entr'];
    // Traitement de la variable en PHP
    echo json_encode(getAdresse($address));
}
else {
    echo 'error';
}

?>
