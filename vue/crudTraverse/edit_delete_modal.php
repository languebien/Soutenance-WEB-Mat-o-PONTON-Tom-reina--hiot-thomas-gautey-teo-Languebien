<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['numero']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier Traverse</h4></center>
            </div>
            <div class="modal-body">
				<form method="POST" action="?action=modifTraverse">
					<div class="container-fluid">
						<input type="hidden" class="form-control" name="numero" value="<?php echo $row['numero']; ?>">
						<div class="row form-group">
							<div class="col-sm-10">
								<label class="control-label modal-label">ID Bateau :</label>
								<input type="text" class="form-control" name="idbateau" value="<?php echo $row['idBateau']; ?>">
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
<div class="modal fade" id="delete_<?php echo $row['numero']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer Traverse</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sure de vouloir supprimer la Traverse <?php echo $row['numero']; ?></p>
			</div>
            <div class="modal-footer">
				<form method="POST" action="?action=modifTraverse">
					<input type="hidden" class="form-control" name="numero" value="<?php echo $row['numero']; ?>">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="supr" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
				</form>
            </div>

        </div>
    </div>
</div>