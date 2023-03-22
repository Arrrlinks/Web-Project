<?php $title = "CesiEnFait"; ?>
<?php $css = "navigation.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

<img src="../svgs/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svgs/br-tl%202.svg" alt="tl logo" id="tl2">
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
    <div class="bas-boxstage">
          <div class="stars-icon">
            <div class="confiance">Confiance du pilote :</div>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star-half"></ion-icon>
          </div>
          <div class="group-likeapply">
        <ion-icon class="like-icon" name="heart-outline"></ion-icon>
        <button class="apply-button">Postuler</button>
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
<script src="../navigation.js"></script>



<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>