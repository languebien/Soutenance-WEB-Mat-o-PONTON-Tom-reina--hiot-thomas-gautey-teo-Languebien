<?php

function getBateaux(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM bateau";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Bateaux = $stmt->fetchAll();
    return $Bateaux;
}

// Bateaux selon le Secteur sélécionné //
function getBateauxAvecSecteur($SecteurSelection) {
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM bateau INNER JOIN traverse ON bateau.id = traverse.idBateau INNER JOIN liaison ON traverse.idLiaison = liaison.id INNER JOIN secteur ON liaison.idSecteur = secteur.id WHERE secteur.libelle = ?;";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array($SecteurSelection));
    $Bateaux = $stmt->fetchAll();
    return $Bateaux;
}



function addBateau($nom, $longueur, $largeur, $vitesse, $nbP, $nbV) {
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "INSERT INTO bateau (nom, longueur, largeur, vitesse, nbPassager, nbVehicule) VALUES (:nom, :longueur, :largeur, :vitesse, :nbP, :nbV);";
    $req = $connexion->prepare($SQL);
    $req->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req->bindParam(':longueur', $longueur, PDO::PARAM_INT);
    $req->bindParam(':largeur', $largeur, PDO::PARAM_INT);
    $req->bindParam(':vitesse', $vitesse, PDO::PARAM_INT);
    $req->bindParam(':nbP', $nbP, PDO::PARAM_INT);
    $req->bindParam(':nbV', $nbV, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}

?>