<?php
require_once('src/models/init.php');
ifNoSessionExit();

function getUsersResult()
{
    $recherche = $_GET['q'];
    $userpage = $_GET['userpage'];
    $bdd=dbConnect();
    $req = $bdd->prepare('SELECT id,nom,prenom,role,promo,centre FROM users WHERE (username LIKE "%'.$recherche.'%" 
        OR nom LIKE "%'.$recherche.'%" 
        OR prenom LIKE "%'.$recherche.'%" 
        OR promo LIKE "%'.$recherche.'%" 
        OR centre LIKE "%'.$recherche.'%")
    AND role <> "admin" LIMIT 5 OFFSET '.($userpage-1)*5);
    $req->execute();
    return $req->fetchAll();
}

function getOffresResult()
{
    $recherche = $_GET['q'];
    $offrepage = $_GET['offrepage'];
    $bdd=dbConnect();
    $req = $bdd->prepare('SELECT offre.idOffre, offre.nomOffre, offre.entreprise, offre.skills, offre.address, entreprise.scorePilot 
    FROM offre INNER JOIN entreprise ON entreprise.name = offre.entreprise 
    WHERE offre.nomOffre LIKE "%'.$recherche.'%" 
    OR offre.entreprise LIKE "%'.$recherche.'%" 
    OR offre.skills LIKE "%'.$recherche.'%" 
    OR offre.address LIKE "%'.$recherche.'%" 
    LIMIT 5 OFFSET '.($offrepage-1)*5);
    $req->execute();
    return $req->fetchAll();
}

function getEntreprisesResult()
{
    $recherche = $_GET['q'];
    $entreprisepage = $_GET['entreprisepage'];
    $bdd=dbConnect();
    $req = $bdd->prepare('SELECT name, activity, scorePilot FROM entreprise where name like "%'.$recherche.'%" or activity like "%'.$recherche.'%" or scorePilot like "%'.$recherche.'%" LIMIT 5 OFFSET '.($entreprisepage-1)*5);
    $req->execute();
    return $req->fetchAll();
}

function totalPagesUser()
{
    $recherche = $_GET['q'];
    $bdd=dbConnect();
    $req = $bdd->prepare('SELECT count(*) as total FROM users where username like "%'.$recherche.'%" or nom like "%'.$recherche.'%" or prenom like "%'.$recherche.'%" or role like "%'.$recherche.'%" or promo like "%'.$recherche.'%" or centre like "%'.$recherche.'%"');
    $req->execute();
    $resultat = $req->fetch();
    return ceil($resultat['total']/5);
}
function totalPagesEntreprise()
{
    $recherche = $_GET['q'];
    $bdd=dbConnect();
    $req = $bdd->prepare('SELECT count(*) as total FROM entreprise where name like "%'.$recherche.'%" or activity like "%'.$recherche.'%" or scorePilot like "%'.$recherche.'%"');
    $req->execute();
    $resultat = $req->fetch();
    return ceil($resultat['total']/5);
}

function totalPagesOffre()
{
    $recherche = $_GET['q'];
    $bdd=dbConnect();
    $req = $bdd->prepare('SELECT count(*) as total FROM offre where nomOffre like "%'.$recherche.'%" or entreprise like "%'.$recherche.'%" or skills like "%'.$recherche.'%" or address like "%'.$recherche.'%"');
    $req->execute();
    $resultat = $req->fetch();
    return ceil($resultat['total']/5);
}

function isWishlisted($offre){
    if (isset($_SESSION['id'])) {
        $offreid = $offre;
        $user_id = $_SESSION['id'];
        $db = dbConnect();
        $req = $db->prepare('SELECT * FROM isWishlisted WHERE userId = :userId AND offreId = :offreId');
        $req->execute(array(
            'userId' => $user_id,
            'offreId' => $offreid
        ));
        $result = $req->fetch();
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
}