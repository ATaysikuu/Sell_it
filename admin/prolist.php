<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<title>page admin liste professionnels</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<?php require_once('../include/header.php') ?>
<body>
	<?php include '../php/config.php' ?>

	<div class="container">
		<div class="wrapper">
			<h2>Liste des professionnels</h2>
			<div id="listpro_manage" class="row">
			
				<div class="prolist col-md-6">
					<input type="button" name="modify" class="button" value="Modifier"></button><!-- bouton modifier -->
					<input type=button name="delete" class="button" value="Supprimer"></button><!-- bouton supprimer -->
					<ul>
						<!-- PHP TCHOUUUUUUUUUUUUUUU ICI STP LISTE DES PROFESSIONNELS --->
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
<?php require_once('../include/footer.php') ?>
</html>