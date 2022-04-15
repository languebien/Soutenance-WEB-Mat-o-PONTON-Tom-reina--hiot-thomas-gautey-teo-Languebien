
<body>
	<div id = "Wrapper">
		<nav class="NavBar" role="navigation">
			<ul class="NavBar_Logo">
				<li><a
				 class = "Logo" href="index.php?action=acceuil">Compagnie Océane</a></li>
			</ul>
			<ul class="NavBar_Pages">
				<li><a class = "NavBar_Pages_Link" href="index.php?action=afficheTraversee">Traversées</a></li>
				<li><a class = "NavBar_Pages_Link" href="index.php?action=afficheInformations">Informations</a></li>
				<?php
				if (isLoggedOn()){
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifieBateau">Bateaux</a></li>';
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifieLieu">Lieux</a></li>';
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifiePort">Ports</a></li>';
				echo '<li><a class = "NavBar_Admin_Link" href="index.php?action=deconnexion">Deconnexion</a></li>';
				}
				else {
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=connexion">Connexion</a></li>';
				}
				?>
			</ul>
		</nav>
