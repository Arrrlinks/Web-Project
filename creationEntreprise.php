<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creation Entreprise</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="creationEntreprise.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'element/navbar/navbar.php';
include 'element/burger/burger.php';
?>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<form method="post" class="rectangle">
    <h1>Créer une entreprise </h1>
    <div class="navbarc">
        <a href="creationEntreprise.php"><ion-icon name="home-sharp"></ion-icon></a>
        <a href="creationUser.php"><ion-icon name="person-add"></ion-icon></a>
        <a href="creationOffre.php"><ion-icon name="create"></ion-icon></a>
    </div>
    <div>
        <label for="nameEntr">Nom de l'entreprise</label>
        <input type="text" name="nameEntr" id="nameEntr" class="Cform" required>
    </div>
    <div>
        <label for="numberOfEmployee">Nombre de personne</label>
        <input type="number" name="numberOfEmployee" id="numberOfEmployee" class="Cform" required>
    </div>
    <div>
        <label for="secteurEntr">Secteur de l'entreprise</label>
        <input type="text" name="secteurEntr" id="secteurEntr" class="Cform" required>
    </div>
    <div>
        <label for="conf">Confiance de l'Entreprise</label><br>
        <div class="rating">
            <input type="radio" id="star1" name="rating" value="5" required>
            <label for="star1" title="1 étoile">
                <ion-icon name="star"></ion-icon>
            </label>
            <input type="radio" id="star2" name="rating" value="4" required>
            <label for="star2" title="2 étoiles">
                <ion-icon name="star"></ion-icon>
            </label>
            <input type="radio" id="star3" name="rating" value="3" required>
            <label for="star3" title="3 étoiles">
                <ion-icon name="star"></ion-icon>
            </label>
            <input type="radio" id="star4" name="rating" value="2" required>
            <label for="star4" title="4 étoiles">
                <ion-icon name="star"></ion-icon>
            </label>
            <input type="radio" id="star5" name="rating" value="1" required>
            <label for="star5" title="5 étoiles">
                <ion-icon name="star"></ion-icon>
            </label>
        </div>

    </div>
    <div id="adresseBox">
        <label>Adresse</label>
        <span class="iconAdr">
            <button type="button" class="addAdr" onclick="removeAdr()"><ion-icon name="remove-outline"></ion-icon></button>
            <button type="button" class="addAdr" onclick="addAdr()"><ion-icon name="add-outline"></ion-icon></button>
      </span>
        <label for="Adr"></label><input type="text" name="Adr" id="Adr" class="adresse">
    </div>
    <div class="button">
        <button type="submit" class="Cbutton">Creer</button>
    </div>
</form>
<script src="creationEntreprise.js"></script>
</body>
</html>