<?php $title = "Mon Compte"; ?>
<?php $css = "account.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>
<img src="../svgs/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svgs/br-tl%202.svg" alt="tl logo" id="tl2">
<div class="box-account">
  <h1 class="title">Compte utilisateur</h1>
    <div></div>
  <div class="info">
      <div class="label">Nom d'utilisateur:</div>
      <div class="value"><?= $data['username'] ?></div>
      <div class="label">Nom et Prénom:</div>
      <div class="value"><?= strtoupper($data['nom']).' '.ucfirst(strtolower($data['prenom'])) ?></div>
      <div class="label">Centre:</div>
      <div class="value"><?= $data['centre'] ?></div>
      <div class="label">Promotion:</div>
      <div class="value"> <?= $data['promo'] ?></div>
      <div class="label">Rôle:</div>
      <div class="value"><?= ucfirst(strtolower($data['role']))?></div>
      <button><a href="?pwdReset">Modifier le mot de passe</a></button>
  </div>
    <img src="../svgs/user-illustration.svg" alt="user illustration" id="user_illustration">
  </div>


<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>