<?php

function controleurPrincipal($action) {
    $lesActions = array();

    // A C C E U I L //
    $lesActions["defaut"] = "controleurAcceuil.php";
    $lesActions["acceuil"] = "controleurAcceuil.php";

    // S E C T E U R S //
    $lesActions["afficheSecteurs"] = "controleurSecteurs.php";

    // P O R T S //
    $lesActions["affichePorts"] = "controleurPorts.php";

    // B A T E A U X //
    $lesActions["afficheBateaux"] = "controleurBateaux.php";
    
    // C O N N E X I O N //
    $lesActions["connexion"] = "controleurConnexion.php";

    // P A R T I E   C R U D //
    // D E C O N N E X I O N //
    $lesActions["deconnexion"] = "controleurDeconnexion.php";

    $lesActions["modifLieu"] = "modifLieu.php";
    $lesActions["modifBateau"] = "modifBateau.php";
    $lesActions["modifPort"] = "modifPort.php";
    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>