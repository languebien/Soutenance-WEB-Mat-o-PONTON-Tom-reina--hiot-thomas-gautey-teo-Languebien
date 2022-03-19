<?php
	session_start();
?>

		<div class = "Pizza">
			<h1 class = "Titre">Liste des lieux</h1>
			<table class = "Table">
				<thead>
					<th class = "Table_thead_th">ID</th>
					<th class = "Table_thead_th">Nom</th>
					<th class = "Table_thead_th">Informations</th>
					<th class = "Table_thead_th">Ile</th>
					
				</thead>
				<tbody>
					<?php
						
						foreach ($lieu as $row){
							echo 
							"<tr>
								<td>".$row['id']."</td>
								<td>".$row['nom']."</td>
								<td>".$row['informations']."</td>
								<td>".$row['ile']."</td>
							</tr>";
						}
					
					?>
				</tbody>
			</table>
			<h1 class = "Titre">Liste des ports</h1>
			<table class = "Table">
				<thead>
					<th class = "Table_thead_th">ID</th>
					<th class = "Table_thead_th">Nom</th>
					<th class = "Table_thead_th">Adresse</th>
					<th class = "Table_thead_th">Code Postal</th>
					<th class = "Table_thead_th">Ville</th>
					<th class = "Table_thead_th">Lieu</th>
					
				</thead>
				<tbody>
					<?php
						
						foreach ($ports as $row){
							echo 
							"<tr>
								<td>".$row['id']."</td>
								<td>".$row['nom']."</td>
								<td>".$row['adresse']."</td>
								<td>".$row['codePostal']."</td>
								<td>".$row['ville']."</td>
								<td>".$row['idLieu']."</td>
								
							</tr>";
						}
					
					?>
				</tbody>
			</table>
		</div>

