<?php
include 'configBdd.php';
try
{
        $connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
		$connexion->exec('SET NAMES utf8');
}
  
catch(Exception $e)
{
        echo 'Une erreur de connexion à la BDD est survenue !';
        die();
}
?>