<?php

require_once('src/models/init.php');

if(isStudentSession()){
    header('Location: index.php');
}

if(isAdminSession()){
if(isset($_GET['id_utilisateur'])){
    $userdelete = $_GET['id_utilisateur'];
    $connexion = dbConnect();
    $req = $connexion->prepare("DELETE FROM users WHERE id = :user");
    $req->bindParam(':user', $userdelete);
    if($req->execute()){
        echo "success";
    } else{
        echo "error";
    }
}}

if(isPilotSession()){
    if(isset($_GET['id_utilisateur'])){
        $userdelete = $_GET['id_utilisateur'];
        $connexion = dbConnect();
        $req = $connexion->prepare("DELETE FROM users WHERE id = :user and role ='etudiant'");
        $req->bindParam(':user', $userdelete);
        if($req->execute()){
            echo "success";
        } else{
            echo "error";
        }
    }
}