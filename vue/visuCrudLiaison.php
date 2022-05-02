<?php
	include_once('Modele/bd.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">CRUD Liaison</h1>
			<p class = "TexteInfo">Ajoutez, modifiez et supprimez des Liaison.</p>
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
					<th class = "Tableau_TitreColonne">PortDepart</th>
					<th class = "Tableau_TitreColonne">PortArrivee</th>
					<th class = "Tableau_TitreColonne">Secteur</th>
					<th class = "Tableau_TitreColonne">Distance en Milles</th>
                    <th class = "Tableau_TitreColonne">Action</th>
					
				</thead>
				<tbody>
					<?php
						foreach ($Liaison as $row){
							echo 
							"<tr>
								<td class = 'Tableau_TexteColonne'>".$row['id']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['NomPortDepart']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['NomPortArrivee']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['secteur']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['dMilles']."</td>
								
								<td class = 'Tableau_TexteColonne'>
									<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
									<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
								</td>
							</tr>";
							include('crudLiaison/edit_delete_modal.php');
						}
					?>
				</tbody>
			</table>

            </div>

<?php include('crudLiaison/add_modal.php') ?>

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
