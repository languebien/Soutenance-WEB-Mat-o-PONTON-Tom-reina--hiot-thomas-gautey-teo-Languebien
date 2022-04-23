<?php

include ("Modele/bd.informations.inc.php");
include ("Modele/bd.authentification.inc.php");

$Lieux = getLieux();

include("vue/entete.php");
include('vue/menu.php');
include_once ("Modele/crudLieuTraitement.php");
include("vue/visuCrudLieux.php");
include("vue/pied_page.php");

?>