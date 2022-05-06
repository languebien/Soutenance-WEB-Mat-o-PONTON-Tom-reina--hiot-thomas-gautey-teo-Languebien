<?php 

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


?>