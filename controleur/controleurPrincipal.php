<?php

// C O N T R O L E U R à Modifier//

function controleurPrincipal($action) {
    $lesActions = array();
<<<<<<< HEAD
    $lesActions["defaut"] = "controleurAcceuil.php";
    $lesActions["acceuil"] = "pages/controleurAcceuil.php";
    $lesActions["afficheBateau"] = "pages/visuBateau.php";
    $lesActions["modifieBateau"] = "pages/crudBateau.php";
    $lesActions["bateauTraitement"] = "pages/controleurAcceuil.php";
    $lesActions["acceuil"] = "controleurAcceuil.php";
    
=======
    $lesActions["defaut"] = "à Modifier";

>>>>>>> 22cbed4021e3f6a58655964787993f5abbfcef5f
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>