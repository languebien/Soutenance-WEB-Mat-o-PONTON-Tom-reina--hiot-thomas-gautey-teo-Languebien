<?php

// B A T E A U X
function getBateaux(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM bateau";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
    $bateaux = $stmt->fetchAll();
    return $bateaux;
}

// S E C T E U R
function getSecteur(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Secteur = $stmt->fetchAll();
    return $Secteur;
}

// L I A I S O N
function getLiaison(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Liaison = $stmt->fetchAll();
    return $Liaison;
}

// D A T E S
function getDates(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "";
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
