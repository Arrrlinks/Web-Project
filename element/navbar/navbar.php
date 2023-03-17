<div class="navbar">
    <div class="icon-group">
        <ion-icon name="heart-outline"></ion-icon>
        <ion-icon name="notifications"></ion-icon>
        <ion-icon name="person-circle-outline"></ion-icon>
        <span class="username"><?php
            session_start();
            if(isset($_SESSION['username'])) {
                echo '<span class="username">'.strtoupper($_SESSION['nom']).' '.ucfirst(strtolower($_SESSION['prenom'])).'</span>';
            }
            else {
                echo '<span class="username"><a href="login.php">Connexion</a></span>';
            }
            ?></span>
    </div>
</div>
<script src="/element/navbar/navbar.js"></script>