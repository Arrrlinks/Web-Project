<?php
include_once("src/models/init.php");
if (isStudentSession() ){
    header("Location: index.php");
}

function getEntreprise(){
    $db = dbConnect();
    $entreprise = $_GET['entreprise'];
    $query = $db->prepare("SELECT * FROM entreprise WHERE idEnt = :entreprise");
    $query->bindParam(":entreprise", $entreprise);
    $query->execute();
    return $query->fetch();
}

function updateEntreprise() {
    if (isset($_POST['nameEntr']) && isset($_POST['numberOfEmployee']) && isset($_POST['secteurEntr']) && isset($_POST['Adr']) && isset($_POST['rating']) && isset($_POST['email'])) {
        $nom = $_POST['nameEntr'];
        $taille = $_POST['numberOfEmployee'];
        $secteur = $_POST['secteurEntr'];
        $type = $_POST['Adr'];
        $rating = $_POST['rating'];
        $email = $_POST['email'];
        $idEnt = $_GET['entreprise'];

        $db = dbConnect();

        $req = $db->prepare('UPDATE entreprise SET name = :nom, activity = :secteur, numberofEmployees = :taille, scorePilot = :rating, email = :email WHERE idEnt = :id');
        $req->execute(array(
            'nom' => strtolower($nom),
            'secteur' => strtolower($secteur),
            'taille' => strtolower($taille),
            'email' => strtolower($email),
            'rating' => $rating,
            'id' => $idEnt
        ));

        foreach($type as $adr){
            $req = $db->prepare('INSERT INTO localisation (address) VALUES (:address)');
            $req->execute(array(
                'address' => $adr
            ));
            $idAdr = $db->lastInsertId();

            $req = $db->prepare('INSERT INTO isLocated (idEntreprise,idAdr) VALUES (:idEnt,:idAdr)');
            $req->execute(array(
                'idEnt' => $idEnt,
                'idAdr' => $idAdr
            ));
        }

        header("Location: index.php?navigation=&q=&userpage=1&entreprisepage=1&offrepage=1");
    }
}

function getLocalisation(){
    $db = dbConnect();
    $query = $db->prepare("SELECT localisation.address FROM localisation inner join isLocated
    on localisation.idAdr = isLocated.idAdr inner join entreprise on entreprise.idEnt = isLocated.idEntreprise
    WHERE entreprise.idEnt = :entreprise");
    $query->execute(array(
        'entreprise' => $_GET['entreprise']
    ));
    return $query->fetchAll();
}