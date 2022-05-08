<?php

include ("Modele/bd.port.php");
include ("Modele/bd.secteur.php");
include ("Modele/bd.authentification.inc.php");

$Ports = getPortsAmeliore();
$Secteurs = getSecteur();

// Filtres //
if(isset($_POST["FiltreSecteurs"])) {
    $SecteurSelection = htmlspecialchars($_POST["FiltreSecteurs"]);

    $Ports = getPortsAvecSecteur($SecteurSelection);
}
if (isset($_POST["FiltreSecteurs"])){
    if ($_POST["FiltreSecteurs"] == "" or $_POST["FiltreSecteurs"] == "Tous les Secteurs" ){
        $Ports = getPortsAmeliore();
     }
}

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuPorts.php");
include("vue/pied_page.php");

?>