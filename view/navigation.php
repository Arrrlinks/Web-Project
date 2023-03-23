<?php $title = "CesiEnFait"; ?>
<?php $css = "navigation.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>

<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2">
<div class=box-categorie>
    <div class="categorie">
      <button class="categorie1">Catégorie 1</button>
      <button class="categorie2">Catégorie 2</button>
      <button class="categorie3">Catégorie 3</button>
      <button class="categorie4">Catégorie 4</button>
      <button class="categorie5">Catégorie 5</button>
      <button class="categorie6">Catégorie 6</button>
      <button class="categorie7">Catégorie 7</button>
    </div>
</div>
<div class="result">
<div class=box-stage>
    <h1 class="titlebox">Stages</h1>
  <div class="stage">
    <div class="title">Intitulé de stage</div>
    <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et nibh nec risus scelerisque ornare. Vivamus egestas, justo vitae placerat vestibulum, tortor lacus accumsan orci, ac eleifend lacus libero a erat.</div>
    <div class="bas-boxstage">
          <div class="stars-icon">
            <div class="confiance">Confiance du pilote :</div>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star-half"></ion-icon>
          </div>
          <div class="group-likeapply">
        <ion-icon class="like-icon" name="heart-outline"></ion-icon>
        <button class="apply-button">Postuler</button>
        </div>
    </div>
  </div>
</div>

    <div class=box-personne>
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
                echo '<ion-icon class="edit-icon" name="create-outline"></ion-icon>';
                echo '<ion-icon class="delete-icon" name="trash-outline"></ion-icon>';
                echo '<button class="stats-button">Statistiques</button>';
                echo '</div>';
                echo '</div>';
            }

            if ($totalPages > 1) {
                echo '<div class="pagination">';
                if ($page > 1) {
                    echo '<a href="?navigation&q=' . $_GET['q'] . '&page=' . ($page - 1) . '">';
                    echo '<ion-icon class=pagination-icon name="arrow-back-outline"></ion-icon>';
                    echo '</a>';
                }
                if ($page < $totalPages) {
                    echo '<a href="?navigation&q=' . $_GET['q'] . '&page=' . ($page + 1) . '">';
                    echo '<ion-icon class=pagination-icon name="arrow-forward-outline"></ion-icon>';
                    echo '</a>';
                }
                echo '</div>';
            }
        }
        ?>
    </div>

<div class=box-entreprise>
    <h1 class="titlebox">Entreprises</h1>
    <div class="entreprise">
        <div class="name">CESI</div>
        <div class="localisation">Nancy</div>
        <div class="test">Etudiant</div>
        <div class="icon">
            <ion-icon class="edit-icon" name="create-outline"></ion-icon>
            <ion-icon class="eye-icon" name="eye-outline"></ion-icon>
            <button class="stats-button">Statistiques</button>
        </div>
    </div>
</div>
<script src="../navigation.js"></script>



<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>