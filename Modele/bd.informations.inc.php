<?php

// B A T E A U X
function getBateaux(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM bateau";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
    $Bateaux = $stmt->fetchAll();
    return $Bateaux;
}

// S E C T E U R
function getSecteur(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM secteur;";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Secteur = $stmt->fetchAll();
    return $Secteur;
}

// L I A I S O N
function getLiaison(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT port.nom AS 'NomPortDepart', port.nom AS 'NomPortArrivee', secteur.libelle AS 'secteur' FROM liaison INNER JOIN port ON liaison.idPortDepart = port.id INNER JOIN secteur ON liaison.idSecteur = secteur.id";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Liaison = $stmt->fetchAll();
    return $Liaison;
}

// D A T E S
function getDates(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM traverse";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Dates = $stmt->fetchAll();
    return $Dates;
}

// L I E U
function getLieu() {
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM lieu";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $lieu = $stmt->fetchAll();
    return $lieu;
}

// P O R T S
function getPorts (){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM port";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
    $ports = $stmt->fetchAll();
    return $ports;
}
