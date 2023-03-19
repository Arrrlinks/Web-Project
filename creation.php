<!DOCTYPE html>
<html lang="en">
<head>
  <title>Creation Entreprise</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="creation.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'element/navbar/navbar.php';
include 'element/burger/burger.php';
?>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<form method="post" class="rectangle">
  <h1>Creation d'une entreprise </h1><br>
  <div>
    <label for="name">Nom de l'entreprise</label>
    <input type="text" id="name" class="Cform">
  </div>
  <div>
    <label for="number">Nombre de personne </label>
    <input type="text" id="number" class="Cform">
  </div>
  <div>
    <label for="sec" >Secteur de l'entreprise</label>
    <input type="text" id="sec" class="Cform" >
  </div>
  <div>
    <label for="conf" >Confiance de l'Entreprise</label><br>
      <div class="rating">
          <input type="radio" id="star1" name="rating" value="5" />
          <label for="star1" title="1 étoile"><ion-icon name="star"></ion-icon></label>
          <input type="radio" id="star2" name="rating" value="4" />
          <label for="star2" title="2 étoiles"><ion-icon name="star"></ion-icon></label>
          <input type="radio" id="star3" name="rating" value="3" />
          <label for="star3" title="3 étoiles"><ion-icon name="star"></ion-icon></label>
          <input type="radio" id="star4" name="rating" value="2" />
          <label for="star4" title="4 étoiles"><ion-icon name="star"></ion-icon></label>
          <input type="radio" id="star5" name="rating" value="1" />
          <label for="star5" title="5 étoiles"><ion-icon name="star"></ion-icon></label>
      </div>

  </div>
  <div id="adresseBox">
    <label>Adresse</label>
      <span class="iconAdr">
      <ion-icon name="remove-outline" ></ion-icon>
      <ion-icon name="add-outline" onclick="addAdr()"></ion-icon>
          </span>
    <label for="Adr"></label><input type="text" id="Adr" class="adresse">
  </div>
  <div class="button">
  <button type="submit" class="Cbutton">Creer</button>
  </div>
</form>
<script src="creation.js"></script>
</body>
</html>