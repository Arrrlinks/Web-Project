<?php
include_once('src/models/init.php');

if(isStudentSession()){
    header('Location: index.php');
    exit();
}
function createEntreprise(){
    if(isset($_POST['nameEntr']) && isset($_POST['numberOfEmployee']) && isset($_POST['secteurEntr']) && isset($_POST['rating']) && isset($_POST['Adr'])){
        $nameEntr = $_POST['nameEntr'];
        $numberOfEmployee = $_POST['numberOfEmployee'];
        $secteurEntr = $_POST['secteurEntr'];
        $rating = $_POST['rating'];
        $Adr = $_POST['Adr'];
        $email = $_POST['email'];
        $bdd = dbConnect();

        $req = $bdd->prepare('INSERT INTO entreprise (name,activity,numberOfEmployees,scorePilot,email) VALUES (:name,:activity,:numberOfEmployees,:scorePilot,:email)');
        $req->execute(array(
            'name' => $nameEntr,
            'activity' => $secteurEntr,
            'numberOfEmployees' => $numberOfEmployee,
            'scorePilot' => $rating,
            'email' => $email
        ));

        foreach($Adr as $adr){
            $req = $bdd->prepare('INSERT INTO localisation (address) VALUES (:address)');
            $req->execute(array(
                'address' => $adr
            ));
        }

        $req = $bdd->prepare('SELECT MAX(idEnt),name FROM entreprise GROUP BY idEnt ORDER BY idEnt DESC LIMIT 1');
        $req->execute();
        $resultat = $req->fetch();

        $req2 = $bdd->prepare('SELECT idAdr FROM localisation ORDER BY idAdr DESC LIMIT '.intval(count($Adr)));
        $req2->execute();
        $resultat2 = $req2->fetchAll();

        foreach ($resultat2 as $adr){
            $req = $bdd->prepare('INSERT INTO isLocated (idEntreprise,idAdr) VALUES (:idEnt,:idAdr)');
            $req->execute(array(
                'idEnt' => $resultat['MAX(idEnt)'],
                'idAdr' => $adr['idAdr']
            ));
        }
        $req = $bdd->prepare('select * from isLocated inner join localisation l on isLocated.idAdr = l.idAdr inner join entreprise e on isLocated.idEntreprise = e.idEnt');
        $resultat = $req->execute();
        if($resultat){
            return true;
        }
        else{
            return false;
        }
    }

}