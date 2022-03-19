<?php

	session_start();

	

	include_once('Modele/bd.inc.php');

?>
	
<h1 class="page-header text-center">CRUD Lieux</h1>
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
				<th>informations</th>
				<th>ile</th>
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
						include('crudBateau/edit_delete_modal.php');
					}
				?>
			</tbody>
		</table>
	</div>
	<h1 class="page-header text-center">CRUD ports</h1>
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
				<th>adresse</th>
				<th>code postal</th>
				<th>ville</th>
				<th>lieu</th>
			</thead>
			<tbody>
				<?php
					
					
					foreach ($port as $row){
						echo 
						"<tr>
							<td>".$row['id']."</td>
							<td>".$row['nom']."</td>
							<td>".$row['adresse']."</td>
							<td>".$row['codePostal']."</td>
							<td>".$row['ville']."</td>
							<td>".$row['idLieu']."</td>
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
