<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enseignants - Ecole privé</title>
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
            echo "<h1>Enseignants du ".$this->levelName."</h1>";
        ?>
        <br>
        <p class="co-gray">Consulter les horaires de receptions des enseignants</p>
        <div class="listHolder">
            <div class="list">
            <div class="listHeader">
                <div class="txt"><h3>Nom</h3></div>
                <div class="txt"><h3>Prenom</h3></div> 
                <div class="txt"><h3>Heures de Reception</h3></div> 
            </div>
            <?php 
                foreach ($this->loadTeachers() as $teacher) {
                    echo "  <div class=\"listElt\">
                                <div class=\"txt\"><p>$teacher->lastName</p></div> 
                                <div class=\"txt\"><p>$teacher->firstName</p></div> 
                                <div class=\"txt\"><p>$teacher->receptionTime</p></div> 
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