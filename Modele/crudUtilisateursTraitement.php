<?php 
	include_once('Modele/bd.inc.php');
	
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Statut = $_POST['statut'];	
		$connexion = connexionPDO();	
		$req = $connexion->prepare('UPDATE utilisateur SET statut = :statut WHERE id = :id');
		$req->bindParam(':statut', $Statut, PDO::PARAM_STR);
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'Statut modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification du Statut';
		}
		header('location: index.php?action=modifUtilisateurs');
	}
	
?>