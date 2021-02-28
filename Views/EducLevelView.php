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
        <?php
            echo "<h1>Enseignement $this->levelName</h1>";
        ?>
        <div class="optionHolder">
            <a href="/emplois">
                <div class="option">
                    <img src="/src/img/schedule.svg" alt="">
                    <h3>Emploi du Temps</h3>
                    <p>Consulter les emplois du temps global des etudiants</p>
                </div>
            </a>
            <a href="/enseignants">
                <div class="option">
                    <img src="/src/img/teacher.svg" alt="">
                    <h3>Ensegnants</h3>
                    <p>Voir nos enseignants et leur heures de reception</p>
                </div>
            </a>
            <a href="/404">
                <div class="option">
                    <img src="/src/img/info.svg" alt="">
                    <h3>Information</h3>
                    <p>Consulter des informations anexes</p>
                </div>
            </a>
            <a href="/restauration">
                <div class="option">
                    <img src="/src/img/food.svg" alt="">
                    <h3>Restauration</h3>
                    <p>Voir Les menus servi a l'ecole pour nos eleves</p>
                </div>
            </a>
        </div>
		<h1>Articles Relatives</h1>
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