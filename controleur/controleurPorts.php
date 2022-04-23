<?php

include ("Modele/bd.informations.inc.php");
include ("Modele/bd.authentification.inc.php");

$Ports = getPortsAmeliore();
$Secteurs = getSecteur();

if(isset($_POST["FiltreSecteurs"])) {
    $SecteurSelection = htmlspecialchars($_POST["FiltreSecteurs"]);

    $Ports = getPortsAvecSecteur($SecteurSelection);
}

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuPorts.php");
include("vue/pied_page.php");

?>