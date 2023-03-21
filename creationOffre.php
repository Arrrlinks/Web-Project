<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="creationOffre.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'element/burger/burger.php';
include 'element/navbar/navbar.php';
?>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<form method="post" class ="Box">
    <h1>Créer une offre</h1>
    <div class="navbarc">
        <a href="creationEntreprise.php"><ion-icon name="home-sharp"></ion-icon></a>
        <a href="creationUser.php"><ion-icon name="person-add"></ion-icon></a>
        <a href="creationOffre.php"><ion-icon name="create"></ion-icon></a>
    </div>
        <div>
            <label for="nom">Intitulé du poste</label>
            <input type="text" name="nom" id="nom" class="CreationOffreInput">
        </div>
        <div>
            <label for="nombre">Nombre de place disponible</label>
            <input type="number" id="nombre" class="CreationOffreInput">
        </div>
    <div>
        <label for="Pro">Entreprise</label>
        <select id="Pro" class="CreationOffreInput">
            <option value="1">Entreprise 1</option>
            <option value="2">Entreprise 2</option>
            <option value="3">Entreprise 3</option>
        </select>
    </div>
    <div>
        <label for="competence">Compétences</label>
        <input type="text" id="competence" class="CreationOffreInput">
        <br>
    </div>
        <div>
            <label for="Adr">Adresse</label>
            <select id="Adr" class="CreationOffreInput">
                <option value="1">Adresse 1</option>
                <option value="2">Adresse 2</option>
                <option value="3">Adresse 3</option>
            </select>
            <br>
            <label for="Re">Rémunération</label>
            <input type="text" id="Re" class="CreationOffreInput">
        </div>
        <div>
            <label for="du">Du</label>
            <input type="date" id="du" name="du" class="CreationOffreInput">
            <br>
            <label for="au">Au</label>
            <input type="date" id="au" name="du" class="CreationOffreInput">
        </div>
    <div class="button">
        <button type="submit" class="Cbutton">Creer</button>
    </div>
</form>
</body>
</html>