<?php
include_once('src/models/init.php');

function getWishlist() {
    $pageWishlist = $_GET['wishlistpage'];
    $db = dbConnect();
    $query = $db->prepare('SELECT offre.idOffre, offre.nomOffre, offre.entreprise, offre.skills, offre.address, entreprise.scorePilot FROM offre INNER JOIN entreprise ON entreprise.name = offre.entreprise inner join isWishlisted iW on offre.idOffre = iW.offreId inner join users u on u.id = iW.userId WHERE u.id =' . $_SESSION['id'] . '
    LIMIT 5 OFFSET '.($pageWishlist-1)*5);
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function totalPagesWishlist()
{
    $bdd=dbConnect();
    $req = $bdd->prepare('SELECT count(*) as total FROM offre INNER JOIN entreprise ON entreprise.name = offre.entreprise inner join isWishlisted iW on offre.idOffre = iW.offreId inner join users u on u.id = iW.userId where id = ' . $_SESSION['id'] . '');
    $req->execute();
    $resultat = $req->fetch();
    return ceil($resultat['total']/5);
}
