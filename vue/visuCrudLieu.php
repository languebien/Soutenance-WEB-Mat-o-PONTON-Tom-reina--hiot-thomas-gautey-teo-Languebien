<?php
	
	include_once('Modele/bd.inc.php');
?>

<div class = "Pizza">
<h1 class = "Titre">CRUD Lieux</h1>
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
		
			<table class = "Table" >
				<thead>
					<th class = "Table_thead_th">ID</th>
					<th class = "Table_thead_th">Nom</th>
					<th class = "Table_thead_th">Informations</th>
					<th class = "Table_thead_th">Ile</th>
					<th class = "Table_thead_th_Action">Action</th>
				</thead>
				<tbody>
					<?php
						
						include_once('Modele/bd.inc.php');

						
						foreach ($lieu as $row){
							echo 
							"<tr>
								<td>".$row['id']."</td>
								<td>".$row['nom']."</td>
								<td>".$row['informations']."</td>
								<td>".$row['ile']."</td>
								
								<td>
									<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
									<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
								</td>
							</tr>";
							include('crudlieu/edit_delete_modal.php');
						}
					?>
				</tbody>
			</table>









		</div>

<?php include('crudlieu/add_modal.php') ?>

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