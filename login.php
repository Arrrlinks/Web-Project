<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<img src="svgs/br-tl 1.svg" alt="br logo" id="br1">
<img src="svgs/br-tl 2.svg" alt="br logo" id="br2">

<img src="svgs/tr-bl 1.svg" alt="tr logo" id="tr1">
<img src="svgs/tr-bl 2.svg" alt="tr logo" id="tr2">
<img src="svgs/tr-bl 3.svg" alt="tr logo" id="tr3">

<img src="svgs/tr-bl 1.svg" alt="tr logo" id="bl1">
<img src="svgs/tr-bl 2.svg" alt="tr logo" id="bl2">
<img src="svgs/tr-bl 3.svg" alt="tr logo" id="bl3">
<div id="la"></div>
<div id="login">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <div class="wave-group">
            <input name="id" type="text" class="input" required>
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">I</span>
                <span class="label-char" style="--index: 1">d</span>
                <span class="label-char" style="--index: 2">e</span>
                <span class="label-char" style="--index: 3">n</span>
                <span class="label-char" style="--index: 4">t</span>
                <span class="label-char" style="--index: 5">i</span>
                <span class="label-char" style="--index: 6">f</span>
                <span class="label-char" style="--index: 7">i</span>
                <span class="label-char" style="--index: 8">a</span>
                <span class="label-char" style="--index: 9">n</span>
                <span class="label-char" style="--index: 10">t</span>
            </label>
        </div>
        <div class="wave-group" id="password">
            <input name="password" type="password" class="input" required>
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">P</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">s</span>
                <span class="label-char" style="--index: 3">s</span>
                <span class="label-char" style="--index: 4">w</span>
                <span class="label-char" style="--index: 5">o</span>
                <span class="label-char" style="--index: 6">r</span>
                <span class="label-char" style="--index: 7">d</span>
            </label>
        </div>
        <?php
        if (isset($_POST['id']) && isset($_POST['password'])) {
            $id = $_POST['id'];
            $password = $_POST['password'];
            $bdd = new PDO('mysql:host=92.222.10.61;dbname=web-project;charset=utf8', 'root', '123456789');
            $req = $bdd->prepare('SELECT * FROM users WHERE username = :id');
            $req->execute(array(
                'id' => $id
            ));
            $resultat = $req->fetch();
            if (!$resultat || !(password_verify($password, $resultat['password']))) {
                echo '<p class="error">Mauvais identifiant ou mot de passe !</p>';
            } else {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['username'] = $resultat['username'];
                $_SESSION['nom'] = $resultat['nom'];
                $_SESSION['prenom'] = $resultat['prenom'];
                $_SESSION['promo'] = $resultat['promo'];
                $_SESSION['centre'] = $resultat['centre'];
                $_SESSION['role'] = $resultat['role'];
                header('Location: index.php');
            }
        }
        ?>
        <button class="login" type="submit">
            <p>Login</p>
            <svg stroke-width="4" stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
        </button>
    </form>

</div>
<?php
include 'element/burger/burger.php';
?>
</body>
</html>