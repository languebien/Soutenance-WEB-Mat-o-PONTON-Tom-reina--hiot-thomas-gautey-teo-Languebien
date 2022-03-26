<?php

function controleurPrincipal($action) {
    $lesActions = array();

    $lesActions["defaut"] = "controleurAcceuil.php";
    $lesActions["acceuil"] = "controleurAcceuil.php";
    $lesActions["afficheTraversee"] = "controleurTraversee.php";
    $lesActions["afficheInformations"] = "controleurInformations.php";
    $lesActions["modifieInformations"] = "controleurCrudInformations.php";
    $lesActions["connexion"] = "controleurConnexion.php";
    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>