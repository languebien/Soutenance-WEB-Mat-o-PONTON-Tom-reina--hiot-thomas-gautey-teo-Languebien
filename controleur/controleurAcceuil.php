<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include "$racine/vue/entete.php";
include "$racine/vue/menu.php";
include "$racine/vue/acceuil.php";
include "$racine/vue/pied_page.php";

?>