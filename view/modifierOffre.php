<?php $title = "Modifier une offre"; ?>
<?php $css = "modifierOffre.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
<form method="post" class ="Box">
    <h1>Modifier Offre</h1>
    <div class="navbarc">
        <a href="modifierEntreprise.php"><ion-icon name="home-sharp"></ion-icon></a>
        <a href="modifierUtilisateur.php"><ion-icon name="person-add"></ion-icon></a>
        <a href="modifierOffre.php"><ion-icon name="create"></ion-icon></a>
    </div>
    <div class="Nom">
        <label for="nom">Intitulé du poste</label>
        <input type="text" name="nom" id="nom" class="ModifierOffreInput">
    </div>
    <div class="Nombre">
        <label for="nombre">Nombre de place disponible</label>
        <input type="number" id="nombre" class="ModifierOffreInput">
    </div>
    <div class="Competence">
        <label for="competence">Conpétence</label>
        <input type="text" id="competence" class="ModifierOffreInput">
    </div>
    <div class="Duree">
        <label for="duree">Durée du stage</label>
        <input type="date" id="duree" class="ModifierOffreInput">
    </div>
    <div class="Adr">
        <label for="Adr">Adresse</label>
        <input type="text" id="Adr" class="ModifierOffreInput">
    </div>
    <div class="Promotion">
        <label for="Pro">Promotion</label>
        <input type="text" id="Pro" class="ModifierOffreInput">
    </div>
    <div class="remuneration">
        <label for="Re">Rémunération</label>
        <input type="text" id="Re" class="ModifierOffreInput">
    </div>
    <div class="button">
        <button type="submit" class="Mbutton">Modifier</button>
    </div>
</form>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>