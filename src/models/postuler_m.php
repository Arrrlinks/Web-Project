<?php
require_once('src/models/init.php');

function getOffre($id){
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM offre WHERE idOffre = ?');
    $req->execute(array($id));
    $offre = $req->fetch();
    return $offre;
}