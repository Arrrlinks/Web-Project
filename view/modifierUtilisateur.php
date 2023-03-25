<?php $title = "Modifier un utilisateur"; ?>
<?php $css = "modifierUtilisateur.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">

<form method="post" class="Box" onsubmit="return submitForm(event, this);">
    <h1>Modifier d'utilisateur</h1>
    <div class="Ensemble"></div>
    <!-- <div class="ButtonR">
        <input type="radio" name="role" class="demo5" id="demo5-a" value="etudiant" checked required>
        <label for="demo5-a">Etudiant</label>
        <input type="radio" name="role" class="demo5" id="demo5-b" value="pilote" required>
        <label for="demo5-b">Pilote</label>
    </div>-->
    <div class="navbarc">
        <a href="modifierEntreprise.php">
            <ion-icon name="home-sharp"></ion-icon>
        </a>
        <a href="modifierUtilisateur.php">
            <ion-icon name="person-add"></ion-icon>
        </a>
        <a href="modifierOffre.php">
            <ion-icon name="create"></ion-icon>
        </a>
    </div>
    <div>
        <label for="prenomU">Prénom</label>
        <input type="text" id="prenomU" name="prenomU" value ="<?php echo $getUser['prenom'] ?>" class="UserCreationInput" required>
    </div>
    <div>
        <label for="nomU">Nom</label>
        <input type="text" id="nomU" name="nomU" value="<?php echo $getUser['nom'] ?>" class="UserCreationInput" required>
    </div>
    <div>
        <label for="Centre">Centre CESI</label>
        <input type="text" id="Centre" name="Centre" value ="<?php echo $getUser['centre'] ?>" class="UserCreationInput" required>
    </div>
    <div>
        <label for="Promo">Promotion</label>
        <input type="text" id="Promo" name="Promo" value="<?php echo $getUser['promo'] ?>" class="UserCreationInput" required>
    </div>
    <div class="button">
        <button type="submit" class="CreationUserButton">Modifier</button>
    </div>
    <?php $updateUser ?>
</form>

<script type="text/javascript" src="script/modifierUtilisateur.js"></script>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>