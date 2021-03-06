<?php

include ("Modele/bd.bateau.php");
include ("Modele/bd.authentification.inc.php");

$Bateaux = getBateaux();

// A J O U T E //
if(isset($_POST['add'])){
    $nom = $_POST['nom'];
    $longueur = $_POST['longueur'];
    $largeur = $_POST['largeur'];
    $vitesse = $_POST['vitesse'];
    $nbP = $_POST['nbP'];
    $nbV = $_POST['nbV'];


    $resultat = addBateau($nom, $longueur, $largeur, $vitesse, $nbP, $nbV);
    if($resultat){
        $_SESSION["success"] = 'Bateau ajouté';
    }
    else{
        $_SESSION["error"] = 'Problème lors de l\'ajout du bateau';
    }
    header('location: index.php?action=modifBateau');
}

// M O D I F I E //
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $longueur = $_POST['longueur'];
    $largeur = $_POST['largeur'];
    $vitesse = $_POST['vitesse'];
    $nbP = $_POST['nbP'];
    $nbV = $_POST['nbV'];


    $resultat = editBateau($id,$nom, $longueur, $largeur, $vitesse, $nbP, $nbV);
    if($resultat){
        $_SESSION["success"] = 'Bateau ajouté';
    }
    else{
        $_SESSION["error"] = 'Problème lors de l\'ajout du bateau';
    }
    header('location: index.php?action=modifBateau');
}

// S U P R //
if(isset($_POST['supr'])){
    $id = $_POST['id'];

    $resultat = suprBateau($id);
    if($resultat){
        $_SESSION["success"] = 'Bateau ajouté';
    }
    else{
        $_SESSION["error"] = 'Problème lors de l\'ajout du bateau';
    }
    header('location: index.php?action=modifBateau');
}

include("vue/entete.php");
include('vue/menu.php');
include("vue/visuCrudBateaux.php");
include("vue/pied_page.php");

?>