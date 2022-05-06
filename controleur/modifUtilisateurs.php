<?php

include ("Modele/bd.authentification.inc.php");
include_once('Modele/bd.utilisateur.inc.php');

$Utilisateurs = getUtilisateurs();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudUtilisateurs.php");
include("vue/pied_page.php");

?>