<!doctype html>
<html lang="fr">
<?php
	include('routes.php');
?>


<head>
 	<meta charset="utf-8" />
	<link rel="shortcut icon" href="skin/favicon.ico" />
	<link rel="icon" type="image/png" href="./Images/acceuil.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="robots" content="index,follow,all" />
	<title><?php echo $title; ?></title>
	
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">

</head>

<body>

	<header>
		<?php include('bandeau.php'); ?>
	</header>

	<nav class="navbar navbar-default" role="navigation">
		<?php include('menu.php'); ?>
	</nav>

	<div class="container">
		<?php include($affiche); ?>
	</div>	

	<!-- Footer -->
	<footer class="page-footer font-small blue pt-4"">
		<?php include('pied_page.php'); ?>
	</footer>
	<!-- Footer -->

</body>
</html>