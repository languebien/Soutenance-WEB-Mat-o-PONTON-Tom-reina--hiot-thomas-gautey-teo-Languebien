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
    
    // C O N N E X I O N   &   I N S C R I P T I O N //
    $lesActions["connexion"] = "controleurConnexion.php";
    $lesActions["inscription"] = "controleurInscription.php";

    // P A R T I E   C R U D //
    // D E C O N N E X I O N //
    $lesActions["deconnexion"] = "controleurDeconnexion.php";

    // C R U D   L I E U //
    $lesActions["modifLieu"] = "modifLieu.php";

    // C R U D   B A T E A U //
    $lesActions["modifBateau"] = "modifBateau.php";

    // C R U D   P O R T //
    $lesActions["modifPort"] = "modifPort.php";
    
    // C R U D   T R A V E R S E E //
    $lesActions["modifTraverse"] = "modifTraverse.php";

    // C R U D   L I A I S O N //
    $lesActions["modifLiaison"] = "modifLiaison.php";

    // C R U D   U T I L I S A T E U R S //
    $lesActions["modifUtilisateurs"] = "modifUtilisateurs.php";

    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>