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
  <h1>Creation d'une entreprise </h1>
  <div class="Nom">
    <label for="nom">Nom de l'entreprise</label>
    <input type="text" id="nom" class="Cform">
  </div>
  <div class="nombre">
    <label for="prenom">Nombre de personne </label>
    <input type="text" id="prenom" class="Cform">
  </div>
  <div class="Secteur">
    <label for="sec" >Secteur de l'entreprise</label>
    <input type="text" id="sec" class="Cform" >
  </div>
  <div class="Confidence">
    <label for="conf" >Confiance de l'Entreprise</label>
    <input type="text" id="conf" class="Cform" >
  </div>
  <div class="Adresse">
    <label>Adresse</label>
    <label for="Adr1"></label><input type="text" id="Adr1" class="Cform">
    <label for="Adr2"></label><input type="text" id="Adr2" class="Cform">
  </div>
  <div class="button">
  <button type="submit" class="Cbutton">Creer </button>
  </div>
</form>
</body>
</html>