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
    <h1>Creation Offre</h1>
    <div class="navbarc">
        <a href="creation.php"><ion-icon name="home-sharp"></ion-icon></a>
        <a href="creationEP.php"><ion-icon name="person-add"></ion-icon></a>
        <a href="creationOffre.php"><ion-icon name="create"></ion-icon></a>
    </div>
        <div class="Nom">
            <label for="nom">Intitulé du poste </label>
            <input type="text" id="nom" class="test1">
        </div>
        <div class="Nombre">
            <label for="nombre">Nombre de place disponible </label>
            <input type="number" id="nombre" class="test1">
        </div>
        <div class="Competence">
            <label for="competence">Conpétence  </label>
            <input type="text" id="competence" class="test1">
        </div>
        <div class="Duree">
            <label for="duree">Durée du stage  </label>
            <input type="date" id="duree" class="test1">
        </div>
        <div class="Adr">
            <label for="Adr">Adresse  </label>
            <input type="text" id="Adr" class="test1">
            <input type="text" id="Adr" class="test1">
            <input type="text" id="Adr" class="test1">
        </div>
        <div class="Promotion">
            <label for="Pro">Promotion  </label>
            <input type="text" id="Pro" class="test1">
        </div>
        <div class="remuneration">
            <label for="Re">Rémunération </label>
            <input type="text" id="Re" class="test1">
        </div>
    <div class="buton">
        <button type="submit" class="test">Creer </button>
    </div>
</form>
</body>
</html>