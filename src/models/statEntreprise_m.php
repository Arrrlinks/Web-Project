<?php
include_once("src/models/init.php");

function gettest($idEnt)
{
    if (isset($_SESSION['id']) && isset($_GET["idEnt"]) && $_GET['idEnt'] != null) {
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT name,numberOfEmployees,activity,scorePilot,localisation.address FROM entreprise INNER JOIN isLocated on entreprise.idEnt = isLocated.idEntreprise INNER JOIN localisation ON isLocated.idAdr = localisation.idAdr  WHERE idEnt= :idEnt');
        $req->execute(array(
            'idEnt'=>$idEnt
        ));
        $resultat = $req->fetchAll();
        return $resultat;
        }
    else {
        header("Location: index.php");
    }
}