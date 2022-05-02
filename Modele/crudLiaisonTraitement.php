<?php 
	include_once('Modele/bd.inc.php');
	

	if(isset($_POST['add'])){
		$idB = $_POST['bateau'];
        $idB2 = $_POST['bateau2'];
        $idS = $_POST['secteur'];
        $idM = $_POST['milles'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('INSERT INTO liaison (idPortDepart,idPortArrivee,idSecteur,dMilles) VALUES (:bateau, :bateau2, :secteur, :milles)');
		$req->bindParam(':bateau', $idB, PDO::PARAM_STR);
        $req->bindParam(':bateau2', $idB2, PDO::PARAM_STR);
        $req->bindParam(':secteur', $idS, PDO::PARAM_STR);
        $req->bindParam(':milles', $idM, PDO::PARAM_STR);
        
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'liaison ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout de la liaison';
		}
		header('location: index.php?action=modifLiaison');
	}
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Milles = $_POST['dMilles'];	
		$connexion = connexionPDO();	
		$req = $connexion->prepare('UPDATE liaison SET dMilles = :dMilles WHERE id = :id');
		$req->bindParam(':dMilles', $Milles, PDO::PARAM_STR);
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'liaison modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification de la liaison';
		}
		header('location: index.php?action=modifLiaison');
	}
	
	if(isset($_POST['supr'])){
		$id = $_POST['id'];
		$connexion = connexionPDO();
		$req = $connexion->prepare('DELETE FROM liaison WHERE id = :id ');
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'Bateau supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression de la liaison';
		}
		header('location: index.php?action=modifLiaison');
	}
?>