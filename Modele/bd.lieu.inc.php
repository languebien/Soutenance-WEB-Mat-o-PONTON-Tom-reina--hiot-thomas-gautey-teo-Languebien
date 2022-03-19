<?php


function getLieu() {
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM lieu";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
    $lieu = $stmt->fetchAll();
    return $lieu;
}



?>