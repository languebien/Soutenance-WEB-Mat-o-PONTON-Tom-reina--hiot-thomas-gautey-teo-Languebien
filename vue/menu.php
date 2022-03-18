<body>
	<nav class="navbar navbar-default" role="navigation">
		<!-- Partie de la barre toujours affichée -->
		<div class="navbar-header">
			<!-- Bouton d'accès affiché à droite si la zone d'affichage est trop petite -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
				<span class="sr-only">Activer la navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<!-- Partie de la barre masquée si la surface d'affichage est insuffisante -->
		<div class="collapse navbar-collapse" id="navbar-collapse-target">
			<ul class="nav navbar-nav">
				<li><a href="index.php?action=afficheBateau">Afficher les bateaux</a></li>
				<li><a href="index.php?action=modifieBateau">Modifier les bateaux</a></li>
				<li><a href="index.php?action=afficheLieu">Afficher les lieux et ports</a></li>
				<li><a href="index.php?action=modifieLieu">Modifier les lieux et ports</a></li>
				<li><a href="index.php?action=connexion">connexion</a></li>
				<li><a href="index.php?action=deconnexion">deconnexion</a></li>
			</ul>
			
		</div>
	</nav>

