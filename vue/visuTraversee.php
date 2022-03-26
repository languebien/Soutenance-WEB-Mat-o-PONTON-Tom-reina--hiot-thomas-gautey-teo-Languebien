<?php
	include_once('Modele/bd.inc.php');
?>
		<div class = "Pizza">
			<h1 class = "Titre">Réserver une Traversée</h1>
			<form id = "AfficherBateaux" action = "">
				<div class = "Filtres">
					<select class = "SelectionneSecteur" name = "SelectionneSecteur" title = "SelectionneSecteur">
						<option value="">Sélectionnez un Secteur</option>
					</select>
					<select class = "SelectionneLiaison" name = "SelectionneLiaison" title = "SelectionneLiaison">
						<option value="">Sélectionnez une liaison</option>
					</select>
					<select class = "SelectionneDate" name = "SelectionneDate" title = "SelectionneDate">
						<option value="">Sélectionnez une date</option>
					</select>
					<input type = "submit" class = "BoutonBateaux" value = "Afficher les traversées" name = "AfficheTraversees">
				</div>
			</form>
			<table class = "Table">
				<thead>
					<th class = "Table_thead_th" colspan="3">Traversée</th>
					<th class = "Table_thead_th" colspan="3">Places disponibles par catégorie</th>
				</thead>
				<thead>
					<th class = "Table_thead_th">N°</th>
					<th class = "Table_thead_th">Heure</th>
					<th class = "Table_thead_th">Bateau</th>
					<th class = "Table_thead_th">A - Passagers</th>
					<th class = "Table_thead_th">B - Veh. inf. 2M</th>
					<th class = "Table_thead_th">C - Veh. sup. 2M</th>
				</thead>
				<tbody>
					<tr>
						<td>TEST TABLEAU</td>
						<td>12:41</td>
						<td>Flying Pizza</td>
						<td>582</td>
						<td>123</td>
						<td>41</td>
					</tr>
					<tr>
						<td>TEST TABLEAU 2</td>
						<td>12:53</td>
						<td>Vanilla Raptor</td>
						<td>485</td>
						<td>32</td>
						<td>5</td>
					</tr>
				</tbody>
			</table>
		</div>

	