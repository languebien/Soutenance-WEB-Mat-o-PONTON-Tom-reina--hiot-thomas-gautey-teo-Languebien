<?php
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
?>