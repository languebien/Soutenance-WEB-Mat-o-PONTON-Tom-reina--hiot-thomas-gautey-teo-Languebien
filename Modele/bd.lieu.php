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

function addLieux($nom,$info,$ile) {
    $connexion = connexionPDO();
    $req = $connexion->prepare('INSERT INTO lieu (nom, informations, ile ) VALUES (:nom, :info, :ile)');
    $req->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req->bindParam(':info', $info, PDO::PARAM_STR);
    $req->bindParam(':ile', $ile, PDO::PARAM_STR);
    $resultat = $req->execute();
    return $resultat;
}

function editLieux($nom,$id){
    $connexion = connexionPDO();	
    $req = $connexion->prepare('UPDATE lieu SET nom = :nom WHERE id = :id');
    $req->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}
function suprLieux($id){
    $connexion = connexionPDO();
    $req = $connexion->prepare('DELETE FROM lieu WHERE id = :id ');
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}

?>