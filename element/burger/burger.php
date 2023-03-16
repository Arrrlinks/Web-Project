<div class="burger-menu">
<div id="sidenav" class="sidenav">
    <ul>
        <li><a href="/Web-Project/index.php"><ion-icon name="home-outline"></ion-icon>Accueil</a></li>
        <li><a href="/Web-Project/search.php"><ion-icon name="briefcase-outline"></ion-icon>Navigation</a></li>
        <li><a href="#"><ion-icon name="heart-outline"></ion-icon>Wishlist</a></li>
        <li><a href="#"><ion-icon name="notifications-outline"></ion-icon>Notification</a></li>
    </ul>
    <?php
    error_reporting(0);
    ?>
    <ul class="down">
        <?php
        if(isset($_SESSION['id'])){
            echo '<li><a href="/Web-Project/account.php"><ion-icon name="person-outline"></ion-icon>Mon compte</a></li>';
        }
        else{
            echo '<li><a href="/Web-Project/login.php"><ion-icon name="person-outline"></ion-icon>Mon compte</a></li>';
        }
        ?>
        <li><a href="/Web-Project/login.php"><ion-icon name="enter-outline"></ion-icon>Connexion</a></li>
    </ul>
</div>
<div class="burger" id="openBtn">
    <div class="burger1" id="burger1"></div>
    <div class="burger2" id="burger2"></div>
    <div class="burger3" id="burger3"></div>
</div>
<script src="/element/burger/burger.js"></script>
</div>