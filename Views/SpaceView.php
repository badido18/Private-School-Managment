<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Se Connecter- Ecole privé</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">
</head>
<body>
	<?php
		require_once __DIR__.'/Components/Nav.php';
		require_once __DIR__.'/Components/Menu.php';
	?>
	<div class="content">
        <?php
            echo "<h1>Espace $this->categoryFr</h1>";
        ?>
        <br>
        <p class="co-gray">Vous pouvez vous connecter via le portail pour acceder a votre compte</p>
        <div class="presentation">
        <div class="text">
            <button onclick="window.location.href = '/login'"> Acceder au portail</button>
        </div>
        </div>

		<h1>Articles Relatives au <?php echo $this->categoryFr ; ?></h1>
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

