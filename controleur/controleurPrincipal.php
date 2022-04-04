<?php

function controleurPrincipal($action) {
    $lesActions = array();

    $lesActions["defaut"] = "controleurAcceuil.php";
    $lesActions["acceuil"] = "controleurAcceuil.php";
    $lesActions["afficheTraversee"] = "controleurTraversee.php";
    $lesActions["afficheInformations"] = "controleurInformations.php";
    
    $lesActions["connexion"] = "controleurConnexion.php";
    $lesActions["deconnexion"] = "controleurDeconnexion.php";
    $lesActions["modifBateau"] = "modifBateau.php";
    $lesActions["modifLieu"] = "modifLieu.php";
    $lesActions["modifPort"] = "modifPort.php";
    $lesActions["modifiePort"] = "controleurPort.php";
    $lesActions["modifieBateau"] = "controleurBateau.php";
    $lesActions["modifieLieu"] = "controleurLieu.php";
    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>