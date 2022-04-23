<?php
	include_once('Modele/bd.informations.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">Nos Bateaux</h1>
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

