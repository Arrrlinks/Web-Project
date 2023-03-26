<?php
require_once('src/models/init.php');

if (isset($_POST['id']) && $_POST['id'] != null && (isPilotSession() || isAdminSession())) {
    $id = $_POST['id'];
    $db = dbConnect();
    $req = $db->prepare('SELECT visibility FROM entreprise WHERE idEnt = :id');
    $req->execute(array(
        'id' => $id
    ));
    $result = $req->fetch();
    if ($result && is_array($result) && $result['visibility'] == 1) {
        $req = $db->prepare('UPDATE entreprise SET visibility = 0 WHERE idEnt = :id');
        $req->execute(array(
            'id' => $id
        ));
        echo 'masked';
    } else {
        $req = $db->prepare('UPDATE entreprise SET visibility = 1 WHERE idEnt = :id');
        $req->execute(array(
            'id' => $id
        ));
        echo 'unmasked';
    }
} else {
    echo 'error';
}