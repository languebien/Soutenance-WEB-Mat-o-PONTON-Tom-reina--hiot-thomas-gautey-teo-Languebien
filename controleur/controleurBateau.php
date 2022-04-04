<?php

include ("Modele/bd.informations.inc.php");
include "Modele/bd.authentification.inc.php" ;
$bateaux = getBateaux();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudBateau.php");
include("vue/pied_page.php");

?>