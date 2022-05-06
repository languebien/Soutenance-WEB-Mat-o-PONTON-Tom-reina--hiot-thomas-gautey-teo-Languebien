<?php

include ("Modele/bd.authentification.inc.php");
include_once('Modele/bd.utilisateur.inc.php');

$Utilisateurs = getUtilisateurs();

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $Statut = $_POST['statut'];	
    $resultat = editUtilisateur($id, $Statut);

    if($resultat){
        $_SESSION['success'] = 'Statut modifié';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la modification du Statut';
    }
    header('location: index.php?action=modifUtilisateurs');
}

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudUtilisateurs.php");
include("vue/pied_page.php");

?>