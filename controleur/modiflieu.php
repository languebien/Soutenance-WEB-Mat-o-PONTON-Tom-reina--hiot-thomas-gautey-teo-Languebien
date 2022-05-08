<?php

include ("Modele/bd.lieu.php");
include ("Modele/bd.authentification.inc.php");

$Lieux = getLieux();

// A J O U T E //
if(isset($_POST['add'])){
    $nom = $_POST['nom'];
    $info = $_POST['info'];
    $ile = $_POST['ile'];
    $resultat= addLieux($nom,$info,$ile);
    if($resultat){
        $_SESSION["success"] = 'Lieu ajouté';
    }
    else{
        $_SESSION["error"] = 'Problème lors de l\'ajout du Lieu';
    }
    header('location: index.php?action=modifLieu');
}

// M O D I F I E //
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];	
    $info = $_POST['info'];
    $ile = $_POST['ile'];
    
    $resultat = editLieux($nom,$id,$info,$ile);
    if($resultat){
        $_SESSION['success'] = 'Lieu modifié';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la modification du Lieu';
    }
    header('location: index.php?action=modifLieu');
}

// S U P R //
if(isset($_POST['supr'])){
    $id = $_POST['id'];
    $resultat = suprLieux($id);
    if($resultat){
        $_SESSION['success'] = 'Lieu supprimé';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la suppression du Lieu';
    }
    header('location: index.php?action=modifLieu');
}

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudLieux.php");
include("vue/pied_page.php");

?>