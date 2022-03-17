<?php
	/* Détermination du nom de la page à charger après vérification de sa validité */
	$cheminPagesAffiche = "pages/"; 
	$title = "Page sans titre";
	$keywords = "";
	$description = "";
	
	/* choix de la valeur de la variable $affiche en fonction de parametre page transmis */
	$affiche = "lostinspace.php";
	if (!isset($_GET['action'])){
		$affiche = "presentation.php";
	} 
	else {
		switch ($_GET['action']) {
			case (""):
			case ("accueil"):
				$affiche = "presentation.php";
				$title = "Compagnie Océane - Accueil";
				$keywords = "accueil compagnie Océane";
				$description = "page d'accueil de la Compagnie Océane";
				break;
			case ("afficheLieu"):
				$affiche = "XXXXXX.php";
				break;
			case ("modifierLieu"):
					$affiche = "XXXXXX.php";
					break;
			case ("afficheBateau"):
				$affiche = "visuBateau.php";
				break;
			case ("modifieBateau"):
				$affiche = "crudBateau.php";
				break;
			case ("bateauTraitement"):
				$affiche = "crudBateau/crudBateauTraitement.php";
				break;	
				
			default:
				$affiche = "lostinspace.php";
		}			
	}
    
    /* concatenation du chemin du dossier contenant les pages avec le contenu de $affiche */
    $affiche = $cheminPagesAffiche . $affiche; 

	
?>
