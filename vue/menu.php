
<body>
	<div id = "Wrapper">
		<nav class="NavBar" role="navigation">
			<ul class="NavBar_Logo">
				<li><a
				 class = "Logo" href="index.php?action=acceuil">Compagnie Océane</a></li>
			</ul>
			<ul class="NavBar_Pages">
				<?php
				if (isLoggedOn()){
					if (isAdmin()){
						echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifUtilisateurs">U T I L I S A T E U R S</a></li>';
					}
					else {
						echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifUtilisateurs">U T I L I S A T E U R S</a></li>';
					}
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifBateau">B A T E A U X</a></li>';
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifLieu">L I E U X</a></li>';
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifPort">P O R T S</a></li>';
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifLiaison">L I A S O N</a></li>';
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifTraverse">T R A V E R S E</a></li>';
					echo '<li><a class = "NavBar_Admin_Link" href="index.php?action=deconnexion">D E C O N N E X I O N</a></li>';
				}
				else {
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=afficheSecteurs">S E C T E U R S</a></li>';
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=affichePorts">P O R T S</a></li>';
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=afficheBateaux">B A T E A U X</a></li>';
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=connexion">C O N N E X I O N</a></li>';
				}
				?>
				
			</ul>
		</nav>
