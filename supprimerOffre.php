<?php

require_once('src/models/init.php');

if(isStudentSession()){
    header('Location: index.php');
}

if(isAdminSession() or isPilotSession()){
if(isset($_GET['id_Offre'])){
    $offredelete = $_GET['id_Offre'];
    $connexion = dbConnect();
    $req = $connexion->prepare("UPDATE offre set isVisible= '0' where idOffre=:offre");
    $req->bindParam(':offre', $offredelete);
    if($req->execute()){
        echo "success";
    } else{
        echo "error";
    }
}}