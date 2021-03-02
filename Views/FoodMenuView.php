<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restauration - Ecole privé</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">
</head>
<body>
	<?php
		require_once __DIR__.'/Components/Nav.php';
		require_once __DIR__.'/Components/Menu.php';
	?>
	<div class="content">
        <h1>Menu du restaurant de l'ecole</h1>
        <br>
        <p class="co-gray">Consulter les repas du jour de la semaine</p>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader grid-cols-2">
                <div class="txt"><h3>Jour</h3></div>
                <div class="txt"><h3>Repas</h3></div> 
            </div>
            <?php 
                foreach ($this->loadFoodMenu() as $teacher) {
                    echo "  <div class=\"listElt grid-cols-2\">
                                <div class=\"txt\"><p>$teacher->dayName</p></div> 
                                <div class=\"txt\"><p>$teacher->meal</p></div>
                            </div>";
                }
            ?>
            </div>
        
        </div>
	</div>
	<?php
		require_once __DIR__.'/Components/Footer.php';
	?>
	
</body>
</html>