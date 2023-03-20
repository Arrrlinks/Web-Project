<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation Utilisateur</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="creationUser.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'element/burger/burger.php';
include 'element/navbar/navbar.php';
?>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<form method="post" class="Box">
    <h1>Creation d'utilisateur</h1>
    <div class="Ensemble"></div>
    <div class="ButtonR">
        <input type="radio" name="demo5" class="demo5" id="demo5-a" checked>
        <label for="demo5-a">Etudiant</label>
        <input type="radio" name="demo5" class="demo5" id="demo5-b">
        <label for="demo5-b">Pilote</label>
    </div>
    <div class="navbarc">
        <a href="creationEntreprise.php">
            <ion-icon name="home-sharp"></ion-icon>
        </a>
        <a href="creationUser.php">
            <ion-icon name="person-add"></ion-icon>
        </a>
        <a href="creationOffre.php">
            <ion-icon name="create"></ion-icon>
        </a>
    </div>
    <div>
        <label for="nomU">Prénom</label>
        <input type="text" id="prenomU" class="UserCreationInput">
    </div>
    <div>
        <label for="nomU">Nom</label>
        <input type="text" id="nomU" class="UserCreationInput">
    </div>
    <div>
        <label for="Centre">Centre CESI</label>
        <input type="text" id="Centre" class="UserCreationInput">
    </div>
    <div>
        <label for="Promo">Promotion</label>
        <input type="text" id="Promo" class="UserCreationInput">
    </div>
    <div class="button">
        <button type="submit" class="CreationUserButton">Creer</button>
    </div>
</form>
