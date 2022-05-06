<?php
function getTraverse (){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM traverse;";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $traverse = $stmt->fetchAll();
    return $traverse;
}

?>