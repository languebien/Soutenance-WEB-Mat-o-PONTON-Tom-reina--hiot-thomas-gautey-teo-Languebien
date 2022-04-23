<?php
	include_once('Modele/bd.informations.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">Secteurs</h1>
			<p class = "TexteInfo">Les secteurs de notre compagnie. Découvrez les <a href = "index.php?action=affichePorts">ports desservis</a> et nos <a href = "index.php?action=afficheBateaux">bateaux</a> !</p>
			<table class = "Tableau">
				<thead class = "Tableau_Entete">
					<!-- <th class = "Tableau_TitreColonne">ID</th> -->
					<th class = "Tableau_TitreColonne">Nom</th>
				</thead>
				<tbody>
					<?php 
					
					foreach ($Secteurs as $row){
						echo 
						"<tr>
							<!-- <td class = 'Tableau_TexteColonne'>".$row['id']."</td> -->
							<td class = 'Tableau_TexteColonne'>".$row['libelle']."</td>
						</tr>";
					}
					?>
				</tbody>
			</table>
		</div>

	