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
            <label for="nomPoste">Intitulé du poste</label>
            <input type="text" name="nomPoste" id="nomPoste" class="CreationOffreInput" required>
        </div>
        <div>
            <label for="nombre">Nombre de place disponible</label>
            <input type="number" id="nombre" name="nombre" class="CreationOffreInput" required>
        </div>
        <div>
            <label for="entreprise">Entreprise</label>
            <select id="entreprise" name="entreprise" class="CreationOffreInput" required>
                <option value="" disabled selected></option>
                <?php
                foreach ($entreprise as $value) {
                    echo '<option value="' . $value['name'] . '">' . $value['name'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div>
            <label for="skills">Compétences</label>
            <input type="text" id="skills" name="skills" class="CreationOffreInput" required>
            <br>
        </div>
        <div>
            <label for="Adr">Adresse</label>
            <select id="Adr" name="Adr" class="CreationOffreInput" required>
            </select>
            <br>
            <label for="salary">Rémunération</label>
            <input type="text" id="salary" name="salary" class="CreationOffreInput" required>
        </div>
        <div>
            <label for="fromDate">Du</label>
            <input type="date" id="fromDate" name="fromDate" class="CreationOffreInput" required>
            <br>
            <label for="toDate">Au</label>
            <input type="date" id="toDate" name="toDate" class="CreationOffreInput" required>
        </div>
        <div class="button">
            <button type="submit" class="Cbutton">Creer</button>
        </div>

    </form>
    <script>
        const entrepriseSelect = document.getElementById('entreprise');
        const adrSelect = document.getElementById('Adr');
        const entrepriseOptions = <?php echo json_encode($entreprise); ?>;
    </script>
    <script type="text/javascript" src="creationOffre.js"></script>







<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>