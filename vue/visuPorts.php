<?php
	include_once('Modele/bd.informations.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">Ports Desservis</h1>
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

	