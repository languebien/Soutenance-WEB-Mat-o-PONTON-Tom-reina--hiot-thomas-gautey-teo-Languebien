<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter un nouveau bateau</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="?action=modifBateau">
				<div class="row form-group">
					<div class="col-sm-10">
                        <label class="control-label modal-label">Nom :</label>
						<input type="text" class="form-control" name="nom" required>

                        <label class="control-label modal-label">Longueur :</label>
                        <input type="text" class="form-control" name="longueur" required>

                        <label class="control-label modal-label">Largeur :</label>
                        <input type="text" class="form-control" name="largeur" required>

                        <label class="control-label modal-label">Vitesse :</label>
                        <input type="text" class="form-control" name="vitesse" required>

                        <label class="control-label modal-label">Places Disponibles :</label>
                        <input type="text" class="form-control" name="nbP" required>

                        <label class="control-label modal-label">Emplacements de Véhicules :</label>
                        <input type="text" class="form-control" name="nbV" required>
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