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
    <label for="conf" >Confiance de l'Entreprise</label>
      <div id="half-stars-example">
          <div class="rating-group">
              <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
              <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
              <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
              <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
              <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
              <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
              <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
              <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
              <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
              <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
              <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
              <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
              <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
              <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
              <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
              <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
              <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
              <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
              <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
              <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
              <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
              <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
          </div>
          <p class="desc" style="margin-bottom: 2rem; font-family: sans-serif; font-size:0.9rem">Half stars<br/>
              Space on left side to select 0 stars</p>
      </div>
  </div>
  <div>
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