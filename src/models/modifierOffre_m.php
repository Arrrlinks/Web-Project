<?php
include_once("src/models/init.php");
if (isStudentSession()) {
    header("Location: index.php");
}
function getOffre(){
    $db = dbConnect();
    $offre = $_GET['offre'];
    $query = $db->prepare("SELECT * FROM offre WHERE idOffre = :offre");
    $query->bindParam(":offre", $offre);
    $query->execute();
    return $query->fetch();
}
function updateOffre() {
    if (isset($_POST['nomOffre']) && isset($_POST['numberOfPlaces']) && isset($_POST['Entreprise']) && isset($_POST['skills']) && isset($_POST['address']) && isset($_POST['salary'])&& isset($_POST['fromDate'])&& isset($_POST['toDate'])) {
        $nom = $_POST['nomOffre'];
        $taille = $_POST['numberOfPlaces'];
        $secteur = $_POST['Entreprise'];
        $type = $_POST['skills'];
        $rating = $_POST['address'];
        $email = $_POST['salary'];
        $date = $_POST['fromDate'];
        $date2 = $_POST['toDate'];
        $idOffre = $_GET['offre'];

        $db = dbConnect();

        $req = $db->prepare('UPDATE offre SET nomOffre = :nom, entreprise = :secteur, numberOfPlaces = :taille,type=:skills, address = :rating, salary = :email, date=:fromDate,date2 =:toDate WHERE idOffre = :offre');
        $req->execute(array(
            'nom' => strtolower($nom),
            'secteur' => strtolower($secteur),
            'taille' => strtolower($taille),
            'email' => strtolower($email),
            'rating' => $rating,
            'id' => $idOffre
        ));

        header("Location: index.php?navigation=&q=&userpage=1&entreprisepage=1&offrepage=1");
    }
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
