<?php $title = $offre['nomOffre']; ?>
<?php $css = "postuler.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

<img src="../svg/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl 2.svg" alt="tl logo" id="tl2">
<img src="../svg/br-tl 1.svg" alt="br logo" id="br1">
<img src="../svg/br-tl 2.svg" alt="br logo" id="br2">

<form method="post" class="Rectangle">
    <h1><?= $offre['nomOffre'] ?></h1>
    <div class="Box">
        <span><?= $offre['entreprise'] ?></span>
        <span>Durée : Du <?= date('d/m/Y', strtotime($offre['fromDate'])) ?> au <?= date('d/m/Y', strtotime($offre['toDate'])) ?></span>
        <span><?php
            echo '<a target="_blank" href="https://www.google.com/maps/search/'.$offre['address'].'">';
            echo $offre['address'];
            echo '</a>';
            ?>
        </span>
        <span>Compétences requises : <?= $offre['skills'] ?></span>
        <span>Nombre de places restantes : <?= $offre['numberOfPlaces'] ?></span>
        <span>Rémunération : <?= $offre['salary'] ?>€/mois</span>

        <div class="Button">
            <button type="submit" class="Postuler">Postuler</button>
        </div>
    </div>
</form>


<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>