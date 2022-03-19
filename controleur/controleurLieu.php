<?php
include ("Modele/bd.lieuetports.inc.php");


$lieu = getLieu();
$ports = getPorts();


include("vue/entete.php");
include('vue/menu.php');
include("vue/visuLieu.php");
include("vue/pied_page.php");


?>