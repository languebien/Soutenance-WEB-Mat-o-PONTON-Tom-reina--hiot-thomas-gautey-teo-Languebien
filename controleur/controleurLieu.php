<?php
include ("Modele/bd.ports.inc.php");
include ("Modele/bd.lieu.inc.php");
$lieu = getLieu();
$ports = getPorts();


include("vue/entete.php");
include('vue/menu.php');
include("vue/visuLieu.php");
include("vue/pied_page.php");


?>