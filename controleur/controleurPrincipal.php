<?php

// C O N T R O L E U R à Modifier//

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "à Modifier";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>