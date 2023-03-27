<?php $title = "Modifier une entreprise"; ?>
<?php $css = "modifierEntreprise.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>


<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
<form method="post" class="rectangle">
    <h1>Modifier une entreprise </h1>
    <div class="navbarc">
        <a href="modifierEntreprise.php"><ion-icon name="home-sharp"></ion-icon></a>
        <a href="modifierUtilisateur.php"><ion-icon name="person-add"></ion-icon></a>
        <a href="modifierOffre.php"><ion-icon name="create"></ion-icon></a>
    </div>
    <div>
        <label for="nameEntr">Nom de l'entreprise</label>
        <input type="text" name="nameEntr" id="nameEntr" class="Cform" value="<?php echo $getEntreprise['name'] ?>" required>
    </div>
    <div>
        <label for="numberOfEmployee">Nombre d'employés</label>
        <input type="number" name="numberOfEmployee" id="numberOfEmployee" class="Cform" value="<?php echo $getEntreprise['numberOfEmployees'] ?>" required>
    </div>
    <div>
        <label for="secteurEntr">Secteur de l'entreprise</label>
        <input type="text" name="secteurEntr" id="secteurEntr" class="Cform" value="<?php echo $getEntreprise['activity'] ?>" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="Cform" value="<?php echo $getEntreprise['email'] ?>" required>
    </div>
    <div id="adresseBox">
        <label>Adresse</label>
        <span class="iconAdr">
            <button type="button" class="addAdr" onclick="removeAdr()"><ion-icon name="remove-outline"></ion-icon></button>
            <button type="button" class="addAdr" onclick="addAdr()"><ion-icon name="add-outline"></ion-icon></button>
      </span>
        <?php
        foreach ($getLocalisation as $row) {
            echo'<label for="Adr"></label><input type="text" name="Adr" id="Adr" class="adresse" value="' . $row['address'] . '">';
        }
        ?>
    </div>
    <div>
        <label for="conf">Confiance attribuée</label><br>
        <div class="rating">
            <input type="radio" id="star1" name="rating" value="5" <?php if($getEntreprise['scorePilot']==5){echo 'checked="checked"';} ?> required>
            <label for="star1" title="5 étoiles">
                <ion-icon name="star"></ion-icon>
            </label>
            <input type="radio" id="star2" name="rating" value="4" <?php if($getEntreprise['scorePilot']==4){echo 'checked="checked"';} ?> required>
            <label for="star2" title="4 étoiles">
                <ion-icon name="star"></ion-icon>
            </label>
            <input type="radio" id="star3" name="rating" value="3" <?php if($getEntreprise['scorePilot']==3){echo 'checked="checked"';} ?> required>
            <label for="star3" title="3 étoiles">
                <ion-icon name="star"></ion-icon>
            </label>
            <input type="radio" id="star4" name="rating" value="2" <?php if($getEntreprise['scorePilot']==2){echo 'checked="checked"';} ?> required>
            <label for="star4" title="2 étoiles">
                <ion-icon name="star"></ion-icon>
            </label>
            <input type="radio" id="star5" name="rating" value="1" <?php if($getEntreprise['scorePilot']==1){echo 'checked="checked"';} ?> required>
            <label for="star5" title="1 étoile">
                <ion-icon name="star"></ion-icon>
            </label>
        </div>
    </div>
    <div class="button">
        <button type="submit" class="Mbutton">Modifier</button>
    </div>
    <?php $updateEntreprise ?>
</form>
<script src="../creationEntreprise.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo file_get_contents('key.txt');?>&libraries=places"></script>
<script> initAutocomplete(); </script>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>
