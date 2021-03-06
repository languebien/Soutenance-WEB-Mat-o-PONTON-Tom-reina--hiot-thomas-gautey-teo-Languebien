<?php
	include_once('Modele/bd.bateau.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">Nos Bateaux</h1>
			<p class = "TexteInfo">Séléctionnez un secteur pour voir les bateaux affectés à ce secteur.</p>

			<form id = "FormulaireSelectionBateaux" action = "./?action=afficheBateaux" method = "POST">

				<select class = "FiltreBateaux" name = "FiltreBateaux" title = "FiltreBateaux">
					<option value="">Sélectionnez un Secteur</option>
					<?php
						foreach($Secteurs as $row) {
							$Selected = "";
							echo '<option value="'.$row['libelle'].'" '.$Selected.'>'.$row['libelle'].'</option>';
						}
					?>
					<option>Tous les Secteurs</option>
				</select>

				<input name = "AppliqueFiltreBateaux" value = "Filtrer par Secteur" class = "FiltreBateauxBouton" type = "submit">

			</form>
			
			<table class = "Tableau">
				<thead class = "Tableau_Entete">
					<!-- <th class = "Tableau_TitreColonne">ID</th> -->
					<th class = "Tableau_TitreColonne">Nom</th>
					<th class = "Tableau_TitreColonne">Longueur</th>
					<th class = "Tableau_TitreColonne">Largeur</th>
					<th class = "Tableau_TitreColonne">Vitesse</th>
					<th class = "Tableau_TitreColonne">Nb Passagers</th>
					<th class = "Tableau_TitreColonne">Nb Vehicules</th>
				</thead>
				<tbody>
					<?php 
					
					foreach ($Bateaux as $row){
						echo 
						"<tr>
							<!-- <td class = 'Tableau_TexteColonne'>".$row['id']."</td> -->
							<td class = 'Tableau_TexteColonne'>".$row['nom']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['longueur']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['largeur']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['vitesse']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['nbPassager']."</td>
							<td class = 'Tableau_TexteColonne'>".$row['nbVehicule']."</td>
						</tr>";
					}
					?>
				</tbody>
			</table>
		</div>

