<?php $title = "Création"; ?>
<?php $css = "creationUser.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
<form method="post" class="Box">
    <h1>Créer un utilisateur</h1>
    <div class="Ensemble"></div>
    <div class="navbarc">
        <a href="?creationEntreprise">
            <ion-icon name="home-sharp"></ion-icon>
        </a>
        <a href="?creationUser" class="selected">
            <ion-icon name="person-add"></ion-icon>
        </a>
        <a href="?creationOffre">
            <ion-icon name="create"></ion-icon>
        </a>
    </div>
    <div class="ButtonR">
        <input type="radio" name="role" class="demo5" id="demo5-a" value="etudiant" checked required>
        <label for="demo5-a">Etudiant</label>
        <?php
        if (isAdminSession()) {
            echo '<input type="radio" name="role" class="demo5" id="demo5-b" value="pilote" required> <label for="demo5-b">Pilote</label>';
        }
        else {
            echo '<input type="radio" name="role" class="disabled" id="demo5-b" value="pilote" required disabled> <label for="demo5-b">Pilote</label>';
        }
        ?>
    </div>

    <div>
        <label for="prenomU">Prénom</label>
        <input type="text" id="prenomU" name="prenomU" class="UserCreationInput" required>
    </div>
    <div>
        <label for="nomU">Nom</label>
        <input type="text" id="nomU" name="nomU" class="UserCreationInput" required>
    </div>
    <div>
        <label for="Centre">Centre CESI</label>
        <select type="text" id="Centre" name="Centre" class="UserCreationInput" required>
            <?php
            foreach ($centres as $centre)
                echo "<option value='$centre[0]'>$centre[0]</option>";
            ?>
        </select>
    </div>
    <div>
        <label for="Promo">Promotion</label>
        <select type="text" id="Promo" name="Promo" class="UserCreationInput" required>
            <?php
            foreach ($promos as $promo)
                echo "<option value='$promo[0]'>$promo[0]</option>";
            ?>
        </select>
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" class="UserCreationInput" required>
    </div>
    <br>
    <div class="button">
        <button type="submit" class="CreationUserButton">Creer</button>
    </div>
</form>
<script type="text/javascript" src="creationUser.js"></script>
<?php
if($isUserCreated){ ?>
    <script>
        const username=<?php echo json_encode($isUserCreated); ?>;
        showSuccessAlert(username);</script>
<?php }elseif (!$isUserCreated && $isUserCreated != null){ ?>
    <script>showErrorAlert();</script>
<?php } ?>
<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>