<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="search.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'element/burger/burger.php';
include 'element/navbar/navbar.php';
session_start();
if(!isset($_SESSION['id'])) {
    header('Location: login.php');
}
?>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<div class=box-categorie>
    <div class="categorie">
      <button class="categorie1">Catégorie 1</button>
      <button class="categorie2">Catégorie 2</button>
      <button class="categorie3">Catégorie 3</button>
      <button class="categorie4">Catégorie 4</button>
      <button class="categorie5">Catégorie 5</button>
      <button class="categorie6">Catégorie 6</button>
      <button class="categorie7">Catégorie 7</button>
    </div>
</div>
<div class="result">
<div class=box-stage>
    <h1 class="titlebox">Stages</h1>
  <div class="stage">
    <div class="title">Intitulé de stage</div>
    <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et nibh nec risus scelerisque ornare. Vivamus egestas, justo vitae placerat vestibulum, tortor lacus accumsan orci, ac eleifend lacus libero a erat.</div>
    <ion-icon class="like-icon" name="heart-outline"></ion-icon>
    <div>
        <button class="apply-button">Postuler</button>
      <div class="stars-icon">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star-half"></ion-icon>
      </div>
    </div>
  </div>
</div>
<div class=box-personne>
    <h1 class="titlebox">Personnes</h1>
    <div class="personne">
        <div class="Name">MOREL Romain</div>
        <div class="test">CPIA2 Nancy</div>
        <div class="test">Etudiant</div>
        <div class="icon">
            <ion-icon class="edit-icon" name="create-outline"></ion-icon>
            <ion-icon class="delete-icon" name="trash-outline"></ion-icon>
        </div>
    </div>
</div>

<div class=box-personne>
    <h1 class="titlebox">Entreprises</h1>
    <div class="personne">
        <div class="Name">CESI</div>
        <div class="test">CPIA2 Nancy</div>
        <div class="test">Etudiant</div>
        <div class="icon">
            <ion-icon class="edit-icon" name="create-outline"></ion-icon>
            <ion-icon class="eye-icon" name="eye-outline"></ion-icon>
        </div>
    </div>
</div>

</body>
</html>