<?php 
	include_once('Modele/bd.inc.php');
	

	if(isset($_POST['add'])){
		$nom = $_POST['nom'];
		$longueur = $_POST['longueur'];
		$largeur = $_POST['largeur'];
		$vitesse = $_POST['vitesse'];
		$nbP = $_POST['nbP'];
		$nbV = $_POST['nbV'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('INSERT INTO bateau (nom, longueur, largeur, vitesse, nbPassager, nbVehicule) VALUES (:nom, :longueur, :largeur, :vitesse, :nbP, :nbV)');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':longueur', $longueur, PDO::PARAM_INT);
		$req->bindParam(':largeur', $largeur, PDO::PARAM_INT);
		$req->bindParam(':vitesse', $vitesse, PDO::PARAM_INT);
		$req->bindParam(':nbP', $nbP, PDO::PARAM_INT);
		$req->bindParam(':nbV', $nbV, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'Bateau ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout du bateau';
		}
		header('location: index.php?action=modifBateau');
	}
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nom = $_POST['nom'];	
		$longueur = $_POST['longueur'];
		$largeur = $_POST['largeur'];
		$vitesse = $_POST['vitesse'];
		$nbP = $_POST['nbP'];
		$nbV = $_POST['nbV'];
		$connexion = connexionPDO();	
		$req = $connexion->prepare('UPDATE bateau SET nom = :nom, longueur = :longueur, largeur = :largeur, vitesse = :vitesse, nbPassager = :nbP, nbVehicule = :nbV WHERE id = :id');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$req->bindParam(':longueur', $longueur, PDO::PARAM_INT);
		$req->bindParam(':largeur', $largeur, PDO::PARAM_INT);
		$req->bindParam(':vitesse', $vitesse, PDO::PARAM_INT);
		$req->bindParam(':nbP', $nbP, PDO::PARAM_INT);
		$req->bindParam(':nbV', $nbV, PDO::PARAM_INT);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'Bateau modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification du bateau';
		}
		header('location: index.php?action=modifBateau');
	}
	
	if(isset($_POST['supr'])){
		$id = $_POST['id'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('DELETE FROM bateau WHERE id = :id ');
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'Bateau supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression du bateau';
		}
		header('location: index.php?action=modifBateau');
	}
?>