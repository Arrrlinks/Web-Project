<?php $title = "Mention légale"; ?>
<?php $css = "mentionlegal.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>
<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
<div class="rectangle">
    <h1>Mention légale</h1><br>
    <p>Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance en l'économie numérique, il est précisé aux utilisateurs du site CesiEnFait l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p><br>
    <div class="Edition">
        <h2>Edition du site </h2><br>
        <p> Le présent site, accessible à l’URL www.cesienfait.fr (le « Site »), est édité par:</p> <br>
        <p> CesiEnFait , société au capital de 500000 euros, inscrite au R.C.S. de NANCY sous le numéro RCS VANNES B 321 654 987, dont le siège social est situé au 6 Rue Bois du Chêne le Loup, 54500 Vandœuvre-lès-Nancy, représenté(e) par Antoine FAURE dûment habilité(e)</p>
    </div>
    <div class="Hébergement">
        <h2>Hébergement</h2><br>
        <p>Le Site est hébergé par la société OVH SAS, situé 2 rue Kellermann - BP 80157 - 59053 Roubaix Cedex 1, (contact téléphonique ou email : 1007).</p>
    </div>
    <div class="Directeur">
        <h2>Directeur de publication </h2><br>
        <p>Le Directeur de la publication du Site est Antoine FAURE</p>
    </div>
    <div class="contacter">
        <h2>Nous contacter </h2><br>
        <p>
            Par téléphone : +33798765432 <br>
            Par email : contact@cesienfait.fr<br>
            Par courrier : 6 Rue Bois du Chêne le Loup, 54500 Vandœuvre-lès-Nancy
        </p>
    </div>
</div>
<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>