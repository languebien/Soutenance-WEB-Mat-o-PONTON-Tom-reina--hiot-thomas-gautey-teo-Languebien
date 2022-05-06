<?php 
	include_once('Modele/bd.inc.php');
	

	if(isset($_POST['add'])){
		$nom = $_POST['nom'];
		$adresse = $_POST['adresse'];
		$code = $_POST['codePostal'];
		$ville = $_POST['ville'];
		$lieu = $_POST['lieu'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('INSERT INTO Port (nom, adresse, codePostal, ville, idLieu) VALUES (:nom, :adresse, :codePostal, :ville, :lieu)');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':adresse', $adresse, PDO::PARAM_STR);
		$req->bindParam(':codePostal', $code, PDO::PARAM_STR);
		$req->bindParam(':ville', $ville, PDO::PARAM_STR);
		$req->bindParam(':lieu', $lieu, PDO::PARAM_STR);
		$resultat = $req->execute();
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
		header('location: index.php?action=modifPort');
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
		header('location: index.php?action=modifPort');
	}
?>