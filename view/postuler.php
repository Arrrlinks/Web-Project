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
        <span><?= $offre['name'] ?></span>
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
            <?php if(isset($_SESSION['id'])){
                if(isPilotSession()){?>
                    <button type="submit" class="Postuler"><a href=<?= 'mailto:'.$offre['email'][0] ?>>Contacter</a></button>
                <?php }elseif($offre['isVisible']){
                    echo "<button type='submit' id='postuler' style='--id:". $_GET['id'] ."' class='Postuler'><a href='mailto:".$offre['email'][0]."'>Postuler</a></button>";
                    }}
            ?>

        </div>
    </div>
</form>

<script src="script/postuler.js"></script>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>