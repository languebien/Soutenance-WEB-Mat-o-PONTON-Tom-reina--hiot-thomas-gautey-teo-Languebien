<?php


// B A T E A U X //
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


// S E C T E U R S //
function getSecteur(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM secteur;";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Secteur = $stmt->fetchAll();
    return $Secteur;
}


// L I A I S O N S //
function getLiaison(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT port.nom AS 'NomPortDepart', port.nom AS 'NomPortArrivee', secteur.libelle AS 'secteur' FROM liaison INNER JOIN port ON liaison.idPortDepart = port.id INNER JOIN secteur ON liaison.idSecteur = secteur.id";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Liaison = $stmt->fetchAll();
    return $Liaison;
}


// D A T E S //
function getDates(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM traverse";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Dates = $stmt->fetchAll();
    return $Dates;
}


// L I E U X //
function getLieux() {
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM lieu";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Lieux = $stmt->fetchAll();
    return $Lieux;
}


// P O R T S //
function getPorts (){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM port;";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Ports = $stmt->fetchAll();
    return $Ports;
}

// P O R T S avec nom des Lieux //
function getPortsAmeliore (){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT port.id, port.nom AS 'nomPort', port.adresse, port.codePostal, port.ville, lieu.nom AS 'nomLieu' FROM port INNER JOIN lieu ON port.idLieu = lieu.id;";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Ports = $stmt->fetchAll();
    return $Ports;
}
// Ports avec la séléction du secteur //
function getPortsAvecSecteur($SecteurSelection) {
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT port.id, port.nom AS 'nomPort', port.adresse, port.codePostal, port.ville, lieu.nom AS 'nomLieu' FROM port INNER JOIN lieu ON port.idLieu = lieu.id INNER JOIN liaison ON port.id = liaison.idPortDepart INNER JOIN secteur ON liaison.idSecteur = secteur.id WHERE secteur.libelle = ?;";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array($SecteurSelection));
    $Ports = $stmt->fetchAll();
    return $Ports;
}
