<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil - Ecole privé</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">
</head>
<body>
	<?php
		require_once __DIR__.'/Components/Nav.php';
		require_once __DIR__.'/Components/Diapo.php';
		require_once __DIR__.'/Components/Menu.php';
	?>
	<div class="content">
		<h1>Articles Interessants</h1>
		<?php
			require_once __DIR__.'/Components/ArticlesContainer.php';
			require_once __DIR__.'/Components/ArticlesPageViewer.php';
		?>
	</div>
	<?php
		require_once __DIR__.'/Components/Footer.php';
	?>
	
</body>
</html>