<?php


function getPorts (){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM port";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
    $ports = $stmt->fetchAll();
    return $ports;
}

?>