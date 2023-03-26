<?php $title = "". strtoupper($data[0]['nom']) . ' ' . ucfirst(strtolower($data[0]['prenom'])) .""; ?>
<?php $css = "statUser.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

    <img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
    <img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
    <div class="box-account">
        <h1 class="title"><?= strtoupper($data[0]['nom']).' '.ucfirst(strtolower($data[0]['prenom'])) ?></h1>
        <div></div>
        <div class="info">
            <div class="label">Nom d'utilisateur:</div>
            <div class="value"><?= $data[0]['username'] ?></div>
            <div class="label">Nom et Prénom:</div>
            <div class="value"><?= strtoupper($data[0]['nom']).' '.ucfirst(strtolower($data[0]['prenom'])) ?></div>
            <div class="label">Centre:</div>
            <div class="value"><?= $data [0]['centre'] ?></div>
            <div class="label">Promotion:</div>
            <div class="value"> <?= $data[0]['promo'] ?></div>
            <div class="label">Rôle:</div>
            <div class="value"><?= ucfirst(strtolower($data[0]['role']))?></div>
            <div class="label">Nombre de postulation</div>
            <div class="value"><?= ucfirst(strtolower($data[0]['promo']))?></div>
        </div>
        <img src="../svg/user-illustration.svg" alt="user illustration" id="user_illustration">
    </div>
<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>