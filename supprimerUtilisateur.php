<?php

require_once('src/models/init.php');

if(isStudentSession()){
    header('Location: index.php');
}

if(isAdminSession()){
if(isset($_GET['id_utilisateur'])){
    $userdelete = $_GET['id_utilisateur'];
    $connexion = dbConnect();
    $req = $connexion->prepare("DELETE FROM isWishlisted WHERE userId = :user");
    $req->execute(array(':user' => $userdelete));
    $req = $connexion->prepare("DELETE FROM hasPostulated WHERE idUser = :user");
    $req->execute(array(':user' => $userdelete));
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
        $req = $connexion->prepare("DELETE FROM isWishlisted WHERE userId = :user");
        $req->execute(array(':user' => $userdelete));
        $req = $connexion->prepare("DELETE FROM hasPostulated WHERE idUser = :user");
        $req->execute(array(':user' => $userdelete));
        $req = $connexion->prepare("DELETE FROM users WHERE role ='etudiant' AND id = :user");
        $req->execute(array(':user' => $userdelete));
        $result = $req->fetch();
        if($result){
            echo "success";
        } else{
            echo "error";
        }
    }
}