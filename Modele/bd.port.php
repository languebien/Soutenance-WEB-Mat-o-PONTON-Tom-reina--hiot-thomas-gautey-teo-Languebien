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
function addPort($nom,$adresse,$code,$ville,$lieu){
    $connexion = connexionPDO();
    $req = $connexion->prepare('INSERT INTO Port (nom, adresse, codePostal, ville, idLieu) VALUES (:nom, :adresse, :codePostal, :ville, :lieu)');
    $req->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req->bindParam(':adresse', $adresse, PDO::PARAM_STR);
    $req->bindParam(':codePostal', $code, PDO::PARAM_STR);
    $req->bindParam(':ville', $ville, PDO::PARAM_STR);
    $req->bindParam(':lieu', $lieu, PDO::PARAM_STR);
    $resultat = $req->execute();
    return $resultat;
}

function editPort($id,$nom){
    $connexion = connexionPDO();	
    $req = $connexion->prepare('UPDATE Port SET nom = :nom WHERE id = :id');
    $req->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}
function suprPort($id){
    $connexion = connexionPDO();
    $req = $connexion->prepare('DELETE FROM Port WHERE id = :id ');
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}

?>