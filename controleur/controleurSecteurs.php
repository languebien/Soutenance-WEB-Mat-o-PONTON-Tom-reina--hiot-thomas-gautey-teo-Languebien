<?php

include ("Modele/bd.secteur.php");
include ("Modele/bd.authentification.inc.php");

$Secteurs = getSecteur();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuSecteurs.php");
include("vue/pied_page.php");

?>