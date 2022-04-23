<?php

include ("Modele/bd.informations.inc.php");
include ("Modele/bd.authentification.inc.php");

$Bateaux = getBateaux();

include("vue/entete.php");
include('vue/menu.php');
include_once ("Modele/crudBateauTraitement.php");
include("vue/visuCrudBateaux.php");
include("vue/pied_page.php");

?>