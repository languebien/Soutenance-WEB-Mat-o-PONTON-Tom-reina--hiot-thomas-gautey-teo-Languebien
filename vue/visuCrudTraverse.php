<?php
	include_once('Modele/bd.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">CRUD Traverse</h1>
			<p class = "TexteInfo">Ajoutez, modifiez et supprimez des traversées.</p>
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
					<th class = "Tableau_TitreColonne">Numero</th>
					<th class = "Tableau_TitreColonne">Heure Départ</th>
					
					<th class = "Tableau_TitreColonne">Date Départ</th>
					<th class = "Tableau_TitreColonne">Bateau</th>
					<th class = "Tableau_TitreColonne">Liaison</th>
					<th class = "Tableau_TitreColonne">Action</th>
				</thead>
				<tbody>
					<?php
                    
						foreach ($Traverse as $row){
							echo 
							"<tr>
								<td class = 'Tableau_TexteColonne'>".$row['numero']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['heureDep']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['dateDep']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['idBateau']."</td>
								<td class = 'Tableau_TexteColonne'>".$row['idLiaison']."</td>
								
								<td class = 'Tableau_TexteColonne'>
									<a href='#edit_".$row['numero']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
									<a href='#delete_".$row['numero']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
								</td>
							</tr>";
							include('crudTraverse/edit_delete_modal.php');
						}
                        

					?>
				</tbody>
			</table>

		</div>

<?php include('crudTraverse/add_modal.php') ?>

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