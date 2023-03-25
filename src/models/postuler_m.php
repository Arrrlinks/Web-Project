<?php
require_once('src/models/init.php');

function getOffre($id){
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM offre WHERE idOffre = ?');
    $req->execute(array($id));
    $offre = $req->fetch();
    $req2 = $db->prepare('SELECT email FROM entreprise WHERE name = ?');
    $req2->execute(array($offre['entreprise']));
    $offre['email'] = $req2->fetch();
    return $offre;
}

