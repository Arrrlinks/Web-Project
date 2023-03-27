<?php $title = "Notifications"; ?>
<?php $css = "notifications.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

    <img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
    <img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">

    <div class="result">
        <div class="box-stage" id="box-stage">
            <h1 class="titlebox">Notifications</h1>
            <?php
            if(isPilotSession() || isAdminSession()){
            if ($notifications === null || empty($notifications)) {
                echo '<div class="aucunresultat">';
                echo '<div>Aucune notifications.</div>';
                echo '</div>';
            } else {
                foreach ($notifications as $row){
                    if(!$row['hasBeenAccepted']){
                        echo '<div class="notification">';
                        echo '<div class="description">' . ucfirst(strtolower($row['prenom'])).' '. strtoupper($row['nom']) . ' a postulé à l\'offre <a class="offre" href="?postuler&id='. $row['idOffre'] .'"> '. $row['nomOffre'] .'</a> le '. date('d/m/Y', strtotime($row['date'])) .'</div>';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="notification">';
                        echo '<div class="description">' . ucfirst(strtolower($row['prenom'])).' '. strtoupper($row['nom']) . ' a été accepté à l\'offre <a class="offre" href="?postuler&id='. $row['idOffre'] .'"> '. $row['nomOffre'] .'</a> le '. date('d/m/Y', strtotime($row['date'])) .'</div>';
                        echo '</div>';
                    }
                }
            }
            }else{
                if ($studentNotifications === null || empty($studentNotifications)) {
                    echo '<div class="aucunresultat">';
                    echo '<div>Aucune notifications.</div>';
                    echo '</div>';
                } else {
                    foreach ($studentNotifications as $row) {
                        if (!$row['hasBeenAccepted']) {
                            echo '<div class="notification">';
                            echo '<div class="description"> Vous avez postulé pour l\'offre <a class="offre" href="?postuler&id=' . $row['idOffre'] . '"> ' . $row['nomOffre'] . '</a> le ' . date('d/m/Y', strtotime($row['date'])) . '</div>';
                            echo '<form method="post">';
                            echo '<input type="hidden" name="idOffre" value="' . $row['idOffre'] . '">';
                            echo '<input type="hidden" name="idUser" value="' . $_SESSION['id'] . '">';
                            echo '<button type="submit" name="hasBeenAccepted" class="hasBeenAccepted" value="1">J\'ai été accepté</button>';
                            echo '<button type="submit" name="delete" class="delete" value="1">Supprimer</button>';
                            echo '</form>';
                            echo '</div>';
                        } elseif ($row['hasBeenAccepted'] && $row['date'] >= $row['toDate']) {
                            echo '<div class="notification">';
                            echo '<div class="description"> Comment s\'est passé votre stage : ' . $row['nomOffre'] . '</div>';
                            echo '<form method="post" id="rating">';
                            echo '<input type="hidden" name="idOffre" value="' . $row['idOffre'] . '">';
                            echo '<input type="hidden" name="idUser" value="' . $_SESSION['id'] . '">';
                            echo '<div class="rating">
                                    <input type="radio" id="star1" name="rating" value="5" onchange="submitForm()" required>
                                    <label for="star1" title="1 étoile">
                                        <ion-icon name="star"></ion-icon>
                                    </label>
                                    <input type="radio" id="star2" name="rating" value="4" onchange="submitForm()" required>
                                    <label for="star2" title="2 étoiles">
                                        <ion-icon name="star"></ion-icon>
                                    </label>
                                    <input type="radio" id="star3" name="rating" value="3" onchange="submitForm()" required>
                                    <label for="star3" title="3 étoiles">
                                        <ion-icon name="star"></ion-icon>
                                    </label>
                                    <input type="radio" id="star4" name="rating" value="2" onchange="submitForm()" required>
                                    <label for="star4" title="4 étoiles">
                                        <ion-icon name="star"></ion-icon>
                                    </label>
                                    <input type="radio" id="star5" name="rating" value="1" onchange="submitForm()" required>
                                    <label for="star5" title="5 étoiles">
                                        <ion-icon name="star"></ion-icon>
                                    </label>
                               </div>';
                            echo '</form>';
                            echo '</div>';
                        } else {
                            echo '<div class="notification">';
                            echo '<div class="description"> Vous avez été accepté pour l\'offre <a class="offre" href="?postuler&id=' . $row['idOffre'] . '"> ' . $row['nomOffre'] . '</a> le ' . date('d/m/Y', strtotime($row['date'])) . '</div>';
                            echo '</div>';
                        }
                    }
                }
            }
            ?>
        </div>
    </div>

<script src="script/notifications.js"></script>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>