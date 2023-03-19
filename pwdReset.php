<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pwdReset.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
?>
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
    <h1>Change Password</h1>
    <form action="pwdReset.php" method="post">
        <div class="wave-group">
            <input name="current" type="password" class="input" required>
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">C</span>
                <span class="label-char" style="--index: 1">u</span>
                <span class="label-char" style="--index: 2">r</span>
                <span class="label-char" style="--index: 3">r</span>
                <span class="label-char" style="--index: 4">e</span>
                <span class="label-char" style="--index: 5">n</span>
                <span class="label-char" style="--index: 6">t</span>
                <span class="label-char space" style="--index: 7"> </span>
                <span class="label-char" style="--index: 8">P</span>
                <span class="label-char" style="--index: 9">a</span>
                <span class="label-char" style="--index: 10">s</span>
                <span class="label-char" style="--index: 11">w</span>
                <span class="label-char" style="--index: 12">o</span>
                <span class="label-char" style="--index: 13">r</span>
                <span class="label-char" style="--index: 14">d</span>
            </label>
        </div>
        <div class="wave-group" id="password">
            <input name="new" type="password" class="input" required>
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">N</span>
                <span class="label-char" style="--index: 1">e</span>
                <span class="label-char" style="--index: 2">w</span>
                <span class="label-char space" style="--index: 3"> </span>
                <span class="label-char" style="--index: 4">P</span>
                <span class="label-char" style="--index: 5">a</span>
                <span class="label-char" style="--index: 6">s</span>
                <span class="label-char" style="--index: 7">s</span>
                <span class="label-char" style="--index: 8">w</span>
                <span class="label-char" style="--index: 9">o</span>
                <span class="label-char" style="--index: 10">r</span>
                <span class="label-char" style="--index: 11">d</span>
            </label>
        </div>
        <?php
        if (isset($_POST['current']) && isset($_POST['new'])) {
            $current = $_POST['current'];
            $new = $_POST['new'];
            $bdd = new PDO('mysql:host=92.222.10.61;dbname=web-project;charset=utf8', 'root', '123456789');
            $req = $bdd->prepare('SELECT password FROM users WHERE id = :id');
            $req->execute(array('id' => $_SESSION["id"]));
            $result = $req->fetch();
            if (password_verify($current, $result['password'])) {
                $req2 = $bdd->prepare('UPDATE users SET password = :password WHERE id = :id');
                $req2->execute(array(
                    'password' => password_hash($new, PASSWORD_DEFAULT),
                    'id' => $_SESSION["id"]
                ));
                header("Location: index.php");
            } else {
               echo '<p class="error">Wrong password</p>';
            }
        }
        ?>
        <button class="login" type="submit">
            <p>Change</p>
            <svg stroke-width="4" stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-6 w-6"
                 xmlns="http://www.w3.org/2000/svg">
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