<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation Utilisateur</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="creationUser.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>

<?php
include 'element/burger/burger.php';
include 'element/navbar/navbar.php';
?>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<form method="post" action="creationUser.php" class="Box">
    <h1>Creation d'utilisateur</h1>
    <div class="Ensemble"></div>
    <div class="ButtonR">
        <input type="radio" name="role" class="demo5" id="demo5-a" value="etudiant" checked required>
        <label for="demo5-a">Etudiant</label>
        <input type="radio" name="role" class="demo5" id="demo5-b" value="pilote" required>
        <label for="demo5-b">Pilote</label>
    </div>
    <div class="navbarc">
        <a href="creationEntreprise.php">
            <ion-icon name="home-sharp"></ion-icon>
        </a>
        <a href="creationUser.php">
            <ion-icon name="person-add"></ion-icon>
        </a>
        <a href="creationOffre.php">
            <ion-icon name="create"></ion-icon>
        </a>
    </div>
    <div>
        <label for="prenomU">Prénom</label>
        <input type="text" id="prenomU" name="prenomU" class="UserCreationInput" required>
    </div>
    <div>
        <label for="nomU">Nom</label>
        <input type="text" id="nomU" name="nomU" class="UserCreationInput" required>
    </div>
    <div>
        <label for="Centre">Centre CESI</label>
        <input type="text" id="Centre" name="Centre" class="UserCreationInput" required>
    </div>
    <div>
        <label for="Promo">Promotion</label>
        <input type="text" id="Promo" name="Promo" class="UserCreationInput" required>
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="text" id="password" name="password" class="UserCreationInput" required>
    </div>
    <div class="button">
        <button type="submit" class="CreationUserButton">Creer</button>
    </div>
    <?php
    if (isset($_POST['prenomU']) && isset($_POST['nomU']) && isset($_POST['role']) && isset($_POST['Centre']) && isset($_POST['Promo']) && isset($_POST['password'])) {
        $nom = $_POST['nomU'];
        $prenom = $_POST['prenomU'];
        $role = $_POST['role'];
        $centre = $_POST['Centre'];
        $promo = $_POST['Promo'];
        $password = $_POST['password'];

        $username = "cesi." . strtolower($prenom[0]) . strtolower($nom);
        $number = 0;
        $bdd = new PDO('mysql:host=92.222.10.61;dbname=web-project;charset=utf8', 'root', '123456789');

        $req = $bdd->prepare('SELECT MAX(number) FROM users WHERE nom = :nom AND prenom = :prenom');
        $req->execute(array(
            'nom' => strtolower($nom),
            'prenom' => strtolower($prenom)
        ));
        $resultat = $req->fetch();

        if ($resultat['MAX(number)'] !== null) {
            $username = $username . ($resultat['MAX(number)'] + 1);
            $number = $resultat['MAX(number)'] + 1;
        }


        $req = $bdd->prepare('INSERT INTO users (username, nom, prenom, role, promo, centre,password,number) VALUES (:username, :nom, :prenom, :role, :promo, :centre, :password, :number)');
        $req->execute(array(
            'username' => $username,
            'nom' => strtolower($nom),
            'prenom' => strtolower($prenom),
            'role' => strtolower($role),
            'promo' => ucwords(strtolower($promo)),
            'centre' => ucfirst(strtolower($centre)),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'number' => $number
        ));
        echo "L'utilisateur a bien été créé sous le nom de " . $username;
    }
    ?>
</form>