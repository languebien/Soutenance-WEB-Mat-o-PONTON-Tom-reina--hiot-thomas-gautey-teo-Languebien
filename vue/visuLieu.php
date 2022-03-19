<?php
	session_start();
	
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

