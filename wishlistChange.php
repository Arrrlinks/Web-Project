<?php

require_once('src/models/init.php');

if (isset($_POST['id']) && isset($_SESSION['id'])) {
    $id = $_POST['id'];
    $user_id = $_SESSION['id'];
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM isWishlisted WHERE userId = :userId AND offreId = :offreId');
    $req->execute(array(
        'userId' => $user_id,
        'offreId' => $id
    ));
    $result = $req->fetch();
    if ($result) {
        $req = $db->prepare('DELETE FROM isWishlisted WHERE userId = :userId AND offreId = :offreId');
        $req->execute(array(
            'userId' => $user_id,
            'offreId' => $id
        ));
        echo 'deleted';
    } else {
        $req = $db->prepare('INSERT INTO isWishlisted (userId, offreId) VALUES (:userId, :offreId)');
        $req->execute(array(
            'userId' => $user_id,
            'offreId' => $id
        ));
        echo 'added';
    }
} else {
    echo 'error';
}


