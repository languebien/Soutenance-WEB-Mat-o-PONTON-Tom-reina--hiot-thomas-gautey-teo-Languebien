
<?php
   
include ("Modele/bd.bateaux.inc.php");

$bateaux = getBateaux();
				    

					

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuBateau.php");
include("vue/pied_page.php");
?>