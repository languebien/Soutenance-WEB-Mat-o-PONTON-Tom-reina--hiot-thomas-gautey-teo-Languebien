<?php
 
include "Modele/bd.authentification.inc.php" ;

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees

logout();

                

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "authentification";
include("vue/entete.php");
include('vue/menu.php');
include("vue/visuConnexion.php");
include("vue/pied_page.php");

?>