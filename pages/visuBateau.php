<?php
	session_start();
	include_once('BDD/connectBdd.php');
?>
	
<h1 class="page-header text-center">Liste des Bateaux</h1>
	<div class="row">
		<table id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>Nom</th>
				<th>Longueur</th>
				<th>Largeur</th>
				<th>Vitesse</th>
				<th>Nb Passager</th>
				<th>Nb Vehicule</th>
			</thead>
			<tbody>
				<?php
					
					include_once('BDD/connectBdd.php');
					$SQL = "SELECT * FROM bateau";
					$stmt = $connexion->prepare($SQL);
					$stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
					$bateaux = $stmt->fetchAll();
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
