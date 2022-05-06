<?php 

// L I A I S O N S //
function getLiaison(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT liaison.id, p1.nom AS 'NomPortDepart', p2.nom AS 'NomPortArrivee', secteur.libelle AS 'secteur',liaison.dMilles FROM liaison INNER JOIN port p1 ON liaison.idPortDepart = p1.id inner join port p2 on liaison.idPortArrivee = p2.id INNER JOIN secteur ON liaison.idSecteur = secteur.id";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Liaison = $stmt->fetchAll();
    return $Liaison;
}

?>