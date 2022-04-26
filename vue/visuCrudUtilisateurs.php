<?php
	include_once('Modele/bd.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "TitreInfo">Gestion des Utilisateurs</h1>
			<p class = "TexteInfo">Modifiez le statut des utilisateurs.</p>
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
		
			<table class = "Tableau_CRUD">
				<thead class = "Tableau_Entete">
					<th class = "Tableau_TitreColonne">ID</th>
					<th class = "Tableau_TitreColonne">Mail</th>
					<th class = "Tableau_TitreColonne">Statut</th>
					<th class = "Tableau_TitreColonne">Mot de Passe (Crypté)</th>
					<th class = "Tableau_TitreColonne">Pseudo</th>
					<th class = "Tableau_TitreColonne">Droits</th>
				</thead>
				<tbody>
					<?php
						foreach ($Utilisateurs as $row){
							if (isAdmin()) {
								echo 
								"<tr>
									<td class = 'Tableau_TexteColonne'>".$row['id']."</td>
									<td class = 'Tableau_TexteColonne'>".$row['mailU']."</td>
									<td class = 'Tableau_TexteColonne'>".$row['statut']."</td>
									<td class = 'Tableau_TexteColonne'>".$row['mdpU']."</td>
									<td class = 'Tableau_TexteColonne'>".$row['pseudoU']."</td>
									<td class = 'Tableau_TexteColonne'>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
									</td>
								</tr>";
								include('crudUtilisateurs/edit_delete_modal.php');
							}
							else {
								echo 
								"<tr>
									<td class = 'Tableau_TexteColonne'>".$row['id']."</td>
									<td class = 'Tableau_TexteColonne'>".$row['mailU']."</td>
									<td class = 'Tableau_TexteColonne'>".$row['statut']."</td>
									<td class = 'Tableau_TexteColonne'>".$row['mdpU']."</td>
									<td class = 'Tableau_TexteColonne'>".$row['pseudoU']."</td>
									<td class = 'Tableau_TexteColonne'>Vous ne pouvez pas modifier les droits.</td>
								</tr>";
							}
							
						}
					?>
				</tbody>
			</table>

        </div>

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
