<?php 

// L I A I S O N S //
function getLiaison(){
    include_once('Modele/bd.inc.php');
    $connexion = connexionPDO();
    $SQL = "SELECT liaison.id, p1.nom AS 'NomPortDepart', p2.nom AS 'NomPortArrivee', secteur.libelle AS 'secteur',liaison.dMilles,liaison.idPortDepart,liaison.idPortArrivee, liaison.idSecteur FROM liaison INNER JOIN port p1 ON liaison.idPortDepart = p1.id inner join port p2 on liaison.idPortArrivee = p2.id INNER JOIN secteur ON liaison.idSecteur = secteur.id";
    $stmt = $connexion->prepare($SQL);
    $stmt->execute(array());
    $Liaison = $stmt->fetchAll();
    return $Liaison;
}

// A J O U T E //
function addLiaison($idB,$idB2,$idS,$idM){
    $connexion = connexionPDO();
    $req = $connexion->prepare('INSERT INTO liaison (idPortDepart,idPortArrivee,idSecteur,dMilles) VALUES (:port, :port2, :secteur, :milles)');
    $req->bindParam(':port', $idB, PDO::PARAM_STR);
    $req->bindParam(':port2', $idB2, PDO::PARAM_STR);
    $req->bindParam(':secteur', $idS, PDO::PARAM_STR);
    $req->bindParam(':milles', $idM, PDO::PARAM_STR);
    $resultat = $req->execute();
    return $resultat;
}

// M O D I F I E //
function editLiaison($id,$Milles,$idPA,$idPD){
    $connexion = connexionPDO();	
    $req = $connexion->prepare('UPDATE liaison SET dMilles = :dMilles, idPortArrivee = :idPA, idPortDepart = :idPD WHERE id = :id');
    $req->bindParam(':dMilles', $Milles, PDO::PARAM_STR);
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->bindParam(':idPA', $idPA, PDO::PARAM_INT);
    $req->bindParam(':idPD', $idPD, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}

// S U P R //
function suprLiaison($id){
    $connexion = connexionPDO();
    $req = $connexion->prepare('DELETE FROM liaison WHERE id = :id ');
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}

?>