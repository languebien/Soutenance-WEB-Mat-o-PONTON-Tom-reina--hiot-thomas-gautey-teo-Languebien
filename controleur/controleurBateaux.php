<?php

include ("Modele/bd.informations.inc.php");
include ("Modele/bd.authentification.inc.php");

$Bateaux = getBateaux();
$Secteurs = getSecteur();

if(isset($_POST["FiltreBateaux"])) {
    $SecteurSelection = htmlspecialchars($_POST["FiltreBateaux"]);

    $Bateaux = getBateauxAvecSecteur($SecteurSelection);
}

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuBateaux.php");
include("vue/pied_page.php");

?>