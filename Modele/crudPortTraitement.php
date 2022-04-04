<?php 
	include_once('Modele/bd.inc.php');
	

	if(isset($_POST['add'])){
		$nom = $_POST['nom'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('INSERT INTO Port (nom) VALUES (:nom)');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'Port ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout du Port';
		}
		header('location: index.php?action=modifiePort');
	}
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nom = $_POST['nom'];	
		$connexion = connexionPDO();	
		$req = $connexion->prepare('UPDATE Port SET nom = :nom WHERE id = :id');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'Port modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification du Port';
		}
		header('location: index.php?action=modifiePort');
	}
	
	if(isset($_POST['supr'])){
		$id = $_POST['id'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('DELETE FROM Port WHERE id = :id ');
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'Port supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression du Port';
		}
		header('location: index.php?action=modifiePort');
	}
?>