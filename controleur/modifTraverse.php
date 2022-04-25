<?php

include ("Modele/bd.informations.inc.php");
include ("Modele/bd.authentification.inc.php");

$Traverse = getTraverse();

include("vue/entete.php");
include('vue/menu.php');
include_once ("Modele/crudTraverseTraitement.php");
include("vue/visuCrudTraverse.php");
include("vue/pied_page.php");

?>