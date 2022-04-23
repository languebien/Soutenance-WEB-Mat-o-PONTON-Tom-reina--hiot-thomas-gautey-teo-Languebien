<?php
	include_once('Modele/bd.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">CRUD Ports</h1>
			<p class = "TexteInfo">Ajoutez, modifiez et supprimez des ports.</p>
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
					<th class = "Tableau_TitreColonne">Adresse</th>
					<th class = "Tableau_TitreColonne">Code Postal</th>
					<th class = "Tableau_TitreColonne">Ville</th>
					<th class = "Tableau_TitreColonne">Lieu</th>
					<th class = "Tableau_TitreColonne">Action</th>
				</thead>
				<tbody>
					<?php
						foreach ($Ports as $row){
							echo 
							"<tr>
								<td class = 'Tableau_TexteColonne'>".$row['id']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['nom']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['adresse']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['codePostal']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['ville']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['idLieu']."</td>
								<td class = 'Tableau_TexteColonne'>
									<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
									<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
								</td>
							</tr>";
							include('crudPort/edit_delete_modal.php');
						}
					?>
				</tbody>
			</table>

		</div>

<?php include('crudPort/add_modal.php') ?>

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