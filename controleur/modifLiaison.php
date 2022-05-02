<?php

include ("Modele/bd.informations.inc.php");
include ("Modele/bd.authentification.inc.php");

$Liaison = getLiaison();

include("vue/entete.php");
include('vue/menu.php');
include_once ("Modele/crudLiaisonTraitement.php");
include("vue/visuCrudLiaison.php");
include("vue/pied_page.php");

?>