<?php
	include_once('Modele/bd.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">CRUD Bateaux</h1>
			<p class = "TexteInfo">Ajoutez, modifiez et supprimez des bateaux.</p>
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

			<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter</a>
		
			<table class = "Tableau_CRUD">
				<thead class = "Tableau_Entete">
					<th class = "Tableau_TitreColonne">ID</th>
					<th class = "Tableau_TitreColonne">Nom</th>
					<th class = "Tableau_TitreColonne">Longueur</th>
					<th class = "Tableau_TitreColonne">Largeur</th>
					<th class = "Tableau_TitreColonne">Vitesse</th>
					<th class = "Tableau_TitreColonne">Nb Passager</th>
					<th class = "Tableau_TitreColonne">Nb Vehicule</th>
					<th class = "Tableau_TitreColonne">Action</th>
				</thead>
				<tbody>
					<?php
						foreach ($Bateaux as $row){
							echo 
							"<tr>
								<td class = 'Tableau_TexteColonne'>".$row['id']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['nom']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['longueur']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['largeur']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['vitesse']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['nbPassager']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['nbVehicule']."</td>
								<td class = 'Tableau_TexteColonne'>
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
