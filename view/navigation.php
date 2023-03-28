<?php $title = "CesiEnFait"; ?>
<?php $css = "navigation.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">

<div class="result">
<div class="box-stage" id="box-stage">
    <h1 class="titlebox">Stages</h1>
    <?php
    if ($offresResult === null || empty($offresResult)) {
        echo '<div class="aucunresultat">';
        echo '<div>Aucun résultat pour votre recherche.</div>';
        echo '</div>';
    } else {
        foreach ($offresResult as $row) {
            echo '<div class="stage">';
            echo '<div class="title">' . $row['nomOffre'] .'</div>';
            echo '<div class="description">Compétences requises : '. $row['skills'] .'</div>';
            echo '<div class="bas-boxstage">';
            echo '<div class="stars-icon">';
            echo '<div class="confiance">Note attribuée :</div>';
            if($row['score'] == null){
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= floor($row['scorePilot']) ) {
                        echo '<ion-icon name="star"></ion-icon>';
                    } else {
                        echo '<ion-icon name="star-outline"></ion-icon>';
                    }
                }
            }
            else{
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= floor(($row['scorePilot'] + $row['score'] )/ 2)) {
                        echo '<ion-icon name="star"></ion-icon>';
                    } else {
                        echo '<ion-icon name="star-outline"></ion-icon>';
                    }
                }
            }
            echo '</div>';
            echo '<div class="group-likeapply">';
            if (isStudentSession() or isAdminSession()) {
                echo '</button>';
                if(isAdminSession() or isPilotSession()){
                    echo '<div>';
                    echo '<a class="editButton" href="index.php?modifierOffre&offre=' . $row['idOffre'] . '"><ion-icon class="edit-icon" name="create-outline"></ion-icon></a>';
                    echo '<button class="deleteButtonuser" id="supprimerOffre-' . $row['idOffre'] . '"><ion-icon class="delete-icon" name="trash-outline"></ion-icon></button>';
                    echo '</div>';
                }
                echo '<button class="wishlistButton" id="nodisplay-button" style="--id:' . $row['idOffre'] . '">';
                if (isWishlisted($row['idOffre']))
                    echo '<ion-icon class="like-icon" name="heart"></ion-icon>';
                else
                    echo '<ion-icon class="like-icon" name="heart-outline"></ion-icon>';

            }
            echo '<button class="apply-button" style="--id:'. $row['idOffre'] .'"><a class="offre" href="?postuler&id='. $row['idOffre'] .'">';
            if (isPilotSession())
                echo 'Voir';
            else
                echo 'Postuler';
            echo'</a></button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        if ($totalPagesOffre > 1) {
            echo '<div class="pagination">';
            if ($pageOffre > 1) {
                echo '<a href="?navigation&q=' . $_GET['q'] . '&userpage=' . ($pageUser) . '&entreprisepage=' . ($pageEntreprise) . '&offrepage=' . ($pageOffre - 1) . '#box-stage">';
                echo '<ion-icon class=pagination-icon name="arrow-back-outline"></ion-icon>';
                echo '</a>';
            }
            if ($pageOffre < $totalPagesOffre) {
                echo '<a href="?navigation&q=' . $_GET['q'] . '&userpage=' . ($pageUser) . '&entreprisepage=' . ($pageEntreprise) . '&offrepage=' . ($pageOffre  + 1) . '#box-stage">';
                echo '<ion-icon class=pagination-icon name="arrow-forward-outline"></ion-icon>';
                echo '</a>';
            }
            echo '</div>';
        }
    }
    ?>
</div>

<?php
        if(isPilotSession() or isAdminSession()){
        echo'<div class=box-personne id="box-personne">';
        echo'<h1 class="titlebox">Personnes</h1>';
        if ($usersResult === null || empty($usersResult)) {
            echo '<div class="aucunresultat">';
            echo '<div>Aucun résultat pour votre recherche.</div>';
            echo '</div>';
        } else {
            foreach ($usersResult as $row) {
                echo '<div class="personne">';
                echo '<div class="name">' . strtoupper($row['nom']) . ' ' . ucfirst(strtolower($row['prenom'])) . '</div>';
                echo '<div class="promotion">' . $row['promo'] . '</div>';
                echo '<div class="role">' . ucfirst(strtolower($row['role'])) . '</div>';
                echo '<div class="icon">';
                if($row['role'] == 'pilote' and isPilotSession()) {
                    echo '<div>';
                    echo '<ion-icon class="edit-icon" name="create-outline" style="display:none"></ion-icon>';
                    echo '<ion-icon class="delete-icon" name="trash-outline" style="display:none"></ion-icon>';
                    echo '</div>';
                } else{
                    echo '<div>';
                    echo '<a class="editButton" href="index.php?modifierUtilisateur&user=' . $row['id'] . '"><ion-icon class="edit-icon" name="create-outline"></ion-icon></a>';
                    echo '<button class="deleteButtonuser" id="supprimerUser-' . $row['id'] . '"><ion-icon class="delete-icon" name="trash-outline"></ion-icon></button>';
                    echo '</div>';
                }
                if($row['role'] == 'etudiant') {
                    echo '<a href="?statUser&id='.$row['id'].'"><button class="stats-button">Statistiques</button></a>';
                }
                if($row['role'] == 'pilote') {
                        echo '<button class="stats-button-off">Statistiques</button>';
                }
                echo '</div>';
                echo '</div>';
            }

            if ($totalPagesUser > 1) {
                echo '<div class="pagination">';
                if ($pageUser > 1) {
                    echo '<a href="?navigation&q=' . $_GET['q'] . '&userpage=' . ($pageUser - 1) . '&entreprisepage=' . ($pageEntreprise) . '&offrepage=' . ($pageOffre) . '#box-personne">';
                    echo '<ion-icon class=pagination-icon name="arrow-back-outline"></ion-icon>';
                    echo '</a>';
                }
                if ($pageUser < $totalPagesUser) {
                    echo '<a href="?navigation&q=' . $_GET['q'] . '&userpage=' . ($pageUser + 1) . '&entreprisepage=' . ($pageEntreprise) . '&offrepage=' . ($pageOffre) . '#box-personne">';
                    echo '<ion-icon class=pagination-icon name="arrow-forward-outline"></ion-icon>';
                    echo '</a>';
                }
                echo '</div>';
            }
        }
    echo'</div>';
        }
?>

<div class="box-entreprise" id="box-entreprise">
    <h1 class="titlebox">Entreprises</h1>
    <?php
    if ($entreprisesResult === null || empty($entreprisesResult)) {
        echo '<div class="aucunresultat">';
        echo '<div>Aucun résultat pour votre recherche.</div>';
        echo '</div>';
    }else{
        foreach ($entreprisesResult as $row){
            echo '<div class="entreprise">';
            echo '<div class="name">' . $row['name'] . '</div>';
            echo '<div class="localisation">' . $row['activity'] . '</div>';
            echo '<div class="stars-icon">';
            echo '<div class="confiance">Note attribuée :</div>';
            if($row['score'] == null){
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= floor($row['scorePilot']) ) {
                        echo '<ion-icon name="star"></ion-icon>';
                    } else {
                        echo '<ion-icon name="star-outline"></ion-icon>';
                    }
                }
            }
            else{
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= floor(($row['scorePilot'] + $row['score'] )/ 2)) {
                        echo '<ion-icon name="star"></ion-icon>';
                    } else {
                        echo '<ion-icon name="star-outline"></ion-icon>';
                    }
                }
            }
            echo'</div>';
            echo '<div class="icon">';
            if(isPilotSession() or isAdminSession()) {
                echo '<div>';
                echo '<a class="editButton" href="index.php?modifierEntreprise&entreprise=' . $row['idEnt'] . '"><ion-icon class="edit-icon" name="create-outline"></ion-icon></a>';
                if(isMasked($row['idEnt'])) {
                    echo '<button class="setDisplayButton" style="--id:' . $row['idEnt'] . '"><ion-icon class="eye-icon" name="eye-off-outline"></ion-icon></button>';
                } else {
                    echo '<button class="setDisplayButton" style="--id:' . $row['idEnt'] . '"><ion-icon class="eye-icon" name="eye-outline"></ion-icon></button>';
                }
                echo '</div>';
            }
            if(isStudentSession()) {
                echo '<div>';
                echo '<ion-icon class="edit-icon" name="create-outline" style="display: none"></ion-icon>';
                echo '<ion-icon class="eye-icon" name="eye-outline" style="display: none"></ion-icon>';
                echo '</div>';
            }
            echo '<a href="?statentreprise&idEnt='.$row['idEnt'].'"><button class="stats-button" >Statistiques</button></a>';
            echo '</div>';
            echo '</div>';
        }
        if ($totalPagesEntreprise > 1) {
            echo '<div class="pagination">';
            if ($pageEntreprise > 1) {
                echo '<a href="?navigation&q=' . $_GET['q'] . '&userpage=' . ($pageUser) . '&entreprisepage=' . ($pageEntreprise  - 1) . '&offrepage=' . ($pageOffre) . '#box-entreprise">';
                echo '<ion-icon class=pagination-icon name="arrow-back-outline"></ion-icon>';
                echo '</a>';
            }
            if ($pageEntreprise < $totalPagesEntreprise) {
                echo '<a href="?navigation&q=' . $_GET['q'] . '&userpage=' . ($pageUser) . '&entreprisepage=' . ($pageEntreprise  + 1) . '&offrepage=' . ($pageOffre) . '#box-entreprise">';
                echo '<ion-icon class=pagination-icon name="arrow-forward-outline"></ion-icon>';
                echo '</a>';
            }
            echo '</div>';
        }
    }
    ?>
</div>

    <script type="text/javascript" src="wishlist.js"></script>
    <script type="text/javascript" src="supprimer.js"></script>
    <script type="text/javascript" src="script/displayEntreprise.js"></script>
<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>