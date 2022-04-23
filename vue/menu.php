
<body>
	<div id = "Wrapper">
		<nav class="NavBar" role="navigation">
			<ul class="NavBar_Logo">
				<li><a
				 class = "Logo" href="index.php?action=acceuil">Compagnie Océane</a></li>
			</ul>
			<ul class="NavBar_Pages">
				<li><a class = "NavBar_Pages_Link" href="index.php?action=afficheSecteurs">S E C T E U R S</a></li>
				<li><a class = "NavBar_Pages_Link" href="index.php?action=affichePorts">P O R T S</a></li>
				<li><a class = "NavBar_Pages_Link" href="index.php?action=afficheBateaux">B A T E A U X</a></li>
				
				<?php
				if (isLoggedOn()){
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifieBateau">B A T E A U X</a></li>';
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifieLieu">L I E U X</a></li>';
				echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=modifiePort">P O R T S</a></li>';
				echo '<li><a class = "NavBar_Admin_Link" href="index.php?action=deconnexion">D E C O N N E X I O N</a></li>';
				}
				else {
					echo '<li><a class = "NavBar_Pages_Link" href="index.php?action=connexion">C O N N E X I O N</a></li>';
				}
				?>
				
			</ul>
		</nav>
