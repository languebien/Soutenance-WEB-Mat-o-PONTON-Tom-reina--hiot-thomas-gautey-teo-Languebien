<?php 
	include_once('Modele/bd.inc.php');
	

	if(isset($_POST['add'])){
		$nom = $_POST['nom'];
		$info = $_POST['info'];
		$ile = $_POST['ile'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('INSERT INTO lieu (nom, informations, ile ) VALUES (:nom, :info, :ile)');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':info', $info, PDO::PARAM_STR);
		$req->bindParam(':ile', $ile, PDO::PARAM_STR);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'Lieu ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout du Lieu';
		}
		header('location: index.php?action=modifLieu');
	}
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nom = $_POST['nom'];	
		$connexion = connexionPDO();	
		$req = $connexion->prepare('UPDATE lieu SET nom = :nom WHERE id = :id');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'Lieu modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification du Lieu';
		}
		header('location: index.php?action=modifLieu');
	}
	
	if(isset($_POST['supr'])){
		$id = $_POST['id'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('DELETE FROM lieu WHERE id = :id ');
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'Lieu supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression du Lieu';
		}
		header('location: index.php?action=modifLieu');
	}
?>