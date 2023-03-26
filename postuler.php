<?php
require_once("src/models/init.php");
if(isset($_POST['id']) && isset($_SESSION['id']) && !isPilotSession()){
    $id = $_POST['id'];
    $date = date('Y-m-d H:i:s');
    $db = dbConnect();
    $req = $db->prepare("SELECT * FROM hasPostulated WHERE idUser = :idUser AND idOffre = :idOffre");
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'idOffre' => $id
    ));
    $result = $req->fetch();
    if(!$result){
        $req = $db->prepare("INSERT INTO hasPostulated (idUser,idOffre,date) VALUES (:idUser,:idOffre,:date)");
        $req->execute(array(
            'idUser' => $_SESSION['id'],
            'idOffre' => $id,
            'date' => $date
        ));
    }
}