<?php
	session_start();
	include_once('Modele/bd.inc.php');
?>
	
<h1 class="page-header text-center">Liste des lieux</h1>
	<div class="row">
		<table id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>Nom</th>
				<th>informations</th>
				<th>ile</th>
				
			</thead>
			<tbody>
				<?php
					
				
					include_once('Modele/bd.inc.php');
					$connexion = connexionPDO();
					$SQL = "SELECT * FROM lieu";
					$stmt = $connexion->prepare($SQL);
					$stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
					$lieu = $stmt->fetchAll();
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
	</div>
    <h1 class="page-header text-center">Liste des ports</h1>
	<div class="row">
		<table id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>Nom</th>
				<th>adresse</th>
				<th>codePostal</th>
				<th>Ville</th>
				<th>lieu</th>
				
			</thead>
			<tbody>
				<?php
					
				
					include_once('Modele/bd.inc.php');
					$connexion = connexionPDO();
					$SQL = "SELECT * FROM port";
					$stmt = $connexion->prepare($SQL);
					$stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
					$ports = $stmt->fetchAll();
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

