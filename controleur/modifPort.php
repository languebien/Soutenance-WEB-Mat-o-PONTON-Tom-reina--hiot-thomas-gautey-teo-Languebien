<?php

include ("Modele/bd.port.php");
include ("Modele/bd.authentification.inc.php");

$Ports = getPorts();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudPorts.php");
include("vue/pied_page.php");

?>