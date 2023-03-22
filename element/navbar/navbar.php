<div class="navbar">
    <div class="icon-group">
        <?php
        session_start();
        if(isset($_SESSION['id'])) {
            if($_SESSION['role']=='etudiant'){
                echo '<a href="#"><ion-icon name="heart-outline"></ion-icon></a>';
                echo '<a href="#"><ion-icon name="notifications"></ion-icon></a>';
            }
            else{
                echo '<a href="?creationEntreprise"><ion-icon name="add-circle-outline"></ion-icon></a>';
                echo '<a href="#"><ion-icon name="notifications"></ion-icon></a>';
            }
        }
        ?>
        <a href="?account"><ion-icon name="person-circle-outline"></ion-icon></a>
        <span class="username"><?php
            if(isset($_SESSION['username'])) {
                echo '<span class="username"><a href="?account">'.strtoupper($_SESSION['nom']).' '.ucfirst(strtolower($_SESSION['prenom'])).'</a></span>';
            }
            else {
                echo '<span class="username"><a href="?login">Connexion</a></span>';
            }
            ?>
        </span>
    </div>
</div>
<script src="/element/navbar/navbar.js"></script>