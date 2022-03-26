<?php

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

// B A T E A U X   N O R M A L
function getBateaux(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM bateau";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
    $bateaux = $stmt->fetchAll();
    return $bateaux;
}