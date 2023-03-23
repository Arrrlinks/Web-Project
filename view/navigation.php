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
        echo '<div class="stage">';
        echo '<div class="description">Aucun résultat pour votre recherche.</div>';
        echo '</div>';
    } else {
        foreach ($offresResult as $row) {
            echo '<div class="stage">';
            echo '<div class="title">' . $row['nomOffre'] .'</div>';
            echo '<div class="description">Compétences requises : '. $row['skills'] .'</div>';
            echo '<div class="bas-boxstage">';
            echo '<div class="stars-icon">';
            echo '<div class="confiance">Confiance du pilote :</div>';
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= floor($row['scorePilot'])) {
                    echo '<ion-icon name="star"></ion-icon>';
                } else {
                    echo '<ion-icon name="star-outline"></ion-icon>';
                }
            }
            echo '</div>';
            echo '<div class="group-likeapply">';
            echo '<ion-icon class="like-icon" name="heart-outline"></ion-icon>';
            echo '<button class="apply-button">Postuler</button>';
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

    <div class=box-personne id="box-personne">
    <h1 class="titlebox">Personnes</h1>
        <?php
        if ($usersResult === null || empty($usersResult)) {
            echo '<div class="personne">';
            echo '<div class="name">Aucun résultat pour votre recherche.</div>';
            echo '</div>';
        } else {
            foreach ($usersResult as $row) {
                echo '<div class="personne">';
                echo '<div class="name">' . strtoupper($row['nom']) . ' ' . ucfirst(strtolower($row['prenom'])) . '</div>';
                echo '<div class="promotion">' . $row['promo'] . '</div>';
                echo '<div class="role">' . $row['role'] . '</div>';
                echo '<div class="icon">';
                echo'<div>';
                echo '<ion-icon class="edit-icon" name="create-outline"></ion-icon>';
                echo '<ion-icon class="delete-icon" name="trash-outline"></ion-icon>';
                echo'</div>';
                echo '<button class="stats-button">Statistiques</button>';
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
        ?>
    </div>

<div class="box-entreprise" id="box-entreprise">
    <h1 class="titlebox">Entreprises</h1>
    <?php
    if ($entreprisesResult === null || empty($entreprisesResult)) {
        echo '<div class="entreprise">';
        echo '<div class="name">Aucun résultat pour votre recherche.</div>';
        echo '</div>';
    }else{
        foreach ($entreprisesResult as $row){
            echo '<div class="entreprise">';
            echo '<div class="name">' . $row['name'] . '</div>';
            echo '<div class="localisation">' . $row['activity'] . '</div>';
            echo '<div class="stars-icon">';
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= floor($row['scorePilot'])) {
                    echo '<ion-icon name="star"></ion-icon>';
                } else {
                    echo '<ion-icon name="star-outline"></ion-icon>';
                }
            }
            echo'</div>';
            echo '<div class="icon">';
            echo'<div>';
            echo '<ion-icon class="edit-icon" name="create-outline"></ion-icon>';
            echo '<ion-icon class="eye-icon" name="eye-outline"></ion-icon>';
            echo'</div>';
            echo '<button class="stats-button">Statistiques</button>';
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



<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>