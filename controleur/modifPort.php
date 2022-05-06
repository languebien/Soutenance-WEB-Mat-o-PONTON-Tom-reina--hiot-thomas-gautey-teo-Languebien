<?php

include ("Modele/bd.port.php");
include ("Modele/bd.authentification.inc.php");

$Ports = getPorts();

if(isset($_POST['add'])){
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $code = $_POST['codePostal'];
    $ville = $_POST['ville'];
    $lieu = $_POST['lieu'];
    
    $resultat = addPort($nom,$adresse,$code,$ville,$lieu);
    if($resultat){
        $_SESSION["success"] = 'Port ajouté';
    }
    else{
        $_SESSION["error"] = 'Problème lors de l\'ajout du Port';
    }
    header('location: index.php?action=modifPort');
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $codeP = $_POST['codeP'];
    $ville = $_POST['ville'];
    $idL = $_POST['idL'];	
    
    $resultat = editPort($id,$nom,$adresse,$codeP,$ville,$idL);
    if($resultat){
        $_SESSION['success'] = 'Port modifié';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la modification du Port';
    }
    header('location: index.php?action=modifPort');
}

if(isset($_POST['supr'])){
    $id = $_POST['id'];
    $resultat =suprPort($id);
    if($resultat){
        $_SESSION['success'] = 'Port supprimé';
    }		
    else{
        $_SESSION['error'] = 'Problème lors de la suppression du Port';
    }
    header('location: index.php?action=modifPort');
}
include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudPorts.php");
include("vue/pied_page.php");

?>