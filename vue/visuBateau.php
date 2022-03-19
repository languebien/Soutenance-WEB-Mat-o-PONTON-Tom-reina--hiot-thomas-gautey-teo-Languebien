<?php
	include_once('Modele/bd.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "Titre">Liste des Bateaux</h1>
			<table class = "Table">
				<thead>
					<th class = "Table_thead_th">ID</th>
					<th class = "Table_thead_th">Nom</th>
					<th class = "Table_thead_th">Longueur</th>
					<th class = "Table_thead_th">Largeur</th>
					<th class = "Table_thead_th">Vitesse</th>
					<th class = "Table_thead_th">Nb Passagers</th>
					<th class = "Table_thead_th">Nb Vehicules</th>
				</thead>
				<tbody>
					<?php 
					
					foreach ($bateaux as $row){
						echo 
						"<tr>
							<td>".$row['id']."</td>
							<td>".$row['nom']."</td>
							<td>".$row['longueur']."</td>
							<td>".$row['largeur']."</td>
							<td>".$row['vitesse']."</td>
							<td>".$row['nbPassager']."</td>
							<td>".$row['nbVehicule']."</td>
						</tr>";
					}
					?>
				</tbody>
			</table>
		</div>

	