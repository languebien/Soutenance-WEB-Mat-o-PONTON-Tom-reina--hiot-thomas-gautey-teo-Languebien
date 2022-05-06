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

function addTraverse($idB,$idL){
    $connexion = connexionPDO();
    $req = $connexion->prepare('INSERT INTO traverse (idBateau,idLiaison) VALUES (:idBateau,:idLiaison)');
    
    $req->bindParam(':idBateau', $idB, PDO::PARAM_STR);
    $req->bindParam(':idLiaison', $idL, PDO::PARAM_STR);
    $resultat = $req->execute();
    return $resultat;
}

function editTraverse($numero,$idBateau){
    $connexion = connexionPDO();	
    $req = $connexion->prepare('UPDATE  traverse SET idbateau = :idbateau WHERE numero = :numero');
    $req->bindParam(':idbateau', $idBateau, PDO::PARAM_STR);
    $req->bindParam(':numero', $numero, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}
function suprTraverse($numero){
    $connexion = connexionPDO();
    $req = $connexion->prepare('DELETE FROM traverse WHERE numero = :numero ');
    $req->bindParam(':numero', $numero, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}
?>