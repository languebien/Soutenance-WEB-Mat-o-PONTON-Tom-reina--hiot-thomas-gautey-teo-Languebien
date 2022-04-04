<?php

include ("Modele/bd.informations.inc.php");
include "Modele/bd.authentification.inc.php" ;

$Secteur = getSecteur();
$Dates = getDates();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuTraversee.php");
include("vue/pied_page.php");

?>