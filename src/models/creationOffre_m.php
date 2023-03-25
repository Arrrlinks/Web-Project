<?php
require_once('src/models/init.php');

if(isStudentSession()){
    header('Location: index.php');
    exit();
}

function getEntreprise(){
    $db = dbConnect();
    $req = $db->prepare('SELECT name FROM entreprise');
    $req->execute();
    return $req->fetchAll();
}

function getAdresse($entreprise){
    $db = dbConnect();
    $req = $db->prepare("select address from isLocated inner join localisation l on isLocated.idAdr = l.idAdr inner join entreprise e on isLocated.idEntreprise = e.idEnt where name=?");
    $req->execute(array($entreprise));
    $result = $req->fetchAll();
    $address=[];
    foreach($result as $value){
        $address[] = $value['address'];
    }
    return $address;
}

function createOffre(){
    if(isset($_POST['nomPoste']) && isset($_POST['nombre']) && isset($_POST['entreprise']) && isset($_POST['skills']) && isset($_POST['Adr']) && isset($_POST['salary']) && isset($_POST['fromDate']) && isset($_POST['toDate'])){
        $db = dbConnect();
        $req = $db->prepare('INSERT INTO offre (nomOffre, numberOfPlaces, entreprise, skills, address, salary, fromDate, toDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $req->execute(array($_POST['nomPoste'], $_POST['nombre'], $_POST['entreprise'], $_POST['skills'], $_POST['Adr'], $_POST['salary'], $_POST['fromDate'], $_POST['toDate']));
        $req = $db->prepare('select * from offre');
        $resultat = $req->execute();
        if($resultat){
            return true;
        }
        else{
            return false;
        }
    }
}