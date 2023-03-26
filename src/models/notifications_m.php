<?php
require_once("src/models/init.php");
ifNoSessionExit();
function getNotifications(){
    $db = dbConnect();
    if(isPilotSession() || isAdminSession()){
        $req = $db->prepare("SELECT username,nom,prenom,nomOffre,hasPostulated.idOffre,date FROM hasPostulated INNER JOIN users ON hasPostulated.idUser = users.id INNER JOIN offre ON hasPostulated.idOffre = offre.idOffre ORDER BY date DESC");
        $req->execute();
        $result = $req->fetchAll();
        return $result;
    }
}

function getStudentNotifications(){
    $db = dbConnect();
    if(isStudentSession()){
        $req = $db->prepare("SELECT username,nom,prenom,nomOffre,hasPostulated.idOffre,date FROM hasPostulated INNER JOIN users ON hasPostulated.idUser = users.id INNER JOIN offre ON hasPostulated.idOffre = offre.idOffre WHERE hasPostulated.idUser = :id ORDER BY date DESC");
        $req->execute(array(
            'id' => $_SESSION['id']
        ));
        $result = $req->fetchAll();
        return $result;
    }
}