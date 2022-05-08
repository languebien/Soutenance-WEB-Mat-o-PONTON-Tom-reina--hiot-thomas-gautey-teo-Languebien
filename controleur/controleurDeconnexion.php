<?php
 
include "Modele/bd.authentification.inc.php" ;

// Message du succès de la création de compte //
$Ok = "";

// Déconnexion //
logout();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "authentification";
include("vue/entete.php");
include('vue/menu.php');
include("vue/visuConnexion.php");
include("vue/pied_page.php");

?>