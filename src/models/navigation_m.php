<?php
require_once('src/models/init.php');
ifNoSessionExit();

function getUsersResult()
{
    $recherche = $_GET['q'];
    $bdd=dbConnect();
    $req = $bdd->prepare('SELECT nom,prenom,role,promo,centre FROM users where username like "%'.$recherche.'%" or nom like "%'.$recherche.'%" or prenom like "%'.$recherche.'%" or role like "%'.$recherche.'%" or promo like "%'.$recherche.'%" or centre like "%'.$recherche.'%"');
    $req->execute();
    return $req->fetchAll();
}

function getOffresResult()
{

}

function getEntreprisesResult()
{

}
