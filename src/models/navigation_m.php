<?php
require_once('src/models/init.php');
ifNoSessionExit();

function getUsersResult()
{
    $recherche = $_GET['q'];
    $userpage = $_GET['userpage'];
    $bdd = dbConnect();
    $req = $bdd->prepare('SELECT id,nom,prenom,role,promo,centre FROM users WHERE (username LIKE "%' . $recherche . '%" 
        OR nom LIKE "%' . $recherche . '%" 
        OR prenom LIKE "%' . $recherche . '%" 
        OR promo LIKE "%' . $recherche . '%" 
        OR centre LIKE "%' . $recherche . '%")
    AND role <> "admin" LIMIT 5 OFFSET ' . ($userpage - 1) * 5);
    $req->execute();
    return $req->fetchAll();
}

function getOffresResult()
{
    $recherche = $_GET['q'];
    $offrepage = $_GET['offrepage'];
    $bdd = dbConnect();
    $req = $bdd->prepare('SELECT offre.idOffre, offre.nomOffre, entreprise.name, offre.skills, offre.address, offre.isVisible, entreprise.score, entreprise.scorePilot 
    FROM offre INNER JOIN entreprise ON entreprise.idEnt = offre.idEntreprise 
    WHERE isVisible = 1
    AND (offre.nomOffre LIKE "%' . $recherche . '%" 
    OR entreprise.name LIKE "%' . $recherche . '%" 
    OR offre.skills LIKE "%' . $recherche . '%" 
    OR offre.address LIKE "%' . $recherche . '%" )
    LIMIT 5 OFFSET ' . ($offrepage - 1) * 5);
    $req->execute();
    return $req->fetchAll();
}

function getEntreprisesResult()
{
    if (isStudentSession()) {
        $recherche = $_GET['q'];
        $entreprisepage = $_GET['entreprisepage'];
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT idEnt,name,activity,score,scorePilot 
                                        FROM entreprise 
                                        where visibility = 1 
                                          and (name like "%' . $recherche . '%" 
                                          or activity like "%' . $recherche . '%" 
                                          or scorePilot like "%' . $recherche . '%") 
                                          LIMIT 5 OFFSET ' . ($entreprisepage - 1) * 5);
        $req->execute();
        return $req->fetchAll();
    } else {
        $recherche = $_GET['q'];
        $entreprisepage = $_GET['entreprisepage'];
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT idEnt,name, activity,score, scorePilot 
                                        FROM entreprise 
                                        where name like "%' . $recherche . '%" 
                                        or activity like "%' . $recherche . '%" 
                                        or scorePilot like "%' . $recherche . '%" 
                                        LIMIT 5 OFFSET ' . ($entreprisepage - 1) * 5);
        $req->execute();
        return $req->fetchAll();
    }
}

function totalPagesUser()
{
    $recherche = $_GET['q'];
    $bdd = dbConnect();
    $req = $bdd->prepare('SELECT count(*) as total 
                                FROM users 
                                where username like "%' . $recherche . '%" 
                                or nom like "%' . $recherche . '%" 
                                or prenom like "%' . $recherche . '%" 
                                or role like "%' . $recherche . '%" 
                                or promo like "%' . $recherche . '%" 
                                or centre like "%' . $recherche . '%"');
    $req->execute();
    $resultat = $req->fetch();
    return ceil($resultat['total'] / 5);
}

function totalPagesEntreprise()
{
    if(isStudentSession()){
        $recherche = $_GET['q'];
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT count(*) as total 
                                    FROM entreprise 
                                    where visibility = 1 
                                    and (name like "%' . $recherche . '%" 
                                    or activity like "%' . $recherche . '%" 
                                    or scorePilot like "%' . $recherche . '%")');
        $req->execute();
        $resultat = $req->fetch();
    }else{
        $recherche = $_GET['q'];
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT count(*) as total 
                                    FROM entreprise 
                                    where name like "%' . $recherche . '%" 
                                    or activity like "%' . $recherche . '%" 
                                    or scorePilot like "%' . $recherche . '%"');
        $req->execute();
        $resultat = $req->fetch();
    }
    return ceil($resultat['total'] / 5);
}

function totalPagesOffre()
{
    $recherche = $_GET['q'];
    $bdd = dbConnect();
    $req = $bdd->prepare('SELECT count(*) as total 
                                FROM offre INNER JOIN entreprise ON entreprise.idEnt = offre.idEntreprise 
                                    WHERE isVisible = 1
                                        AND (offre.nomOffre LIKE "%' . $recherche . '%" 
                                        OR entreprise.name LIKE "%' . $recherche . '%" 
                                        OR offre.skills LIKE "%' . $recherche . '%" 
                                        OR offre.address LIKE "%' . $recherche . '%" ) ');
    $req->execute();
    $resultat = $req->fetch();
    return ceil($resultat['total'] / 5);
}

function isWishlisted($offre)
{
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
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

function isMasked($entreprise)
{
    if (isset($_SESSION['id'])) {
        $entrepriseid = $entreprise;
        $db = dbConnect();
        $req = $db->prepare('SELECT visibility FROM entreprise WHERE idEnt = :entrepriseId');
        $req->execute(array(
            'entrepriseId' => $entrepriseid
        ));
        $result = $req->fetch();
        if ($result && is_array($result) && $result['visibility'] == 0) {
            return true;
        } else {
            return false;
        }
    }
}

function isInternshipStarted(){
    $db = dbConnect();
    $req = $db->prepare('SELECT idOffre,fromDate,isVisible FROM offre');
    $req->execute();
    $result = $req->fetchAll();
    $today = date("Y-m-d");
    foreach ($result as $value) {
        if($value['isVisible'] && $value['fromDate'] <= $today){
            $req = $db->prepare('UPDATE offre SET isVisible = 0 WHERE idOffre = :idOffre');
            $req->execute(array(
                'idOffre' => $value['idOffre']
            ));
        }
    }
}