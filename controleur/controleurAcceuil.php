<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
$title = "Compagnie Océane - Accueil";
$keywords = "accueil compagnie Océane";
$description = "page d'accueil de la Compagnie Océane";

include "$racine/vue/entete.php";
include "$racine/vue/menu.php";
include "$racine/vue/presentation.php";
include "$racine/vue/acceuil.php";
include "$racine/vue/pied_page.php";

?>