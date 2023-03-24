<?php $title = "stat Etudiant"; ?>
<?php $css = "statEntreprise.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>
<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
<form method="post" class="rectangle">
    <h1>Stat Entreprise </h1>
    <div>
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
</form>
<script src="../creationEntreprise.js"></script>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>
