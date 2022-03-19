<?php


include ("Modele/bd.ports.inc.php");
include ("Modele/bd.lieu.inc.php");

$lieu = getLieu();
$port = getPorts();


include("vue/entete.php");
include('vue/menu.php');
include("vue/crudLieu.php");
include("vue/pied_page.php");

?>