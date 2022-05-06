<?php

include ("Modele/bd.traversee.php");
include ("Modele/bd.authentification.inc.php");

$Traverse = getTraverse();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudTraverse.php");
include("vue/pied_page.php");

?>