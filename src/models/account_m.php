<?php
require_once('src/models/init.php');
function getAccount()
{
    ifNoSessionExit();
    if(isset($_SESSION['id']))
    {
        $username = $_SESSION['username'];
        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
        $centre = $_SESSION['centre'];
        $promo = $_SESSION['promo'];
        $role = $_SESSION['role'];
        $data = array(
            'username' => $username,
            'nom' => $nom,
            'prenom' => $prenom,
            'centre' => $centre,
            'promo' => $promo,
            'role' => $role
        );
        return $data;
    }
    else
    {
        header('Location: ?login');
    }
}