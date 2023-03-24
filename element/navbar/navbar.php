<div class="navbar">
    <form action="?navigation" class="nav-searchbar" method="get">
        <svg class="searchicon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
        <label>
            <input type="hidden" name="navigation">
            <input name="q" placeholder="Rechercher un stage" type="search">
            <input type="hidden" name="userpage" value="1">
            <input type="hidden" name="entreprisepage" value="1">
            <input type="hidden" name="offrepage" value="1">
        </label>
    </form>
    <div class="icon-group">
        <?php
        session_start();
        if(isset($_SESSION['id'])) {
            if($_SESSION['role']=='etudiant'){
                echo '<a href="?wishlist&userpage=1"><ion-icon name="heart-outline"></ion-icon></a>';
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