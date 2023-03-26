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
                    echo '<div class="notification">';
                    echo '<div class="description">' . ucfirst(strtolower($row['prenom'])).' '. strtoupper($row['nom']) . ' a postulé à l\'offre <a class="offre" href="?postuler&id='. $row['idOffre'] .'"> '. $row['nomOffre'] .'</a> le '. date('d/m/Y', strtotime($row['date'])) .'</div>';
                    echo '</div>';
                }
            }
            }else{
                if ($studentNotifications === null || empty($studentNotifications)) {
                    echo '<div class="aucunresultat">';
                    echo '<div>Aucune notifications.</div>';
                    echo '</div>';
                } else {
                    foreach ($studentNotifications as $row){
                        echo '<div class="notification">';
                        echo '<div class="description"> Vous avez postulé à l\'offre <a class="offre" href="?postuler&id='. $row['idOffre'] .'"> '. $row['nomOffre'] .'</a> le '. date('d/m/Y', strtotime($row['date'])) .'</div>';
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>
    </div>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>