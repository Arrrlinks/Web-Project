<?php $title = "Création"; ?>
<?php $css = "creationOffre.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

    <img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
    <img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
    <form method="post" class="Box">
        <h1>Créer une offre</h1>
        <div class="navbarc">
            <a href="?creationEntreprise">
                <ion-icon name="home-sharp"></ion-icon>
            </a>
            <a href="?creationUser">
                <ion-icon name="person-add"></ion-icon>
            </a>
            <a href="?creationOffre" class="selected">
                <ion-icon name="create"></ion-icon>
            </a>
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

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>