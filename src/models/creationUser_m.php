<?php
require_once('src/models/init.php');

if(isStudentSession()){
    header('Location: index.php');
    exit();
}

function createUser(){
    if (isset($_POST['prenomU']) && isset($_POST['nomU']) && isset($_POST['role']) && isset($_POST['Centre']) && isset($_POST['Promo']) && isset($_POST['password'])) {
        $nom = $_POST['nomU'];
        $prenom = $_POST['prenomU'];
        $role = $_POST['role'];
        $centre = $_POST['Centre'];
        $promo = $_POST['Promo'];
        $password = $_POST['password'];

        $username = "cesi." . strtolower($prenom[0]) . strtolower($nom);
        for($i = 0; $i < strlen($username); $i++){
            if($username[$i] == " "){
                $username[$i] = ".";
            }
        }

        $number = 0;
        $bdd = new PDO('mysql:host=92.222.10.61;dbname=web-project;charset=utf8', 'root', '123456789');

        $req = $bdd->prepare('SELECT MAX(number) FROM users WHERE nom = :nom AND prenom = :prenom');
        $req->execute(array(
            'nom' => strtolower($nom),
            'prenom' => strtolower($prenom)
        ));
        $resultat = $req->fetch();

        if ($resultat['MAX(number)'] !== null) {
            $username = $username . ($resultat['MAX(number)'] + 1);
            $number = $resultat['MAX(number)'] + 1;
        }


        $req = $bdd->prepare('INSERT INTO users (username, nom, prenom, role, promo, centre,password,number) VALUES (:username, :nom, :prenom, :role, :promo, :centre, :password, :number)');
        $req->execute(array(
            'username' => $username,
            'nom' => strtolower($nom),
            'prenom' => strtolower($prenom),
            'role' => strtolower($role),
            'promo' => ucwords(strtolower($promo)),
            'centre' => ucfirst(strtolower($centre)),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'number' => $number
        ));
        $req = $bdd->prepare('SELECT * FROM users WHERE username = :username');
        $req->execute(array(
            'username' => $username
        ));
        $resultat = $req->fetch();
        if ($resultat) {
            return $username;
        }
        else{
            return false;
        }
    }
}

function getCentres(){
    $bdd = dbConnect();
    $req = $bdd->prepare('SELECT centre_name FROM centres ORDER BY centre_name');
    $req->execute();
    return $req->fetchAll();
}

function getPromos(){
    $bdd = dbConnect();
    $req = $bdd->prepare('SELECT promo_name FROM promo');
    $req->execute();
    return $req->fetchAll();
}