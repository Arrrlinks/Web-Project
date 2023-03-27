<?php
include_once("src/models/init.php");
if (isStudentSession()) {
    header("Location: index.php");
}
function getOffre(){
    $db = dbConnect();
    $offre = $_GET['offre'];
    $query = $db->prepare("SELECT * FROM offre WHERE idOffre = :offre");
    $query->execute(array(
        'offre' => $offre
    ));
    $query->execute();
    return $query->fetch();
}
function updateOffre() {
    if (isset($_POST['nomPoste']) && isset($_POST['nombre']) && isset($_POST['entreprise']) && isset($_POST['skills']) && isset($_POST['Adr']) && isset($_POST['salary'])&& isset($_POST['fromDate'])&& isset($_POST['toDate'])) {
        $nom = $_POST['nomPoste'];
        $numberOfEmployee = $_POST['nombre'];
        $entreprise = $_POST['entreprise'];
        $skills = $_POST['skills'];
        $address = $_POST['Adr'];
        $salary = $_POST['salary'];
        $fromDate = $_POST['fromDate'];
        $toDate = $_POST['toDate'];
        $offre = $_GET['offre'];

        $db = dbConnect();

        $req = $db->prepare("UPDATE offre SET nomOffre = :nom, numberOfPlaces = :numberOfEmployee, skills = :skills, salary = :salary, fromDate = :fromDate, toDate = :toDate, address = :address, entreprise = :entreprise  WHERE idOffre = :offre");
        $req->execute(array(
            'nom' => $nom,
            'numberOfEmployee' => $numberOfEmployee,
            'entreprise' => $entreprise,
            'skills' => $skills,
            'address' => $address,
            'salary' => $salary,
            'fromDate' => $fromDate,
            'toDate' => $toDate,
            'offre' => $offre
        ));
        $result = $req->fetchAll();
        header("Location: index.php?navigation=&q=&userpage=1&entreprisepage=1&offrepage=1");

    }
}
function getEntreprise(){
    $db = dbConnect();
    $req = $db->prepare('SELECT entreprise FROM offre WHERE idOffre = :offre');
    $req->execute(array(
        'offre' => $_GET['offre']
    ));
    $entreprise = $req->fetchAll();

    $req = $db->prepare('SELECT name FROM entreprise WHERE name != :entreprise ORDER BY name');
    $req->execute(array(
        'entreprise' => $entreprise[0]['entreprise']
    ));
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
