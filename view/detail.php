<?php $title = "Offre de Stage"; ?>
<?php $css = "detail.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

<img src="../svg/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl 2.svg" alt="tl logo" id="tl2">
<img src="../svg/br-tl 1.svg" alt="br logo" id="br1">
<img src="../svg/br-tl 2.svg" alt="br logo" id="br2">

<form method="post" class="Rectangle">
    <h1>Titre</h1>
    <div class="Box">
        <span>Localisation </span>
        <span> Information1</span>
        <span> Information1</span>
        <span> Information1</span>
        <div class="Button">
            <button type="submit" class="Postuler">Postuler</button>
            <button type="submit" class="Postuler">Ajouter à la wishlist</button>
        </div>
    </div>
</form>


<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>