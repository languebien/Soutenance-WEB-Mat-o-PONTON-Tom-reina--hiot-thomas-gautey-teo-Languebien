<?php

include ("Modele/bd.liaison.php");
include ("Modele/bd.authentification.inc.php");

$Lieux = getLieux();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudLieux.php");
include("vue/pied_page.php");

?>