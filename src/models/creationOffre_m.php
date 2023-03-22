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