<?php

include ("Modele/bd.informations.inc.php");
include ("Modele/bd.authentification.inc.php");

$Ports = getPorts();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuPorts.php");
include("vue/pied_page.php");

?>