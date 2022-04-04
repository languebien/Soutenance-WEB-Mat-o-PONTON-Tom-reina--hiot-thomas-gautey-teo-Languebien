
<body>
	<div id = "Wrapper">
		<nav class="NavBar" role="navigation">
			<ul class="NavBar_Logo">
				<li><a class = "Logo" href="index.php?action=acceuil">Compagnie Océane</a></li>
			</ul>
			<ul class="NavBar_Pages">
				<li><a class = "NavBar_Pages_Link" href="index.php?action=afficheTraversee">Traversées</a></li>
				<li><a class = "NavBar_Pages_Link" href="index.php?action=afficheInformations">Informations</a></li>
				<?php
				if (isLoggedOn()){
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifieBateau">bateaux</a></li>';
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifieLieu">lieux</a></li>';
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifiePort">ports</a></li>';
				
				}
				
				?>
			</ul>
			<ul class="NavBar_Admin">
				<li><a class = "NavBar_Admin_Link" href="index.php?action=connexion">Connexion</a></li>
				
				<li><a class = "NavBar_Admin_Link" href="index.php?action=deconnexion">Deconnexion</a></li>
			</ul>
		</nav>
