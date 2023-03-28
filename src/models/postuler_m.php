<?php
require_once('src/models/init.php');

function getOffre($id){
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM offre INNER JOIN entreprise ON offre.idEntreprise = entreprise.idEnt WHERE idOffre = ?');
    $req->execute(array($id));
    $offre = $req->fetch();
    $req2 = $db->prepare('SELECT entreprise.email FROM entreprise WHERE idEnt = ?');
    $req2->execute(array($offre['idEntreprise']));
    $offre['email'] = $req2->fetch();
    return $offre;
}

