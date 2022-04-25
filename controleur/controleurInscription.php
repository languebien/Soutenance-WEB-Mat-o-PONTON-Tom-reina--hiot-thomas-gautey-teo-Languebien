<?php

include "Modele/bd.authentification.inc.php";

// Récupération des données du formulaire de connexion //
if (isset($_POST["InscPseudo"]) && isset($_POST["InscMail"]) && isset($_POST["InscMdp"])) {
    $mailU = $_POST["InscMail"];
    $mdpU = $_POST["InscMdp"];
    $pseudoU = $_POST["InscPseudo"];
}
else {
    $mailU = "";
    $mdpU = "";
    $pseudoU = "";
}

// I N S C R I P T I O N //
addUtilisateur($mailU, $mdpU, $pseudoU);

// Message du succès de la création de compte //
$Ok = "Compte Crée ! Vous pouvez maintenant vous connecter.";

$titre = "authentification";
include("vue/entete.php");
include('vue/menu.php');
include("vue/visuConnexion.php");
include("vue/pied_page.php");

?>



