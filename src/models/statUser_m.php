<?php
include_once("src/models/init.php");
if (isStudentSession()) {
    header("Location: index.php");
}
function gettest($id)
{
    if (isset($_SESSION['id']) && isset($_GET["id"]) && $_GET['id'] != null) {
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT username,nom,prenom,role,promo,centre FROM users WHERE id= :id');
        $req->execute(array(
            'id'=>$id
        ));
        $resultat = $req->fetchAll();
        if($resultat){
            if($resultat[0]['role'] === "admin" || $resultat[0]['role'] === "pilote" && !isAdminSession()){
                header("Location: index.php");
            }
            return $resultat;
        }
    }
    else {
        header("Location: index.php");
    }
}