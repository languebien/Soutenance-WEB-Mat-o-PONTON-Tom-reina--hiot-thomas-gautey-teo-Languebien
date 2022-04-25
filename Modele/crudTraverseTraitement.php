<?php 
	include_once('Modele/bd.inc.php');
	

	if(isset($_POST['add'])){
		$numero = $_POST['numero'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('INSERT INTO traverse (numero) VALUES (:numero)');
		$req->bindParam(':numero', $numero, PDO::PARAM_STR);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'traverse ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout de la traverse';
		}
		header('location: index.php?action=modifTraverse');
	}
	
	if(isset($_POST['edit'])){
		$numero = $_POST['numero'];
		$idBateau = $_POST['idbateau'];	
		$connexion = connexionPDO();	
		$req = $connexion->prepare('UPDATE  traverse SET idbateau = :idbateau WHERE numero = :numero');
		$req->bindParam(':idbateau', $idBateau, PDO::PARAM_STR);
		$req->bindParam(':numero', $numero, PDO::PARAM_INT);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'traverse modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification du traverse';
		}
		header('location: index.php?action=modifTraverse');
	}
	
	if(isset($_POST['supr'])){
		$numero = $_POST['numero'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('DELETE FROM traverse WHERE numero = :numero ');
		$req->bindParam(':numero', $numero, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'Traverse supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression du Traverse';
		}
		header('location: index.php?action=modifTraverse');
	}
?>