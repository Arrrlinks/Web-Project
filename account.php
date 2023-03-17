<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="account.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'element/burger/burger.php';
include 'element/navbar/navbar.php';
session_start();
if(!isset($_SESSION['id'])) {
    header('Location: login.php');
}
?>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<div class="box-account">
  <h1 class="title">Compte utilisateur</h1>
    <div></div>
  <div class="info">
      <div class="label">Nom d'utilisateur:</div>
      <div class="value"><?php
          if(isset($_SESSION['id'])) {
              echo $_SESSION['username'];
          }
          ?></div>
      <div class="label">Nom et Prénom:</div>
      <div class="value">
          <?php
          if(isset($_SESSION['id'])) {
              echo strtoupper($_SESSION['nom']).' '.ucfirst(strtolower($_SESSION['prenom']));
          }
          ?>
      </div>
      <div class="label">Centre:</div>
      <div class="value">
          <?php
          if(isset($_SESSION['id'])) {
              echo $_SESSION['centre'];
          }
          ?>
      </div>
      <div class="label">Promotion:</div>
      <div class="value">
          <?php
            if(isset($_SESSION['id'])) {
                echo $_SESSION['promo'];
            }
          ?>
      </div>
      <div class="label">Rôle:</div>
      <div class="value">
            <?php
            if(isset($_SESSION['id'])) {
                echo ucfirst(strtolower($_SESSION['role']));
            }
            ?>
      </div>
  </div>
    <img src="svgs/user-illustration.svg" alt="user illustration" id="user_illustration">
  </div>

</body>
</html>

