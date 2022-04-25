<?php

include_once "bd.inc.php";

function getUtilisateurs() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM utilisateur");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
    
}
function getUtilisateurByMailU($mailU) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur where mailU=:mailU");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUtilisateursByPseudo($pseudoU) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo");
        $req->bindValue(':pseudo', $pseudoU, PDO::PARAM_STR);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
        
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($mailU, $mdpU, $pseudoU) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($mdpU, "sel");
        $req = $cnx->prepare("INSERT INTO utilisateur (mailU, mdpU, pseudoU) values(:mail, :mdp, :pseudo)");
        $req->bindValue(':mail', $mailU, PDO::PARAM_STR);
        $req->bindValue(':pseudo', $pseudoU, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdpUCrypt, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    $Ok = "Compte Crée ! Vous pouvez maintenant vous connecter.";
    return $Ok;
}

?>