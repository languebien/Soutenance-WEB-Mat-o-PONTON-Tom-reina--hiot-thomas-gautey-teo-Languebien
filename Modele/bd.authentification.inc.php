<?php

include_once "bd.utilisateur.inc.php";

// Connexion //
function login($mailU, $mdpU) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByMailU($mailU);
    $mdpBD = $util["mdpU"];

    if (trim($mdpBD) == trim(crypt($mdpU, $mdpBD))) {
        $_SESSION["mailU"] = $mailU;
        $_SESSION["mdpU"] = $mdpBD;
    }
}

// Déconnexion //
function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["mailU"]);
    unset($_SESSION["mdpU"]);
}

// Mail de l'utilisateur connecté //
function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["mailU"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

// Est il connecté ? //
function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["mailU"])) {
        $util = getUtilisateurByMailU($_SESSION["mailU"]);
        if ($util["mailU"] == $_SESSION["mailU"] && $util["mdpU"] == $_SESSION["mdpU"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

// Statut administrateur ? //
function isAdmin() {
    $Statut = getStatutByMail($_SESSION["mailU"]);

    $AdminOrNot = false;

    if ($Statut['statut'] == "Administrateur") {
        $AdminOrNot = true;
    }
    return $AdminOrNot;
}

// Modifie le Statut //
function editUtilisateur($id, $Statut) {
    
    $connexion = connexionPDO();	
    $req = $connexion->prepare('UPDATE utilisateur SET statut = :statut WHERE id = :id');
    $req->bindParam(':statut', $Statut, PDO::PARAM_STR);
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $resultat = $req->execute();
    return $resultat;
}

   

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');


    // test de connexion
    login("test@bts.sio", "sio");
    if (isLoggedOn()) {
        echo "logged";
    } else {
        echo "not logged";
    }

    // deconnexion
    logout();
}
?>