<?php 

// S E C T E U R //
function getSecteur() {
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM secteur";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Lieux = $stmt->fetchAll();
    return $Lieux;
}

function getDates(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT * FROM traverse";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Dates = $stmt->fetchAll();
    return $Dates;
}


?>
