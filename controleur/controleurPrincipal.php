<?php

function controleurPrincipal($action) {
    $lesActions = array();

    $lesActions["defaut"] = "controleurAcceuil.php";
    $lesActions["acceuil"] = "controleurAcceuil.php";
    $lesActions["afficheSecteurs"] = "controleurSecteurs.php";
    $lesActions["affichePorts"] = "controleurPorts.php";
    $lesActions["afficheBateaux"] = "controleurBateaux.php";
    
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