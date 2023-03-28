<?php $title = ucwords($data[0]['name']) ?>
<?php $css = "statEntreprise.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>
<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
<form method="post" class="rectangle">
    <h1><?= ucwords($data[0]['name']) ?></h1>
    <div>
    </div>
    <div>
        <label for="nameEntr">Nom de l'entreprise</label>
        <div class="value"><?= ucwords($data[0]['name']) ?></div>
    </div>
    <div>
        <label for="numberOfEmployee">Nombre de personne</label>
        <div class="value"><?= $data[0]['numberOfEmployees'] ?></div>
    </div>
    <div>
        <label for="secteurEntr">Secteur de l'entreprise</label>
        <div class="value"><?= $data[0]['activity'] ?></div>
    </div>
    <div>
        <label for="conf">Confiance de l'Entreprise</label><br>
        <div class="value"><?= $data[0]['scorePilot'],"/5" ?></div>
    </div>
    <div id="adresseBox">
        <label>Adresse</label>
        <div class="value"><?= $data[0]['address'] ?></div>

</form>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>
