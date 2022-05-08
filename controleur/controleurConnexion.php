<?php

include "Modele/bd.authentification.inc.php";

// Message du succès de la création de compte //
$Ok = "";

// Récupération des données du formulaire de connexion //
if (isset($_POST["mailU"]) && isset($_POST["mdpU"])){
    $mailU=$_POST["mailU"];
    $mdpU=$_POST["mdpU"];
}
else
{
    $mailU="";
    $mdpU="";
}

// C O N N E X I O N //
login($mailU,$mdpU);

// Récupère utilisateurs par mail //
$Utilisateur = getUtilisateurByMailU($mailU);

// Connecté ou pas ? //
if (isLoggedOn()){

    include("vue/entete.php");
    include('vue/menu.php');
    include "vue/visuConnecter.php";
    include("vue/pied_page.php");
}
else{
    $titre = "authentification";
    include("vue/entete.php");
    include('vue/menu.php');
    include("vue/visuConnexion.php");
    include("vue/pied_page.php");
}

?>



