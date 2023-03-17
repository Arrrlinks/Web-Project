<div class="navbar">
    <div class="icon-group">
        <?php
        session_start();
        if(isset($_SESSION['id'])) {
            if($_SESSION['role']=='user'){
                echo '<a href="#"><ion-icon name="heart-outline"></ion-icon></a>';
                echo '<a href="#"><ion-icon name="notifications"></ion-icon></a>';
            }
            else{
                echo '<a href="/Web-Project/creation.php"><ion-icon name="add-circle-outline"></ion-icon></a>';
                echo '<a href="#"><ion-icon name="notifications"></ion-icon></a>';
            }
        }
        ?>
        <a href="/Web-Project/account.php"><ion-icon name="person-circle-outline"></ion-icon></a>
        <span class="username"><?php
            if(isset($_SESSION['username'])) {
                echo '<span class="username"><a href="/Web-Project/account.php">'.strtoupper($_SESSION['nom']).' '.ucfirst(strtolower($_SESSION['prenom'])).'</a></span>';
            }
            else {
                echo '<span class="username"><a href="login.php">Connexion</a></span>';
            }
            ?>
        </span>
    </div>
</div>
<script src="/element/navbar/navbar.js"></script>