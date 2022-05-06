<?php

include ("Modele/bd.bateau.php");
include ("Modele/bd.authentification.inc.php");

$Bateaux = getBateaux();
$Secteurs = getSecteur();

if(isset($_POST["FiltreBateaux"])) {
    
    $SecteurSelection = htmlspecialchars($_POST["FiltreBateaux"]);
    $Bateaux = getBateauxAvecSecteur($SecteurSelection);
    
     
}if (isset($_POST["FiltreBateaux"])){
    if ($_POST["FiltreBateaux"] == "" or $_POST["FiltreBateaux"] == "Tous les Secteurs" ){
        $Bateaux = getBateaux();
     }
}


include("vue/entete.php");
include('vue/menu.php');
include("vue/visuBateaux.php");
include("vue/pied_page.php");

?>