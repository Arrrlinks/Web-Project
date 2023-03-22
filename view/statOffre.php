<?php $title = "StatOffre"; ?>
<?php $css = "statOffre.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<form method="post" class="Rectangle">
    <h1>Nom de l'offre</h1>
    <div class="Box">
        <div class="contentContainer">
            <span> Competence</span>
            <span> Nom de l'entreprise </span>
        </div>
        <div class="contentContainer">
            <span>Localisation </span>
            <span> type de promotion</span>
        </div>
        <div class="contentContainer">
            <span> Duree de stage</span>
            <span> Date de l'offre</span>
        </div>
        <div class="contentContainer">
            <span> Nombre de place</span>
            <span>rénumération</span>
        </div>
        <href=""><button input type="button">Retour</button>
    </div>
</form>
<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>
