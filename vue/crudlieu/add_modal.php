<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter un nouveau lieu</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="?action=modifLieu">
				<div class="row form-group">
					<div class="col-sm-10">
                        <label class="control-label modal-label">Nom :</label> 
						<input type="text" class="form-control" name="nom" required>

                        <label class="control-label modal-label">Informations :</label>
                        <input type="text" class="form-control" name="info" required>

                        <label class="control-label modal-label">Ile :</label>
                        <select class="form-control" name="ile" required>*
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer</a>
			</form>
            </div>

        </div>
    </div>
</div>