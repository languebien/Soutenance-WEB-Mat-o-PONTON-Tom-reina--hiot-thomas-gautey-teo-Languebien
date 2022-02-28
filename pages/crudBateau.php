<?php
	session_start();
	include_once('BDD/connectBdd.php');

?>
	
<h1 class="page-header text-center">CRUD Bateaux</h1>
	<div class="row">
		<div class="row">
		<?php
			if(isset($_SESSION['error'])){
				echo
				"
				<div class='alert alert-danger text-center'>
					<button class='close'>&times;</button>
					".$_SESSION['error']."
				</div>
				";
				unset($_SESSION['error']);
			}
			if(isset($_SESSION['success'])){
				echo
				"
				<div class='alert alert-success text-center'>
					<button class='close'>&times;</button>
					".$_SESSION['success']."
				</div>
				";
				unset($_SESSION['success']);
			}
		?>
		</div>
		<div class="row">
			<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter</a>
		</div>
		<div class="height10">
		</div>
	</div>	
		
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
				<th>Action</th>
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
							<td>
								<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
								<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
							</td>
						</tr>";
						include('crudBateau/edit_delete_modal.php');
					}
				?>
			</tbody>
		</table>
	</div>

<?php include('crudBateau/add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
