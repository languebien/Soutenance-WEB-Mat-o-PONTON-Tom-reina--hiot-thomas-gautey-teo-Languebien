<?php

function controleurPrincipal($action) {
    $lesActions = array();

    $lesActions["defaut"] = "controleurAcceuil.php";
    $lesActions["acceuil"] = "controleurAcceuil.php";
    $lesActions["afficheBateau"] = "controleurBateau.php";
    $lesActions["modifieBateau"] = "controleurCrudBateau.php";
    $lesActions["afficheLieu"] = "controleurLieu.php";
    $lesActions["modifieLieu"] = "controleurCrudLieu.php";
    $lesActions["connexion"] = "controleurConnexion.php";
    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>