<?php
include_once("src/models/init.php");
if (isStudentSession()) {
    header("Location: index.php");
}

function getUser(){
    $db = dbConnect();
    $user = $_GET['user'];
    $query = $db->prepare("SELECT * FROM users WHERE id = :user");
    $query->bindParam(":user", $user);
    $query->execute();
    return $query->fetch();
}
function updateUser() {
    if (isset($_POST['prenomU']) && isset($_POST['nomU']) && isset($_POST['Centre']) && isset($_POST['Promo'])) {
        $nom = $_POST['nomU'];
        $prenom = $_POST['prenomU'];
        $centre = $_POST['Centre'];
        $promo = $_POST['Promo'];

        $db = dbConnect();
        $req = $db->prepare('UPDATE users SET nom = :nom, prenom = :prenom, centre = :centre, promo = :promo WHERE id = :id');
        $req->execute(array(
            'nom' => strtolower($nom),
            'prenom' => strtolower($prenom),
            'promo' => ucwords(strtolower($promo)),
            'centre' => ucfirst(strtolower($centre)),
            'id' => $_GET['user']
        ));
        header("Location: index.php?navigation=&q=&userpage=1&entreprisepage=1&offrepage=1");
    }
}

function getCentres() {
    $db = dbConnect();
    $query = $db->prepare("SELECT centre FROM users where id = :id");
    $query->execute(array(
        'id' => $_GET['user']));
    $centre = $query->fetchAll();
    $query = $db->prepare("SELECT centre_name FROM centres where centres.centre_name != :centre ORDER BY centre_name");
    $query->execute(array(
        'centre' => $centre[0]['centre']
    ));
    $centres = $query->fetchAll();
    return $centre+$centres;
}

function getPromos() {
    $db = dbConnect();
    $query = $db->prepare("SELECT  promo FROM users where id = :id");
    $query->execute(array(
        'id' => $_GET['user']
    ));
    $promo = $query->fetchAll();
    $query = $db->prepare("SELECT promo_name FROM promo where promo.promo_name != :promo ORDER BY promo_name");
    $query->execute(array(
        'promo' => $promo[0]['promo']
    ));
    $promos = $query->fetchAll();
    return $promo+$promos;
}
