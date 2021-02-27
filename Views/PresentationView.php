<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Présentation - Ecole privé</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">
</head>
<body>
	<?php
		require_once __DIR__.'/Components/Nav.php';
		require_once __DIR__.'/Components/Menu.php';
	?>
	<div class="content">
		<h1>Présentation de l'école</h1>
        <div class="presentation">
        <div class="text">
            <?php
                $presentation = $this->loadPresentation() ;
                foreach ($presentation as $elt) {
                    echo "<p class=\"paragraph\">".$elt->paragraph."</p> <br>" ;
                }
            ?>
        </div>
        <div class="imgs">
            <?php 
                foreach ($presentation as $elt) {
                    if ($elt->imgUrl != NULL and  $elt->imgUrl != '' )
                    echo "<img src=\"$elt->imgUrl\" alt=\"\" srcset=\"\">" ;
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