<?php

include ("Modele/bd.informations.inc.php");

$lieu = getLieu();
$ports = getPorts();
$bateaux = getBateaux(); 

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuTraversee.php");
include("vue/pied_page.php");

?>