<?php

include ("Modele/bd.informations.inc.php");
include ("Modele/bd.authentification.inc.php");

$Utilisateurs = getUtilisateurs();

include("vue/entete.php");
include('vue/menu.php');
include_once ("Modele/crudUtilisateursTraitement.php");
include("vue/visuCrudUtilisateurs.php");
include("vue/pied_page.php");

?>