<?php
require_once("src/models/init.php");
ifNoSessionExit();
function getNotifications()
{
    $db = dbConnect();
    if (isPilotSession() || isAdminSession()) {
        $req = $db->prepare("SELECT username,nom,prenom,nomOffre,hasPostulated.idOffre,date,hasBeenAccepted FROM hasPostulated INNER JOIN users ON hasPostulated.idUser = users.id INNER JOIN offre ON hasPostulated.idOffre = offre.idOffre ORDER BY date DESC");
        $req->execute();
        $result = $req->fetchAll();
        return $result;
    }
}

function getStudentNotifications()
{
    $db = dbConnect();
    if (isStudentSession()) {
        $req = $db->prepare("SELECT username,nom,prenom,nomOffre,toDate,hasPostulated.idOffre,date,hasBeenAccepted FROM hasPostulated INNER JOIN users ON hasPostulated.idUser = users.id INNER JOIN offre ON hasPostulated.idOffre = offre.idOffre WHERE hasPostulated.idUser = :id ORDER BY date DESC");
        $req->execute(array(
            'id' => $_SESSION['id']
        ));
        $result = $req->fetchAll();
        return $result;
    }
}

function acceptStudent()
{
    $db = dbConnect();
    $date = date('Y-m-d');
    $req = $db->prepare("UPDATE hasPostulated SET hasBeenAccepted = 1, date = :date WHERE idUser = :idUser AND idOffre = :idOffre");
    $req->execute(array(
        'date' => $date,
        'idUser' => $_POST['idUser'],
        'idOffre' => $_POST['idOffre']
    ));
    $req = $db->prepare("UPDATE offre SET offre.numberOfPlaces = offre.numberOfPlaces - 1 WHERE idOffre = :idOffre");
    $req->execute(array(
        'idOffre' => $_POST['idOffre']
    ));
    $req = $db->prepare("SELECT offre.numberOfPlaces FROM offre WHERE idOffre = :idOffre");
    $req->execute(array(
        'idOffre' => $_POST['idOffre']
    ));
    $result = $req->fetchAll();
    if ($result[0]['numberOfPlaces'] == 0) {
        $req = $db->prepare("UPDATE offre SET offre.isVisible = 0 WHERE idOffre = :idOffre");
        $req->execute(array(
            'idOffre' => $_POST['idOffre']
        ));
    }
    $req = $db->prepare("SELECT entreprise.idEnt FROM offre INNER JOIN entreprise ON offre.idEntreprise = entreprise.idEnt WHERE offre.idOffre = :idOffre");
    $req->execute(array(
        'idOffre' => $_POST['idOffre']
    ));
    $result = $req->fetchAll();
    $idEnt = $result[0]['idEnt'];
    $req = $db->prepare("UPDATE entreprise SET entreprise.numberOfInternship = entreprise.numberOfInternship + 1 WHERE idEnt = :idEnt");
    $req->execute(array(
        'idEnt' => $idEnt
    ));
}

function deleteStudent()
{
    $db = dbConnect();
    $req = $db->prepare("DELETE FROM hasPostulated WHERE idUser = :idUser AND idOffre = :idOffre");
    $req->execute(array(
        'idUser' => $_POST['idUser'],
        'idOffre' => $_POST['idOffre']
    ));
}

function rate()
{
    $db = dbConnect();
    $rating = $_POST['rating'];
    $req = $db->prepare("SELECT entreprise.idEnt,entreprise.score FROM offre INNER JOIN entreprise ON offre.idEntreprise = entreprise.idEnt WHERE offre.idOffre = :idOffre");
    $req->execute(array(
        'idOffre' => $_POST['idOffre']
    ));
    $result = $req->fetchAll();
    $score = $result[0]['score'];
    if ($score == null) {
        $req = $db->prepare("UPDATE entreprise SET score = :rating WHERE idEnt = :idEnt");
        $req->execute(array(
            'rating' => $rating,
            'idEnt' => $result[0]['idEnt']
        ));
    } elseif ($score != null) {
        $req = $db->prepare("UPDATE entreprise SET score = :rating WHERE idEnt = :idEnt");
        $req->execute(array(
            'rating' => ($score + $rating) / 2,
            'idEnt' => $result[0]['idEnt']
        ));
    }
    $req = $db->prepare('DELETE FROM hasPostulated WHERE idUser = :idUser AND idOffre = :idOffre');
    $req->execute(array(
        'idUser' => $_POST['idUser'],
        'idOffre' => $_POST['idOffre']
    ));
}

if (isset($_POST['hasBeenAccepted'])) {
    acceptStudent();
    header('Location: ?notifications');
}

if (isset($_POST['delete'])) {
    deleteStudent();
    header('Location: ?notifications');
}

if (isset($_POST['rating'])) {
    rate();
    header('Location: ?notifications');
}