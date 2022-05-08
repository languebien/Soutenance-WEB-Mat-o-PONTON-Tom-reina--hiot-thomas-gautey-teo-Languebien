<?php

include ("Modele/bd.liaison.php");
include ("Modele/bd.authentification.inc.php");

$Liaison = getLiaison();

// A J O U T E //
if(isset($_POST['add'])){
    $idB = $_POST['port'];
    $idB2 = $_POST['port2'];
    $idS = $_POST['secteur'];
    $idM = $_POST['milles'];
    
    $resultat =addLiaison($idB,$idB2,$idS,$idM);
    if($resultat){
        $_SESSION["success"] = 'liaison ajouté';
    }
    else{
        $_SESSION["error"] = 'Problème lors de l\'ajout de la liaison';
    }
    header('location: index.php?action=modifLiaison');
}

// M O D I F I E //
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $Milles = $_POST['dMilles'];	
    $idPD = $_POST['idPD'];
    $idPA = $_POST['idPA'];
   
   
    $resultat = editLiaison($id,$Milles,$idPA,$idPD);
    if($resultat){
        $_SESSION['success'] = 'liaison modifié';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la modification de la liaison';
    }
    header('location: index.php?action=modifLiaison');
}

// S U P R //
if(isset($_POST['supr'])){
    $id = $_POST['id'];
    $resultat = suprLiaison($id);
    if($resultat){
        $_SESSION['success'] = 'Bateau supprimé';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la suppression de la liaison';
    }
    header('location: index.php?action=modifLiaison');
}

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudLiaison.php");
include("vue/pied_page.php");

?>