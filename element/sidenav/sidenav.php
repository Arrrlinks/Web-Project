<div class="burger-menu">
    <div id="sidenav" class="sidenav">
        <ul>
            <?php
            error_reporting(0);
            session_start();
            echo '<li><a href="?"><ion-icon name="home-outline"></ion-icon>Accueil</a></li>';
            echo '<li><a href="?navigation=&q=&userpage=1&entreprisepage=1&offrepage=1"><ion-icon name="briefcase-outline"></ion-icon>Navigation</a></li>';
            if (isset($_SESSION['id'])) {
                if (strtolower($_SESSION['role']) === 'etudiant') {
                    echo '<li><a href="?wishlist&wishlistpage=1"><ion-icon name="heart-outline"></ion-icon>Wishlist</a></li>';
                } if(strtolower($_SESSION['role']) === 'pilote') {
                    echo '<li><a href="?creationEntreprise"><ion-icon name="add-circle-outline"></ion-icon>Creation</a></li>';
                }
                if (strtolower($_SESSION['role']) === 'admin') {
                    echo '<li><a href="?wishlist&wishlistpage=1"><ion-icon name="heart-outline"></ion-icon>Wishlist</a></li>';
                    echo '<li><a href="?creationEntreprise"><ion-icon name="add-circle-outline"></ion-icon>Creation</a></li>';

                }
                echo '<li><a href="?notifications"><ion-icon name="notifications-outline"></ion-icon>Notification</a></li>';
            }
            ?>
        </ul>
        <?php
        ?>
        <ul class="down">
            <?php
            echo '<li><a href="?account"><ion-icon name="person-outline"></ion-icon>Mon compte</a></li>';
            ?>

            <?php
            if (isset($_SESSION['id'])) {
                echo '<li><a href="?logout"><ion-icon name="log-out-outline"></ion-icon>Déconnexion</a></li>';
            } else {
                echo '<li><a href="?login"><ion-icon name="enter-outline"></ion-icon>Connexion</a></li>';
            }
            ?>

        </ul>
    </div>
    <div class="burger" id="openBtn">
        <div class="burger1" id="burger1"></div>
        <div class="burger2" id="burger2"></div>
        <div class="burger3" id="burger3"></div>
    </div>
</div>
<script src="/element/sidenav/sidenav.js"></script>