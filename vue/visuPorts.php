<?php
	include_once('Modele/bd.informations.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">Ports Desservis</h1>
			<p class = "TexteInfo">Séléctionnez un secteur pour voir les ports appartenant au secteur séléctionné.</p>

			<form id = "FormulaireSelectionPorts" action = "./?action=affichePorts" method = "POST">

				<select class = "FiltreSecteurs" name = "FiltreSecteurs" title = "FiltreSecteurs">
					<option value="">Sélectionnez un Secteur</option>
					<?php
						foreach($Secteurs as $row) {
							$Selected = "";
							echo '<option value="'.$row['libelle'].'" '.$Selected.'>'.$row['libelle'].'</option>';
						}
					?>
					<option value="">Tous les Secteurs</option>
				</select>

				<input name = "AppliqueFiltreSecteurs" value = "Filtrer par Secteur" class = "FiltreSecteursBouton" type = "submit">

			</form>

			<table class = "Tableau">
				<thead class = "Tableau_Entete">
					<!-- <th class = "Tableau_TitreColonne">ID</th> -->
					<th class = "Tableau_TitreColonne">Nom</th>
					<th class = "Tableau_TitreColonne">Adresse</th>
					<th class = "Tableau_TitreColonne">Code Postal</th>
					<th class = "Tableau_TitreColonne">Ville</th>
					<th class = "Tableau_TitreColonne">Lieu</th>
				</thead>
				<tbody>
					<?php 
					
					foreach ($Ports as $row){
						echo 
						"<tr>
							<!-- <td class = 'Tableau_TexteColonne'>".$row['id']."</td> -->
							<td class = 'Tableau_TexteColonne'>".$row['nomPort']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['adresse']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['codePostal']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['ville']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['nomLieu']."</td>
						</tr>";
					}
					?>
				</tbody>
			</table>
		</div>

	