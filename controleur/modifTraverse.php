<?php

include ("Modele/bd.traverse.php");
include ("Modele/bd.authentification.inc.php");

$Traverse = getTraverse();

// A J O U T E //
if(isset($_POST['add'])){
		
    $idB = $_POST['idBateau'];
    $idL = $_POST['idLiaison'];
    $resultat = addTraverse($idB,$idL);
    if($resultat){
        $_SESSION["success"] = 'traverse ajouté';
    }
    else{
        $_SESSION["error"] = 'Problème lors de l\'ajout de la traverse';
    }
    header('location: index.php?action=modifTraverse');
}

// M O D I F I E //
if(isset($_POST['edit'])){
    $numero = $_POST['numero'];
    $idBateau = $_POST['idbateau'];	
    $idLiaison = $_POST['idLiaison'];
    
    
    $resultat = editTraverse($numero,$idBateau,$idLiaison);
    if($resultat){
        $_SESSION['success'] = 'traverse modifié';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la modification du traverse';
    }
    header('location: index.php?action=modifTraverse');
}

// S U P R //
if(isset($_POST['supr'])){
    $numero = $_POST['numero'];
    $resultat = suprTraverse($numero);
    if($resultat){
        $_SESSION['success'] = 'Traverse supprimé';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la suppression du Traverse';
    }
    header('location: index.php?action=modifTraverse');
}


include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudTraverse.php");
include("vue/pied_page.php");

?>