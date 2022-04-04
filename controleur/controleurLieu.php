<?php

include ("Modele/bd.informations.inc.php");
include "Modele/bd.authentification.inc.php" ;
$lieu = getLieu();

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudLieu.php");
include("vue/pied_page.php");

?>