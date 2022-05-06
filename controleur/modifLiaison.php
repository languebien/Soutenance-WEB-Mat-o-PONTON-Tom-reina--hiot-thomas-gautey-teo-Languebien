<?php

include ("Modele/bd.liaison.php");
include ("Modele/bd.authentification.inc.php");

$Liaison = getLiaison();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudLiaison.php");
include("vue/pied_page.php");

?>