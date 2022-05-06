<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier le port</h4></center>
            </div>
            <div class="modal-body">
				<form method="POST" action="?action=modifPort">
					<div class="container-fluid">
						<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
						<div class="row form-group">
							<div class="col-sm-10">
								<label class="control-label modal-label">Nom :</label>
								<input type="text" class="form-control" name="nom" value="<?php echo $row['nom']; ?>">

								<label class="control-label modal-label">Adresse :</label>
								<input type="text" class="form-control" name="adresse" value="<?php echo $row['adresse']; ?>">
								
								<label class="control-label modal-label">Code Postal :</label>
								<input type="text" class="form-control" name="codeP" value="<?php echo $row['codePostal']; ?>">
								
								<label class="control-label modal-label">Ville :</label>
								<input type="text" class="form-control" name="ville" value="<?php echo $row['ville']; ?>">
								
								<label class="control-label modal-label">Lieu :</label>
								<input type="text" class="form-control" name="idL" value="<?php echo $row['idLieu']; ?>">
							</div>
						</div>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Modifier</a>
				</div>
			</form>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer port</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sure de vouloir supprimer le port <?php echo $row['nom']; ?></p>
			</div>
            <div class="modal-footer">
				<form method="POST" action="?action=modifPort">
					<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="supr" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
				</form>
            </div>

        </div>
    </div>
</div>