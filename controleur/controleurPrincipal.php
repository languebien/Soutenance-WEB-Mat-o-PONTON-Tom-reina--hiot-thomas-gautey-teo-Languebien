<?php

// C O N T R O L E U R à Modifier//

function controleurPrincipal($action) {
    $lesActions = array();

    $lesActions["defaut"] = "controleurAcceuil.php";
    $lesActions["acceuil"] = "pages/controleurAcceuil.php";
    $lesActions["afficheBateau"] = "pages/visuBateau.php";
    $lesActions["modifieBateau"] = "pages/crudBateau.php";
    $lesActions["bateauTraitement"] = "pages/controleurAcceuil.php";
    $lesActions["afficheLieu"] = "pages/visuLieu.php";
    $lesActions["modifieLieu"] = "pages/crudLieu.php";
    
    



    $lesActions["defaut"] = "à Modifier";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>