<?php $title = "CesiEnFait"; ?>
<?php $css = "wishlist.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

    <img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
    <img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">

    <div class="result">
    <div class="box-stage" id="box-stage">
        <h1 class="titlebox">Wishlist</h1>
        <?php
        if ($offresResult === null || empty($offresResult)) {
            echo '<div class="aucunresultat">';
            echo '<div>Aucune offre enregistrée.</div>';
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
                echo '<button style="--id:'. $row['idOffre'] .'"><ion-icon class="like-icon" name="heart-outline"></ion-icon></button>';
                echo '<button class="apply-button" style="--id:'. $row['idOffre'] .'">Postuler</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            if ($totalPagesOffre > 1) {
                echo '<div class="pagination">';
                if ($pageOffre > 1) {
                    echo '<a href="?wishlist' . $_GET['q'] . '&userpage=' . ($pageUser) . '#box-stage">';
                    echo '<ion-icon class=pagination-icon name="arrow-back-outline"></ion-icon>';
                    echo '</a>';
                }
                if ($pageOffre < $totalPagesOffre) {
                    echo '<a href="?wishlist' . $_GET['q'] . '&userpage=' . ($pageUser) . '#box-stage">';
                    echo '<ion-icon class=pagination-icon name="arrow-forward-outline"></ion-icon>';
                    echo '</a>';
                }
                echo '</div>';
            }
        }
        ?>
    </div>
    </div>


<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>