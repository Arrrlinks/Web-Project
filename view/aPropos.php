<?php $title = "A propos"; ?>
<?php $css = "aPropos.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>
<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
<img src="../svg/br-tl%201.svg" alt="br logo" id="br1">
<img src="../svg/br-tl%202.svg" alt="br logo" id="br2">



<body>
<div class="rectangle">
    <h1>A propos de nous </h1>
    <div class="Sommes">
        <label>Qui sommes-nous ?</label> <br>
        <p>Nous sommes une équipe de développeurs web, nous avons réalisé ce site pour les étudiants
            CESI qui sont à la recherche d'un stage. Notre équipe est composée de trois personnes : De Romain Morel
            Antoine Faure et Quentin Bessot</p>
    </div><br>
    <div class="Donnees">
        <label>Données personnelles</label><br>
        <p> Le traitement de vos données à caractère personnel est régi par notre Charte du respect de la vie privée, disponible depuis la section "Charte de Protection des Données Personnelles", conformément au Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016<a class="editButton" href="?rgpd"> RGPD </a></p>
    </div>
    <div class="Mention">
        <label>Mentions légales</label><br>
        <p>Vous trouverez les mentions legal en cliquant sur le lien ci-dessous : </p>
        <a class="editButton" href="?mentionLegale">Mentions légales </a>
    </div>
</div>
</body>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>