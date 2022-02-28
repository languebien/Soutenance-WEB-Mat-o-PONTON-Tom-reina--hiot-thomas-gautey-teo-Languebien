<?php
session_start();

/* R A C I N E X*/
include "getRacine.php";

/* C O N T R O L E U R */
include "$racine/controleur/controleurPrincipal.php";

/* A C T I O N S */
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}

/* Selon l'action on affiche le fichier. */
$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";

?>