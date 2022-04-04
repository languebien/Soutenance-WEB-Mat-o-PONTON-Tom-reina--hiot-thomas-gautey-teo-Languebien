<?php

include ("Modele/bd.informations.inc.php");
include "Modele/bd.authentification.inc.php" ;
$ports = getPorts();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudInformations.php");
include("vue/pied_page.php");

?>