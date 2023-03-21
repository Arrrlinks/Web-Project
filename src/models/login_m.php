<?php
require_once('src/models/init.php');
function isLogin()
{
    if (isset($_POST['id']) && isset($_POST['password'])) {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $bdd = new PDO('mysql:host=92.222.10.61;dbname=web-project;charset=utf8', 'root', '123456789');
        $req = $bdd->prepare('SELECT id,username,nom,prenom,role,promo,centre,password FROM users WHERE username = :id');
        $req->execute(array(
            'id' => $id
        ));
        $resultat = $req->fetch();
        if (!$resultat || !(password_verify($password, $resultat['password']))) {
            return '<p class="error">Mauvais identifiant ou mot de passe !</p>';
        } else {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['username'] = $resultat['username'];
            $_SESSION['nom'] = $resultat['nom'];
            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['promo'] = $resultat['promo'];
            $_SESSION['centre'] = $resultat['centre'];
            $_SESSION['role'] = $resultat['role'];
        }
    }
    ifSessionExit();
}
?>